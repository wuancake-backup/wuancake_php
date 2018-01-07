<?php
function randColor()
{
    $aim = '0123456789ABCDEF';
    $color = '#000000';
    for ($i=1; $i <= 6; $i++) {
        $color[$i] = $aim[mt_rand(0,15)];
    }
    return $color;
}

function printN()
{
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 9; $j++) {
            if ($i >= $j) {
                printf("<td class='having%d'>%dx%d=%d</td>", $i * $j, $j, $i, $i * $j);
            } else {
                echo "<td class='block'></td>";
            }
        }
        echo "</tr>";
    }
}

function printClass(){
    for ($i = 1; $i <= 81; $i++){
        echo "
        .having{$i}{
            width:150px;
            height:100px;
            animation:kf{$i} 3s infinite linear;
            animation-direction:alternate;
        }
        @keyframes kf{$i}{
            0% {background:".randColor().";}
            50% {background:".randColor().";}
            100% {background:".randColor().";}
        }";
    }
}
?>

<style type="text/css">
    .block{
        background: #70b3ff;
    }
    table{
        color: white;
        text-align: center;
    }
    <?php printClass();?>
</style>
<table>
    <?php printN();?>
</table>