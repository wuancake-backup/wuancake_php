<html onmousemove="foo(event)">
<head>
    <script type="text/javascript">
        function foo(event) {
            var obj = document.createElement('span');
            obj.innerText = '*';
            obj.style.position = 'absolute';
            obj.style.left = event.clientX;
            obj.style.top = event.clientY;
            document.body.appendChild(obj);
        }
    </script>
</head>
<body></body>
</html>