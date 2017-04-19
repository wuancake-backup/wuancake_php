<?php   header('content-type:text/html;charset=utf-8');
    class A
    {
        public function test01()
        {
            echo "接收一个参数";
        }

        public function test02()
        {
            echo "接收二个参数";
        }

        function __call($method, $p)            //参数被储存在数组中，传给$method
        {
            if ($method == "test") {
                if (count($p) == 1) {                    //数组的长度为1，即只传了一个参数
                    $this->test01($p);
                } else if (count($p) == 2) {            //数组的长度为2，即传了两个参数
                    $this->test02($p);
                }
            }
        }
    }
    $a=new A();
    $a->test(1);
    echo "<br/>";
    $a->test(56,90);
?>