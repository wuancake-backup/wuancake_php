<?php
use Workerman\Worker;
use \Workerman\Lib\Timer;
require_once './Autoloader.php';
// 初始化一个worker容器，监听1234端口
$worker = new Worker('websocket://0.0.0.0:1234');
// 这里进程数必须设置为1
$worker->count = 1;
// worker进程启动后建立一个内部通讯端口
$worker->onWorkerStart = function($worker)
{
    // 开启一个内部端口，方便内部系统推送数据，Text协议格式 文本+换行符
    $inner_text_worker = new Worker('Text://0.0.0.0:5678');
    $inner_text_worker->onMessage = function($connection, $buffer)
    {
        global $worker;
        // $data数组格式，里面有uid，表示向那个uid的页面推送数据
        $data = json_decode($buffer, true);
        $uid = $data['uid'];
        //   var_dump($uid);
        // 通过workerman，向uid的页面推送数据
        $ret = sendMessageByUid($uid, $buffer);
        // 返回推送结果
        $connection->send($ret ? 'ok' : 'fail');
    };
    $inner_text_worker->listen();
};
// 新增加一个属性，用来保存uid到connection的映射
$worker->uidConnections = array();
// 当有客户端发来消息时执行的回调函数

$worker->onConnect = function($connection)
{
    $timeout = 5;
    // 这里timerId是给connection动态添加的属性，用来保存这个connection的关连接的定时器id
    // 方便后面身份验证后删除定时器
    $connection->timerId = Timer::add($timeout, function($connection){
        $connection->close();
    }, array($connection), false);
};

function verification($connection,$data){
    $data = json_decode($data,true);
    if(isset($connection->auth)&&$connection->auth[$data['uid']] === true){
        return true;
    }
    if(isset($data['token'])&&$data['token']==='jSo0R0NpYcJ6ClYA')
    {
        return true;
    }
    return false;

}
$worker->onMessage = function($connection, $data)use($worker)
{
// $connection->timerId不为空，则该连接还没验证，则尝试验证
    if(!empty($connection->timerId))
    {
        // 你的验证函数，验证ok
        if(verification($connection,$data))
        {
            // 删除定时器
            Timer::del($connection->timerId);
            // 删除timerId，标记已经验证ok
            $connection->timerId = null;
            // 判断当前客户端是否已经验证,既是否设置了uid

            if(!isset($connection->uid))
            {
                // 没验证的话把第一个包当做uid（这里为了方便演示，没做真正的验证）
                $data = json_decode($data,true);
                $connection->uid = $data['uid'];
                $connection->auth[$connection->uid] = true;
                /* 保存uid到connection的映射，这样可以方便的通过uid查找connection，
                 * 实现针对特定uid推送数据
                 */
                $worker->uidConnections[$connection->uid] = $connection;
                return;
            }
        }
        // 没通过验证则关闭连接
        else
        {
            $connection->close();
        }
    }

};

// 当有客户端连接断开时
$worker->onClose = function($connection)use($worker)
{
    global $worker;
    if(isset($connection->uid))
    {
        // 连接断开时删除映射
        unset($worker->uidConnections[$connection->uid]);
    }
};

// 向所有验证的用户推送数据
function broadcast($message)
{
    global $worker;
    foreach($worker->uidConnections as $connection)
    {
//        $connection->send($message);
    }
}

// 针对uid推送数据
function sendMessageByUid($uid, $message)
{
    global $worker;
    if(isset($worker->uidConnections[$uid]))
    {
        $connection = $worker->uidConnections[$uid];
        $connection->send($message);
        return true;
    }
    return false;
}

// 运行所有的worker（其实当前只定义了一个）
Worker::runAll();