<html>
<head>
    <style type="text/css">
        #inside{
            display: inline-block;
            width: 10px;
            height: 50px;
            background: yellow;
        }
        #outside{
            display: inline-block;
            width: 1000px;
            height: 50px;
            border: solid red 1px;
        }
    </style>
    <script type="text/javascript">
        window.onload = clock;
        var width = 0;
        function clock(){
            window.setInterval('timeReduce()',1000);
        }
        function timeReduce(){
            var obj = document.getElementById('time');
            if (obj.innerText == '0'){
                alert('时间到！');
                location.reload();
            }
            obj.innerText = Math.floor(obj.innerText)-1;
            var inside = document.getElementById('inside');
            width += 1000/60;
            inside.style.width = width +"px";
        }
    </script>
</head>
<body>
倒计时：<span id="time">60</span>
<span id = "outside"><span id="inside"></span></span>
</body>
</html>
