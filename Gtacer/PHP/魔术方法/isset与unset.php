<?php
    class MyClass
    {
        private $data;

        public function __isset($name){
            echo "试图访问属性$name<br/>";
            return isset($this->data);
        }

        public function __unset($name){
            echo "<br/>试图销毁属性$name";
            unset($this->data);
        }
    }

    $a=new MyClass;
    $value=isset($a->data);
    var_dump($value);

    unset($a->data);