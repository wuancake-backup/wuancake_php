<html >
<head>
    <style type="text/css">
        #div1{
            border:solid red 1px;
            width: 80px;
        }
        #div2{
            border: red solid 1px;
            width:100px;
            display: none;
        }
    </style>
    <script type="text/javascript">
        function showTable() {
            var obj = document.getElementById('div2');
            obj.style.display = 'block';
        }
        function hide() {
            var obj = document.getElementById('div2');
            obj.style.display = 'none';
        }
    </script>
</head>
<body>
<div id="div1"  onmouseover="showTable()" onmouseout="hide()"><a href="#">下拉列表</a></div>
<div id="div2">
    <a href="#">123</a><br/>
    <a href="#">123</a><br/>
    <a href="#">123</a><br/>
</div>
</body>
</html>