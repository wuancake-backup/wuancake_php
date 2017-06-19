<html>
<head>
    <style>
    </style>
    <script>
        window.onload = init;
        function init() {
            window.setTimeout('tiaozhuan()',5000);
            window.setInterval('settext()',1000);
        }
        function tiaozhuan(){
            location.replace('www.baidu.com');
        }
        function settext(){
            var text = document.getElementById('sp');
            sp.innerText-=1;
        }
    </script>
</head>
<body>
登录成功，<span id="sp">5</span>秒后跳转到主页
</body>
</html>