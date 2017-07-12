<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .cs1{
            width: 100px;
            height: 100px;
            background: red;
        }
        .cs2{
            width: 200px;
            height: 200px;
            background: yellow;
        }
        .cs3{
            width: 300px;
            height: 300px;
            background: black;
        }
    </style>
    <script type="text/javascript" src="jquery-3.2.1.js"></script>
</head>
<body>
<div></div>
<input type="button" value="样式1" id="div1">
<input type="button" value="样式2" id="div2">
<input type="button" value="样式3" id="div3">
<script type="text/javascript">
    $("input").click(function (){
        for (var i = 1;i <= 3;i++){
            $("div").removeClass("cs"+i);
        }
        if (this.value == "样式1") {
            $("div").addClass("cs1");
        }else if (this.value == "样式2") {
            $("div").addClass("cs2");
        }else
            $("div").addClass("cs3");
 });
</script>
</body>
</html>