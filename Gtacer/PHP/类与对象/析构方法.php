<?php header('content-Type:text/html;charset=utf-8');
    class person{
        public $name;
        public $age;
        public function __construct($iname,$iage){
            $this->name=$iname;
            $this->age=$iage;
        }
        //析构方法  （对象关闭时完成的特殊工作）
        function __destruct()
        {
            echo $this->name."销毁资源<br/>";   // 析构函数会自动被调用，且没有返回值
            //关闭数据库
            //关闭文件
        }
    }
    $p1=new person("小明",16);
    $p1=null;                           //当对象成为垃圾对象(没有任何引用指向它)的时候，就会被立即销毁
    $p2=new person("小红",14);
    $p3=new person("小绿",54);        //先创建的对象后被销毁（栈的先入后出）
    echo "122".$p2->name."<br/>";
?>