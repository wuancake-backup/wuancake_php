<?php /* Smarty version Smarty-3.1.16, created on 2015-12-31 23:14:01
         compiled from "tpl\login.html" */ ?>
<?php /*%%SmartyHeaderCode:18778568540e70713d4-78260344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db97a3f8af80d260372ece8474eb31d980e7a586' => 
    array (
      0 => 'tpl\\login.html',
      1 => 1451574839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18778568540e70713d4-78260344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_568540e7691f96_52035197',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568540e7691f96_52035197')) {function content_568540e7691f96_52035197($_smarty_tpl) {?><html>
<head>
    <title>Login</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="./css/login.css" type="text/css">
</head>
<body>
<form action="<<?php ?>?php echo $_SERVER['PHP_SELF'];?<?php ?>>" method="post">
    <div>
        <h1>Login</h1></br></br>
        用户名:<input type="text" name="username"></br>
        密码:&nbsp&nbsp<input type="password" name="password"></br></br>
        <input type="submit" value="登录">&nbsp&nbsp
        <input type="button" value="取消"></br></br>
        <a href="register.php">没有账户点击注册</a>
    </div>
</form>
</body>
</html><?php }} ?>
