<?php
    include_once '..\models\model.php';
    $mysqli = new MysqliConnect;

    if(isset($_GET['id'])){
        $res = $mysqli->delete($_GET['id']);
        if($res)
            echo "<p style='text-align: center;color: red;'>删除成功</p>";
        else
            echo "<p style='text-align: center;color: red;'>删除失败</p>";
    }

    $count = $mysqli->get_total();
    $count_1 = $count->fetch_assoc();
    $counts = $count_1['sum'];

    $page=isset($_GET['page'])?$_GET['page']:1;
    $prev = $page > 1 ? $page - 1 : 1;
    $final = ceil($counts/5);
    $next = $page < $final ? $page + 1 : $final ;


    $res=$mysqli->print_info($page);
    while($result=$res->fetch_assoc()){
        echo<<<EOT
<tr>
<td>$result[name]</td>
<td>$result[student_id]</td>
<td>$result[sex]</td>
<td>$result[age]</td>
<td>$result[height]</td>
<td>$result[weight]</td>
<td>$result[class]</td>
<td>$result[room]</td>
<td><a href="#">编辑</a></td>
<td><a href="index.php?id=$result[id]">删除</a></td>
</tr>
EOT;
    }
?>