<?php
    require_once "OperService.class.php";
    if(isset($_REQUEST['num1']) && isset($_REQUEST['num2'])){
        $num1=$_REQUEST['num1'];
        $num2=$_REQUEST['num2'];
        $oper=$_REQUEST['oper'];
    }
    $newoper=new OperService;
    echo $newoper->GetResult($num1,$num2,$oper);
?>