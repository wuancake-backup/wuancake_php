<html>
<head>
    <script type="text/javascript">
        function foo(obj,event){
            obj.innerText = "坐标("+event.clientX+","+event.clientY+")";
        }
    </script>
</head>
<body>
<div style="width;500px;height:500px;border:solid red 1px;" onmousemove="foo(this,event)">坐标(0,0)</div>
</body>
</html>