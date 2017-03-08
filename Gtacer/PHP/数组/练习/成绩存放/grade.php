<?php
    $arr2=array("学号"=>1002,"语文"=>78,"数学"=>92,"英语"=>76);
    $arr3=array("学号"=>1003,"语文"=>67,"数学"=>88,"英语"=>80);
    $arr7=array("学号"=>1007,"语文"=>90,"数学"=>95,"英语"=>80);
    ?>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>成绩单</title>
    </head>
    <body>
    <table border="2" cellspacing="0">
        <tr>
            <td>学号</td>
            <td>语文</td>
            <td>数学</td>
            <td>英语</td>
        </tr>
        <tr>
            <td><?php echo $arr2["学号"] ?></td>
            <td><?php echo $arr2["语文"] ?></td>
            <td><?php echo $arr2["数学"] ?></td>
            <td><?php echo $arr2["英语"] ?></td>
        </tr>
        <tr>
            <td><?php echo $arr3["学号"] ?></td>
            <td><?php echo $arr3["语文"] ?></td>
            <td><?php echo $arr3["数学"] ?></td>
            <td><?php echo $arr3["英语"] ?></td>
        </tr>
        <tr>
            <td><?php echo $arr7["学号"] ?></td>
            <td><?php echo $arr7["语文"] ?></td>
            <td><?php echo $arr7["数学"] ?></td>
            <td><?php echo $arr7["英语"] ?></td>
        </tr>
    </table>
    </body>
    </html>