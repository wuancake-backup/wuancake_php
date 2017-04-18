<div class="board">
    <div class="board_1">
        <?php foreach ($name as $key=>$value){?>
        <table  border='1' cellspacing="0" cellpadding="20" >
            <tr>
                <td class="board_2">用户昵称：<br/><?php echo htmlentities($value); ?><br/>留言时间:<br/><?php echo $date[$key]; ?></td>
                <td class="board_3"><?php echo htmlentities($message[$key]); ?></td>
                <?php if(!empty($_SESSION['credentials'])){ ?>
                <td><a href="http://localhost/codeigniter/index.php/blog/delete_message/1/<?php echo $id[$key];?>/">删除</a></td>
                <?php }?>
            </tr>
        </table>
        <?php } ?>
    </div><br/><br/>

    <div style="text-align: center;color: aqua">
        <form action="http://localhost/CodeIgniter/index.php/blog/give_message" method="post">
            <textarea rows="10" cols="140" name="message">Hello world!</textarea>
            <br/><br/>
            留言ID:<input type="text" name="username">
            <input type="submit" value="提交留言"/>
        </form>
    </div>
    <div style="height: 50px;"></div>
</div>