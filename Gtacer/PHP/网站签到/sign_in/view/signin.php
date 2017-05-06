<?php
    include_once 'sig_in_model.php';
?>
<html>
<head>
    <title>签到表</title>
    <style>
        td{
            border:solid #4e4cf5 2px;
            text-align: center;
        }
        th{
            border:solid #4e4cf5 2px;
        }
        table{
            width: 500px;
            font-size: 20px;
        }
        .cs1{
            font-size: 35px;
        }
    </style>
</head>
<body>
<p>欢迎你：<?php echo $username;?></p>
<table style="border: solid blue 2px">
    <tr>
        <th colspan="7" class="cs1"><?php echo $today->getYear().'年'.$today->getMonth().'月'; ?></th>
    </tr>
    <tr>
        <th>星期一</th>
        <th>星期二</th>
        <th>星期三</th>
        <th>星期四</th>
        <th>星期五</th>
        <th>星期六</th>
        <th>星期日</th>
    </tr>
    <?php
    for ($i = 0;$i < $date_info['weeks'];$i++){
        echo "<tr>";
        for ($j = 0;$j < 7;$j++){
            if($date_array[$i][$j] == $now_day && $today->getMonth() == $now_month && $today->getYear() == $now_year){
                echo "<td style='background: red;'>";
                echo $date_array[$i][$j];
                echo "</td>";
            }
            else{
                echo "<td>";
                echo $date_array[$i][$j];
                echo "</td>";
            }

            if ($date_array[$i][$j] == $date_info['days'])
                break;
        }
        echo "</tr>";
    }
    ?>
    <tr>
        <td colspan="7">
            | <a href="index.php?month=<?php echo $setMonth-1;?>">上个月</a> |
            <a href="index.php?month=<?php echo $now_month?>">回到当前</a> |
            <a href="index.php?month=<?php echo $setMonth+1;?>">下个月</a> |
        </td>
    </tr>
</table>
<div>
    <?php
        $last_sign = $sign_info->today_sign($username);
        if ($last_sign == $now)
            echo "<p>你今天已签到</p>";
        else
            echo "<p>你今天未签到</p><a href='index.php?sign=1'>点击签到</a>";
        if($now - $last_sign > 1)
            echo "<p>你断签".($now - $last_sign - 1)."天</p>";
        else {

            echo "<p>你已连续签到".$sign_info->con_days($username)."天</p>";
        }
    ?>

</div>
</body>
</html>