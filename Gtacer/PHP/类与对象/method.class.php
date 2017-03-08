<?php
    header('Content-Type:text/html;charset=utf-8');
    class person{
        public $name;
        public $age;

        public function speak(){
            echo "我是一个函数<br/>";
        }

        public function jisuan($n){
            $sum=0;
            for($i=1;$i<=$n;$i++){
                $sum+=$i;
            }
            return $sum;
        }
    }
    //创建一个对象
    $p=new person();
    $p->speak();        //通过对象去访问，调用成员方法
                        //调用成员方法和调用普通函数的机制仍然不变
    echo "计算结果为：".$p->jisuan(5);
?>