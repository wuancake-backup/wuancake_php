<?php
    class student{
        public $name;
        public static $fee=0;
        public function __construct($name){
            $this->name=$name;
        }
        public static function enterschool($ifee){     //使用静态方法操作静态变量（静态方法无法调用非静态变量）
            self::$fee+=$ifee;
        }
        public static function getfee(){
            return self::$fee;
        }
    }
    $student1=new student("小明");
    $student1->enterschool(500);
    $student2=new student("小红");
    $student2->enterschool(200);
    echo student::getfee();
?>