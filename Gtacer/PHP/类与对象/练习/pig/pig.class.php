<?php
    class pig{
        public $name;
        public $weight;
        public $color;
        public $age;
        public function addweigh($a){
            $this->weight=$this->weight+$a;     //这里如果直接用$weight,php将会认为我们创建了一个新的变量
        }
        public function minusweigh($a){
            $this->weight=$this->weight-$a;
        }
        public function showweigh(){
            echo '猪重：'.$this->weight;
        }
    }
?>