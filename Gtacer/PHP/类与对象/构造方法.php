<?php header('content-Type:text/html;charset=utf-8');
    class person{
        public $name;
        public $age;
        public function __construct($iname,$iage){      //构造方法：没有返回值，当创建新的对象时它是自动被调用的
            echo "我是构造方法<br/>";
            $this->name=$iname;
            $this->age=$iage;
        }
    }
    $p1=new person("小明",18);       //会自动调用构造方法
    echo $p1->name.$p1->age;
?>