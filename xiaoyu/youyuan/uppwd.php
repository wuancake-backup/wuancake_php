<?php  
    if(!$_SESSION['isLogin']){

        if($_POST[password]){

            header("content-type:text/html;charset=utf-8");  
            //连接mysql数据库  
            $conn=mysql_connect("localhost","root","root");  
              
            //选择数据库  
            mysql_select_db("youyuan");  
          
            //设置客户端和连接字符集  
            mysql_query("set names utf8");   
             
            mysql_query("UPDATE youyuan_admin SET password = '$_POST[password]' WHERE name = 'admin'");

            mysql_close($conn);

            echo "<script>alert('更新成功，返回重新登录!');
            location='admin.php';</script>"; 
        }
    }
    else{
    
        echo "<script>alert('请登录!');
        location='admin.php';</script>"; 
    }
?>
<html>
<head>
<title>11youyuan</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/regist.css" type="text/css"  />
<script type="text/javascript">
function checkpwd(){
    var p1=document.uppwd_form.password.value;//获取密码框的值
    var p2=document.uppwd_form.password2.value;//获取重新输入的密码值
    if(p1==""){
        
        alert("请输入密码！");//检测到密码为空，提醒输入//
        document.uppwd_form.password.focus();//焦点放到密码框
        return false;//退出检测函数
    }//如果允许空密码，可取消这个条件 
    if(p1!=p2){//判断两次输入的值是否一致，不一致则显示错误信息
        
        alert("密码不一致，请重新输入！");//检测到密码为空，提醒输入//
        document.uppwd_form.password2.focus();//焦点放到密码框
        return false;
    }
    return true;
}
</script>
</head>
<body>
<h1>管理员密码修改&nbsp;:)</h1>
<div class="regist" style="margin-top:50px;">
    <div class="web_qr_regist" id="web_qr_regist" style="display: block; height: 80px;">    
</div>

    <div class="web_regist">
        <form name="uppwd_form" id="regist_form" action="uppwd.php" method="post">
            <ul class="reg_form" id="reg-ul">
                <li>
                <label for="passwd" class="input-tips2">新密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd"  name="password" maxlength="16" class="inputstyle2"/>
                    </div>
                </li>
                <li>
                <label for="passwd2" class="input-tips2">确认密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd2" name="password2" maxlength="16" class="inputstyle2" />
                    </div>
                </li>

                <li>
                    <div class="inputArea">                   
                    <button type="submit" class="button_blue" style="margin-left:80%;" onclick="return checkpwd()">提交</button>
                    </div>
                </li>
            </ul>
        </form>      
    </div>
</body>
</html>

