<?php
    /*
       {
        "person1":{
            "name":"小红",
            "height":"186",
            "weight":"80",
            "age":"18",
            "sex":"男"
        },
        "person2":{
            "name":"小白",
            "height":"146",
            "weight":"60",
            "age":"16",
            "sex":"女"
        }
      }
     */
    header('Content-Type:text/html;charset=utf-8');
    //接受json数据并解码
    $json = file_get_contents('php://input');      //接受传来的json数据
    $de_json = json_decode($json);                  //将接受的json解码(解码成对象)
    $de2_json = json_decode($json,true);     //解码为数组
    echo $de_json->person1->name;
    echo "<pre>";
    print_r($de2_json);
    echo "</pre>";

    //将json格式的字符串或数组编码并发送

    //将中文字符转换为十六进制，然后将字符串进行JSON编码，编码完成后解码已编码的URL字符串（将十六进制转换为中文字符）
    //这样就可以直接在网页上输出中文
    $foo = urlencode($json);
    $foo = json_encode($foo);
    $foo = urldecode($foo);
    echo $foo;

    $json_array = array('person1'=>array('name'=>'小红','height'=>'186','weight'=>'80','age'=>'18','sex'=>'男'),
        'person2'=>array('name'=>'小白','height'=>'146','weight'=>'60','age'=>'16','sex'=>'女')
    );
    echo "<br/>".json_encode($json_array);

    if (json_last_error()){     //返回JSON编码解码时最后发生的错误。
        echo "出错了！".json_last_error_msg();
    }