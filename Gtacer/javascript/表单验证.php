<html >
<head>
    <script type="text/javascript">
        function check(){
            var email = document.getElementById('email').value;
            var pas = document.getElementById('password').value;
            if (email == ''){
                alert('邮箱不能为空');
                return false;
            }
            else if (email.indexOf('@') == -1){
                alert('邮箱格式不正确！');
                return false;
            }
            else if (pas.length < 6){
                alert('密码长度错误！');
                return false;
            }
            else if (pas == ''){
                alert('密码不能为空！');
                return false;
            }
            else
                return true;
        }
    </script>
</head>
<body>
<form action="" method="get" onsubmit="return check()">
    用户名：<input type="text" name="email" id="email">
    密码：<input type="password" name="password" id="password">
    <input type="submit" value="登录">
</form>
</body>
</html>