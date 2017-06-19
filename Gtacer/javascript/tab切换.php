<html>
<head>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        .bigdiv{
            border: solid black 2px;
            height: 300px;
            width:336px;
            margin: 20px auto;
        }
        ul li{
            list-style: none;
            float: left;
            border: solid black 2px;
            width: 80px;
            height: 50px;
            text-align: center;
            line-height: 50px;
        }
        #div1,#div2,#div3,#div4{
            display: none;
        }
    </style>
    <script type="text/javascript">
        window.onload = showDiv(1);

        function showDiv(id) {
            for (var i = 1;i <= 4;i++){
                var div = document.getElementById('div'+i);
                var li = document.getElementById('li'+i);
                div.style.display = "none";
                li.style.borderBottom = "solid black 2px";
            }
            document.getElementById('div'+id).style.display = 'block';
            document.getElementById('li'+id).style.borderBottom = 'solid white 2px';
        }
    </script>
</head>
<body>
<div class="bigdiv">
    <ul>
        <li id="li1" onmouseover="showDiv(1)">国内新闻</li>
        <li id="li2" onmouseover="showDiv(2)">国外新闻</li>
        <li id="li3" onmouseover="showDiv(3)">娱乐新闻</li>
        <li id="li4" onmouseover="showDiv(4)">体育新闻</li>
    </ul>
    <div id="div1">
        国内新闻内容111111111111111<br />
        国内新闻内容111111111111111<br />
        国内新闻内容111111111111111<br />
    </div>
    <div id="div2">
        国外新闻内容111111111111111<br />
        国外新闻内容111111111111111<br />
        国外新闻内容111111111111111<br />
    </div>
    <div id="div3">
        娱乐新闻内容111111111111111<br />
        娱乐新闻内容111111111111111<br />
        娱乐新闻内容111111111111111<br />
    </div>
    <div id="div4">
        体育新闻内容111111111111111<br />
        体育新闻内容111111111111111<br />
        体育新闻内容111111111111111<br />
    </div>
</div>
</body>
</html>