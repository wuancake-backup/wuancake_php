<?php header('content-type:text/html;charset=utf-8');
    class Animal{
        public $name;
        protected $price;
        function cry(){
            echo "123";
        }
    }
    class Dog extends Animal{
        function cry(){         //子类覆盖了父类的同名方法
            echo "小狗汪汪叫";
            parent::cry();      //此时是可以调用父类的同名方法的，不冲突
        }
    }
    class Pig extends Animal{
        function cry(){
            echo "小猪哼哼叫";
        }
    }
    $a1=new Dog();
    $a1->cry();
    $a2=new Pig;
    $a2->cry();
?>