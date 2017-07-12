<?php
    class a{
        private $n1;
        private $n2;
        private $n3;
        //使用set方法来管理所有属性
        public function __set($name, $value)
        {
            $this->name=$name;   // TODO: Implement __set() method.
        }
        //使用get方法来获取所有属性
        public function __get($name)
        {
            if(isset($name)){
                return $this->name;
            }else{
                return null;
            }
        }
    }
    $a1=new a;
    $a1->n1="hello";
    echo $a1->n1;
?>