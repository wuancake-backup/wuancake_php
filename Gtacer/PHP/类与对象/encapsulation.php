<?php header('content-type:text/html;charset=utf-8');
    class person{           /**********↓访问控制修饰符↓**********/
        public $name;            //public 表示全局，类内部、外部和子类都可以访问
        protected $age;         //protected 表示受保护的，只有本类或子类可以访问
        private $salary;        //private 表示私有的，只有本类内部可以使用
        public function __construct($iname,$iage,$isalary){
            $this->name=$iname;
            $this->age=$iage;
            $this->salary=$isalary;
        }
        public function showinfor(){       //在本类内部可以访问public,protected和private
            echo $this->name."<br/>$this->age"."<br/>$this->salary<br/>";
        }
        public function getsalary($username,$password){    //通过内部函数访问protected和private
            if($username=="xiaoming" && $password=="123")
                return $this->salary;
            else
                return "用户名密码不正确";
        }
        public function getage($iage){      //修改 protected变量
            $this->age=$iage;
        }
        public function showage(){          //访问 protected变量
            return $this->age;
        }
    }
    $p1=new person("小明",12,2000);
    echo $p1->name."<br/>";         //可以访问
    //echo $p1->age;        //不可访问
    //echo $p1->salary;     //不可访问
    echo $p1->showinfor();      //可以通过调用类内部函数访问protected和private
    echo $p1->getsalary("xiaoming",123);
    $p1->getage(60);
    echo "<br/>".$p1->showage();
?>