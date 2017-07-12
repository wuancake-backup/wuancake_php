<html>
<head>
    <style type="text/css">

    </style>
    <script type="text/javascript">
        function test() {
            var obj = document.getElementsByName('number');
            var num = 0;
            for (var i = 0;i <= 5;i++) {
                if (obj[i].checked == true){
                    num++;
                }
            }
            if (num == 0) {
                alert('请选择后再进行投票');
            }
        }
    </script>
</head>
<body>
<form method="get" action="test.php" id = "form1">
    <input type="radio" name="number" value="no1">一号选手<br/>
    <input type="radio" name="number" value="no2">二号选手<br/>
    <input type="radio" name="number" value="no3">三号选手<br/>
    <input type="radio" name="number" value="no4">四号选手<br/>
    <input type="radio" name="number" value="no5">五号选手<br/>
    <input type="radio" name="number" value="no6">六号选手<br/>
    <input type="submit" value="提交" onclick="test()">
</form>
<form method="post" action="test.php">
    <input type="hidden" name="show" value="true">
    <input type="submit" value="查看票数统计">
</form>
</body>
</html>
<?php
    if (isset($_GET['number'])) {
        //获取被投票号
        $number = $_GET['number'];
        //获取当前投票消息
        $json = file_get_contents('vote.json');
        $json = json_decode($json);
        $json->$number->votes += 1;
        //重新编码为json格式
        $json = json_encode($json);
        //写入文件
        file_put_contents('vote.json', $json);
        //提示并返回
        echo "<script>alert('投票成功')</script>";
        echo "<script>location.assign('url');</script>";
    }
    if (isset($_POST['show'])){
        $info = file_get_contents('vote.json');
        $info = json_decode($info);
        echo "1号选手：".$info->no1->votes."票<br/>";
        echo "2号选手：".$info->no2->votes."票<br/>";
        echo "3号选手：".$info->no3->votes."票<br/>";
        echo "4号选手：".$info->no4->votes."票<br/>";
        echo "5号选手：".$info->no5->votes."票<br/>";
        echo "6号选手：".$info->no6->votes."票<br/>";
    }