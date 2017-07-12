<html>
<head>
    <style type="text/css">

    </style>
    <script type="text/javascript">
        //获取屏幕的高度和宽度
        var screenHeight = screen.availHeight;
        var screenWidth = screen.availWidth;
        var watch = false;
        function startGame(obj) {
            if (!watch)
                if (obj.value == '继续游戏'){
                    window.clearInterval(watch);
                    watch = window.setInterval('loadStar()',500);
                    obj.value = '开始游戏';
                }
                else
                    watch = window.setInterval('loadStar()',500);
        }
        //随机在屏幕上出现星星
        function loadStar(){
            var star = document.createElement("img");
            star.src = 'timg.jpg';
            //随机图片出现的大小
            star.width = Math.floor(Math.random()*200+20);
            //随机图片出现的位置
            star.style.position = 'absolute';
            star.style.left = Math.floor(Math.random()*(screenWidth-100)+100) + "px";
            star.style.top = Math.floor(Math.random()*(screenHeight-100)+100) + "px";
            document.body.appendChild(star);
            //绑定触发事件
            star.onmouseover = removeStar;
        }
        //删除图片
        function removeStar(){
            this.parentNode.removeChild(this);
            var score = document.getElementById('score');
            var scores = Math.floor(score.innerText)+500;
            score.innerText = scores;
        }
        function pause(){
            clearInterval(watch);
            watch = false;
            var startg = document.getElementById('startg');
            startg.value = '继续游戏';

            //或者直接使用alert('游戏暂停')，这样可以避免游戏暂停的过程中，玩家操作
        }
        function reStart(){
            var score = document.getElementById('score');
            score.innerText = '0';
            window.clearInterval(watch);
            watch = false;
        }
    </script>
</head>
<body>
<div>分数：<span id="score">0</span></div>
<div>
    <input type="button" value="开始游戏" onclick="startGame(this)" id="startg">
    <input type="button" value="暂停游戏" onclick="pause()">
    <input  type="button" value="重新开始" onclick="reStart()">
</div>
</body>
</html>