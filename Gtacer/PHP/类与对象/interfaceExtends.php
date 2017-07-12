<?php
    interface iUsb{
        public function a();
    }
    interface iUsb2{
        public function b();
    }
    interface iUsb3 extends iUsb,iUsb2{
        //一个接口可以继承多个接口
        public function test();
    }
    class class1 implements iUsb3{
        public function a(){
            //doing
        }
        public function b(){
            //doing
        }
        public function test(){
            //doing
        }
    }
?>