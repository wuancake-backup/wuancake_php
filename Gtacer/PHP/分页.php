<?php
    $connect = new mysqli('localhost','root','root','test');
    if ($connect->connect_error)
        die('连接失败'.$connect->connect_error);

    $size_all = $connect->query('SELECT id FROM foo');
    $size = ceil($size_all->num_rows/5);
    
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($page - 1)*5;

    $res = $connect->query("SELECT * FROM foo LIMIT $offset,5");
    ?>
        <html>
        <body>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
            </tr>
            <?php
            while ($result = $res->fetch_object()){
                echo "<tr>";
                foreach ($result as $value){
                    echo "<td>";
                    echo "$value";
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
            <tr>
                <td colspan='3'>
                    <a href="test.php?page=1">首页</a>
                    <a href="test.php?page=<?php if ($page==1)echo 1;else echo $page-1?>">上一页</a>
                    <?php
                    for ($i = $page <= 3 ? 1 : $page - 2;$i <= $size;$i++){
                        if ($i == $page)
                            echo "<a href='test.php?page=$i' style='color: red'>[$i]</a>&nbsp;";
                        else
                            echo "<a href='test.php?page=$i'>[$i]</a>&nbsp;";
                        if ($page <= 3){
                            if ($i == 5)
                                break;
                        }
                        else
                            if($i > $page + 1)
                                break;
                    }
                    ?>
                    <a href="test.php?page=<?php if ($page==$size)echo $size;else echo $page+1?>">下一页</a>
                    <a href="test.php?page=<?php echo $size?>">最后一页</a>
                </td>
            </tr>
        </table>
        </body>
        </html>
    <?php
    $size_all->free_result();
    $res->free_result();
    $connect->close();
    ?>