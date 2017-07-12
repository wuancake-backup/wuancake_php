<?php
    trait test1
    {
        function hello()
        {
            echo "Hello";
        }
        function word()
        {
            echo "Word";
        }
    }

    trait test2
    {
        function hello()
        {
            echo "你好";
        }
        function  word()
        {
            echo "世界";
        }
    }

    trait test3{
        use test1,test2;    //trait中也可以使用trait
    }

    class SayHello1
    {
        use test1,test2{    //可以使用多个trait，使用逗号分隔。例如：use test1,test2;
            test1::hello insteadof test2;   //使用test1的hello函数
            test2::word insteadof test1;    //使用test2的word函数
        }
    }

    class SayHello2
    {
        use test2{hello as sayhello;}
    }

    $a=new SayHello1();
    $a->hello();

    $b=new SayHello2();
    $b->sayhello();




