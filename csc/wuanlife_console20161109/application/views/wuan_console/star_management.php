<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>star_management</title>
<style>
a{ text-decoration: none;}

#main{
    margin-left: 240px;
    padding-top: 30px;
    padding-left: 30px;

}

table{
    border: solid 1px black;
    border-collapse: collapse;
    }

td{
    border: 1px solid black;
    padding: 3px;
    }
#button{
    margin-top: 20px;
    margin-left: 260px;
    font-size: 25px;
    text-indent: 50px;
    letter-spacing: 0px;

}
#tr{
    font-weight: bold;
}
</style>
</head>
<body>
<div id="main">
<table>
<?php
    if(empty($starinfo)){
        echo '无星球！';
    }else{
?>

    <tr id="tr">
        <td>星球id</td>
        <td>星球名称</td>
        <td>是否私密</td>
        <td>星球介绍</td>
        <td>星球主人</td>
        <td>星球主人id</td>
        <td width = 50>状态</td>
        <td width = 50>改名</td>
        <td width = 50>转让</td>
        <td width = 100 align='center'>操作</td>
    </tr>

<?php foreach ($starinfo as $key): ?>
    <tr>
        <td><?php echo $key['id'] ?></td>
        <td><?php echo $key['name'] ?></td>
        <td><?php echo $key['private'] ?></td>
        <td><?php echo $key['g_introduction'] ?></td>
        <td><?php echo $key['owner'] ?></td>
        <td><?php echo $key['owner_id'] ?></td>
        <td><?php if($key['status']  =="已隐藏")
        {
             ?><p style="color: red"><?php echo $key['status'] ?></p>
        <?php
        }
        else
            echo $key['status'];
            ?></td>
        <td><a href="<?php echo site_url('Wuan/star_name_upd/'.$key['id']);?>">改名</a></td>
        <td><a href="<?php echo site_url('Wuan/star_user_upd/'.$key['id']);?>">转让</a></td>
        <td>

            <!-- <a href="<?php echo $_SERVER['SCRIPT_NAME'] ?>/wuan/star_close/<?php echo $key['id'] ?>">关闭</a> -->

            <a href="
            <?php
                if($key['status']=="已隐藏"){
                    echo site_url('Wuan/star_management_open/'.$key['id']).'">打开';
                }else{
                    echo site_url('Wuan/star_management_close/'.$key['id']).'">隐藏';
                }
                ?>
            </a>|
            <a href="
            <?php
                if($key['private']=='私密'){
                    echo site_url('Wuan/star_private_unset/'.$key['id']).'">取私';
                }else{
                    echo site_url('Wuan/star_private_set/'.$key['id']).'">私密';
                }
                ?>


            </a>

        </td>
    </tr>
    <?php endforeach; }?>
</table>
    </div>
    <div id="button">
    <!--    <?php echo $links; ?> -->
    </div>
</body>
</html>