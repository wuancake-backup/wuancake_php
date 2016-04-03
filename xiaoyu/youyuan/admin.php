<title>管理员登录</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/regist.js"></script>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>管理员登录：）</h1>

<div class="regist" style="margin-top:50px;">
    <div class="web_qr_regist" id="web_qr_regist" style="display: block; height: 50px;">    
</div>
    <div class="web_regist"><form name="regist_form" id="regUser" accept-charset="utf-8"  action="check.php" method="post">
        <ul class="reg_form" id="reg-ul">
                <li>
                    <label for="user"  class="input-tips2">用户名：</label>
                    <div class="inputOuter2">
                        <input type="text" id="user" name="admin_name" maxlength="16" class="inputstyle2"/>
                    </div>
                </li>
                
                <li>
                <label for="passwd" class="input-tips2">密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="password"  name="password" maxlength="16" class="inputstyle2"/>
                    </div>
                </li>
                
                <li>
                    <div class="inputArea">
                        <input type="submit" id="reg"  style="margin-top:10px;margin-left:240px;" class="button_blue" value="登录"/> 
                    </div>
                </li>
            </ul></form>
           
    
    </div>
</div>
</body></html>
