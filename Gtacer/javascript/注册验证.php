<html>
<head>
    <style type="text/css">
        .error{
            border: solid red 1px;
            background: yellow;
            color: red;
            font-size: 7px;
        }
        .hint{
            font-size:7px;
            color: grey;
        }
        .div1{
            width: 650px;
            border: solid red 1px;
        }
    </style>
    <script type="text/javascript">
        function check() {
            return checkEmail() && checkUsername() && checkPassword() && checkRepassword();
        }
        function emailInfo(){
            var email_hint = document.getElementById('email_hint');
            email_hint.className = 'hint';
            email_hint.innerHTML = '输入电子邮箱地址';
        }
        function userInfo() {
            var user_hint = document.getElementById('user_hint');
            user_hint.className = 'hint';
            user_hint.innerHTML = '输入用户的昵称';
        }
        function pasInfo() {
            var pas_hint = document.getElementById('pw_hint');
            pas_hint.className = 'hint';
            pas_hint.innerHTML = '输入密码';
        }
        function repasInfo() {
            var repas_hint = document.getElementById('repw_hint');
            repas_hint.className = 'hint';
            repas_hint.innerHTML = '再次输入密码';
        }

        function checkEmail(){
            var email = document.getElementById('email').value;
            var email_hint = document.getElementById('email_hint');
            if (email == ''){
                email_hint.className = 'error';
                email_hint.innerHTML = '电子邮箱地址不能为空';
                return false
            }
            else if (email.indexOf('@') == -1){
                email_hint.className = 'error';
                email_hint.innerHTML = '电子邮箱格式不正确';
                return false
            }
            else{
                email_hint.innerHTML = '<img src=""/>';
                return true;
            }
        }
        function checkUsername(){
            var user = document.getElementById('username').value;
            var user_hint = document.getElementById('user_hint');
            if (user == ''){
                user_hint.className = 'error';
                user_hint.innerHTML = '用户名不能为空';
                return false
            }
            else if (user.length < 6){
                user_hint.className = 'error';
                user_hint.innerHTML = '用户名过短！';
                return false
            }
            else if (user.length > 16) {
                user_hint.className = 'error';
                user_hint.innerHTML = '用户名过长！';
                return false
            }
            else{
                user_hint.innerHTML = '<img src=""/>';
                return true;
            }
        }
        function checkPassword() {
            var password = document.getElementById('password').value;
            var pas_hint = document.getElementById('pw_hint');
            if (password == ''){
                pas_hint.className = 'error';
                pas_hint.innerHTML = '密码不能为空！';
                return false
            }
            else if (password.length < 6){
                pas_hint.className = 'error';
                pas_hint.innerHTML = '密码过短！';
                return false
            }
            else if (password.length > 16){
                pas_hint.className = 'error';
                pas_hint.innerHTML = '密码过长！';
                return false
            }
            else{
                pas_hint.innerHTML = '<img src=""/>';
                return true;
            }
        }
        function checkRepassword() {
            var password = document.getElementById('password').value;
            var repassword = document.getElementById('repassword').value;
            var repw_hint = document.getElementById('repw_hint');
            if (repassword == ''){
                repw_hint.className = 'error';
                repw_hint.innerHTML = '请重新输入密码！';
                return false;
            }
            else if (password != repassword){
                repw_hint.className = 'error';
                repw_hint.innerHTML = '两次输入的密码不一致！';
                return false
            }
            else if (password == repassword){
                repw_hint.innerHTML = '<img src=""/>';
                return true;
            }
        }
    </script>
</head>
<body>
<div class="div1">
<form action="null.php" method="get" onsubmit="return check()">
    电子邮箱:<input type="text" id="email" name="email" size="20" onfocus="emailInfo()" onblur="checkEmail()"/>
    <span id="email_hint"></span><br/><br/>

    &#12288;用户名:<input type="text" id="username" name="username" size="20" onfocus="userInfo()" onblur="checkUsername()"/>
    <span id="user_hint"></span><br/><br/>

    &#12288;&#12288;密码:<input type="password" id="password" name="password" size="20" onfocus="pasInfo()" onblur="checkPassword()"/>
    <span id="pw_hint"></span><br/><br/>

    确认密码:<input type="password" id="repassword" name="repassword" size="20" onfocus=" repasInfo()" onblur="checkRepassword()"/>
    <span id="repw_hint"></span><br/><br/>

    <input type="submit" value="提交">
</form>
</div>
</body>
</html>