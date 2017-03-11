<?php header('content-type:text/html;charset=utf-8');
    //定义规范（方法/属性）
    interface iUsb{     //接口中必须有属性，但是必须是常量，并且是公开的
        const AB=50;
        public function start();
        public function stop();
    }

    //编写手机类，让它去实现接口
    //1，当一个类实现了某个接口，则要求该类必须实现这个接口的所有方法
    class Camera implements iUsb{
        public function start(){
            echo "相机开始工作";
        }
        public function stop(){
            echo "相机停止工作";
        }
    }
    class Phone implements iUsb{
        public function start(){
            echo "手机开始工作";
        }
        public function stop(){
            echo "手机停止工作";
        }
    }
    $camera1=new Camera;
    $camera1->start();
    $camera1->stop();

    $phone1=new phone;
    $phone1->start();
    $phone1->stop();

?>