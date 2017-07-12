<html>
<head>
    <title>学生信息管理系统</title>
    <style>
        .foo{
            text-align: center;
            width: 1000px;
            height: 600px;
            margin: 100px auto;
        }

        table{
            height: 500px;
            width:1000px;
            margin: 0 auto;
            text-align: center;
            border: solid black 1px;
        }
    </style>
</head>

<body>
    <div class="foo">
        <h2>学生信息管理系统</h2>
        <div>
        <table border="1">
            <tr>
                <td>学生姓名</td>
                <td>学生证号</td>
                <td>性别</td>
                <td>年龄</td>
                <td>身高(cm)</td>
                <td>体重(kg)</td>
                <td>班级</td>
                <td>教室</td>
                <td colspan="2">操作</td>
            </tr>
            <?php
                include_once 'print_info.php';
            ?>
            <tr><td colspan="11">
                    <a href="index.php?page=1">首页</a>
                    <a href="index.php?page=<?php echo $prev ?>">上一页</a>
                    <a href="index.php?page=<?php echo $next ?>">下一页</a>
                    <a href="index.php?page=<?php echo $final?>">末页</a>
                </td></tr>
        </table>
        </div>
    </div>
</body>
</html>