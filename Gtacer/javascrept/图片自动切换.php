<html>
<head>
    <script type="text/javascript">
        var i = 1;
        var cute;
        window.onload = start;

        function start() {
            var obj = document.getElementById('li1');
            obj.style.background = '#8aadf5';
            cute = window.setInterval('cut()',2000);
        }

        function cut(){
            i++;
            if (i>6){
                i=1;
            }
            var obj = document.getElementById('pic');
            obj.src = './picture/无标题'+i+'.png';
            clear();
            var thisObj = document.getElementById('li'+i);
            thisObj.style.background = '#8aadf5';
        }

        function stop() {
            window.clearInterval(cute);
        }

        function out(){
            cute = window.setInterval('cut()',2000);
        }

        function d(obj_li){
            var obj = document.getElementById('pic');
            obj.src = "./picture/无标题"+obj_li.innerText+".png";
            window.clearInterval(cute);
            i = obj_li.innerText;
            clear();
            obj_li.style.background = '#8aadf5';
        }

        function clear() {
            for (var k = 1;k <= 6;k++){
                var allObj = document.getElementById('li'+k);
                allObj.style.background = '#4e4cf5';
            }
        }
    </script>
    <style type="text/css">
        body{
            background-color: black;
        }
        .d1{
            width: 1060px;
            height: 500px;
            border: solid red 1px;
        }
        img{
            width:1000px;
            height:500px;
        }
        .d2{
            width: 50px;
            height: 50px;
            border: solid blue 1px;
            text-align: center;
            line-height: 50px;
            color: white;
            background: #4e4cf5;
        }
        ul li{
            margin-top:20px;
        }
    </style>
</head>
    <body>
    <div class="d1">
        <img src="./picture/无标题1.png" id="pic" onmouseover="stop()" onmouseout="out()" >
        <ul style="float: right;list-style:none;border: solid red 1px;margin: 0;padding: 0;">
            <li class="d2" onmouseover="d(this)" onmouseout="out()" id="li1">1</li>
            <li class="d2" onmouseover="d(this)" onmouseout="out()" id="li2">2</li>
            <li class="d2" onmouseover="d(this)" onmouseout="out()" id="li3">3</li>
            <li class="d2" onmouseover="d(this)" onmouseout="out()" id="li4">4</li>
            <li class="d2" onmouseover="d(this)" onmouseout="out()" id="li5">5</li>
            <li class="d2" onmouseover="d(this)" onmouseout="out()" id="li6">6</li>
        </ul>
    </div>
    </body>
</html>