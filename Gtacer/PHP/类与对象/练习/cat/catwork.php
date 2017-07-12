<?php
require_once 'cat.class.php';
$cat1=new Cat();
$doing=$_REQUEST['doing'];
switch($doing){
    case 'oper':
        $num1=$_REQUEST['num1'];
        $num2=$_REQUEST['num2'];
        $sig=$_REQUEST['sign'];
        echo "计算结果为：".$cat1->arithmetic($num1,$num2,$sig);
        break;
    case 'area':
        $radius=$_REQUEST['radius'];
        echo "半径为$radius"."的圆的面积为：".$cat1->area($radius);
        break;
    case 'rec_area':
        $recnum1=$_REQUEST['recnum1'];
        $recnum2=$_REQUEST['recnum2'];
        echo "长为$recnum1"."宽为$recnum2"."的矩形的面积为：".$cat1->rec_area($recnum1,$recnum2);
}

?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
<br/>
<a href="ui.php">返回计算器</a>
</body>
</html>