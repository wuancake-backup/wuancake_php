<?php header('content-type:text/html;charset=utf-8');
    //父类
    class student{
        public $name;
        protected $age;         //private不能继承
        protected $grade;
        public function __construct($iname,$iage,$igrade){
            $this->name=$iname;
            $this->age=$iage;
            $this->grade=$igrade;
        }

        public function showInfo(){
            echo $this->name."||".$this->age."<br/>";
        }
    }
    //子类       关键字
    class pupil extends student {
        public function testing(){
            echo "小学生考试<br/>";
        }
    }
    //子类
    class graduate extends student{
        public function testing(){
            echo "研究生考试<br/>";
        }
    }
    //创建一个小学生
    $student1=new pupil("小明",18,100);
    $student1->testing();
    $student1->showInfo();
    //创建一个研究生
    $student2=new graduate("小红",19,120);
    $student2->testing();
    $student2->showInfo();
?>
