<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="./jquery-3.2.1.js"></script>
</head>
<body>
<div id="div1" class="div1">dasdasd</div>
<input type="button" value="点击">
<input type="button" value="点击2" class="but">
<a href="#">点击</a>
<script type="text/javascript">
    //元素选择器、ID选择器
    $("input").click(function(){
        $("#div1").css({background:"red"});
    });
    //类选择器
    $("a").click(function(){
        $(".div1").css({background:"yellow"});
    });
    //联合选择器
    $(".but").click(function(){
        $(".div1,a,div").css({background:"black"});
    });
</script>
</body>
</html>