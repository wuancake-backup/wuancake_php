<?php header('content-Type:text/html;charset=utf-8');
    global $nums;
    $nums=0;
    class child{
        public $name;
        function __construct($name){
            $this->name=$name;
        }

        public function JoinGame(){
            global $nums;       //声明全局变量
            $nums++;
            echo $this->name."加入了游戏<br/>";
        }
    }
    $c1=new child("小红");
    $c1->JoinGame();
    $c2=new child("小白");
    $c2->JoinGame();
    $c3=new child("小绿");
    $c2->JoinGame();
    echo $nums;
?>