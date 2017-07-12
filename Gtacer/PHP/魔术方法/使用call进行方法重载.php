<?php
    class A
    {
        public function test01()
        {
            echo "接收一个参数时调用test01函数";
        }

        public function test02()
        {
            echo "接收二个参数调用test02函数";
        }

        public function __call($method, $p){         //要调用的方法名被传给$method,参数被储存在数组中，传给$p
            if ($method == "test") {
                if (count($p) == 1) {                    //数组的长度为1，即只传了一个参数
                    $this->test01($p);
                } else if (count($p) == 2) {            //数组的长度为2，即传了两个参数
                    $this->test02($p);
                }
            }
        }

        public static function __callStatic($name, $arguments){
            echo "要调用的方法名为$name<br/>";
            var_dump($arguments);
        }
    }
    //调用__call()方法
    $a=new A();
    $a->test(1);        //在对象中调用一个不可访问方法时，__call() 会被调用。
    echo "<br/>";
    $a->test(56,90);
    echo "<br/>";

    //调用__callStatic()
    //用静态方式中调用一个不可访问方法时，__callStatic() 会被调用。
    A::test(123,456);