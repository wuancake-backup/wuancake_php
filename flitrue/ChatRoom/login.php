<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<script type="text/javascript" src='my.js'></script>
</head>
<body>
<h1>欢迎登录聊天室</h1>
<form action="LoginController.php" method="post">
用户名：<input type="text" name="username" id="username" onBlur='checkName();'/>
<span id="mes"></span><br/>
 密  码：<input type="password" name="passwd"/><br/>
<input type="submit" value="登录聊天室"/><br/>
</form>
</body>
</html>