<?php
    class MyClass1
    {
        public $myContent;
        public $name='小明';
        public  function __construct($a){
            $this->myContent=$a;
        }
        public function __sleep(){
            $this->myContent = '秘密被销毁';
            return array('myContent');      //name值被抛弃(不会被串行化，但仍然存在于对象之中),而myContent的值被储存了起来
            //__sleep方法必须返回一个数组,包含需要串行化的属性. PHP会抛弃其它属性的值. 如果没有__sleep方法,PHP将保存所有属性.

        }
        public function __wakeup()
        {
            echo "反串行化";
        }
    }

    $a=new MyClass1('这是一个秘密');

    echo "<br/>$a->myContent<br/>";

    echo serialize($a);     //串行化一个对象时，PHP会先调用__sleep方法

    echo unserialize($a);   //反串行化一个对象时，PHP会先调用__wakeup方法

    echo "<br/>$a->myContent";