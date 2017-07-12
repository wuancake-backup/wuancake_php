<?php header('content-Type:text/html;charset=utf-8');
    class child{
        public $name;
        public static $nums=0;      //静态变量是所有对象共用的
        function __construct($name){
            $this->name=$name;
        }
        public function JoinGame(){
            self::$nums+=1;            //在类中访问静态变量
            echo $this->name."加入了游戏<br/>";
        }
    }
    $c1=new child("小红");
    $c1->JoinGame();
    $c2=new child("小白");
    $c2->JoinGame();
    $c3=new child("小绿");
    $c3->JoinGame();
    echo child::$nums;              //在类外访问静态变量
?>