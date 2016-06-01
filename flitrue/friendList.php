<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<script type="text/javascript">
function gai(val,obj){
	if(val=='over'){
		obj.style.color="red";
		obj.style.cursor="pointer";
	}else if(val=='out'){
		obj.style.color="black";
	}
}

function openChatRoom(obj){
	window.open("chatRoom.php?username="+encodeURI(obj.innerText),"_blank");
}
</script>
</head>
<body>
<h1>好友列表</h1>
<ul>
	<li onmouseover="gai('over',this)" onclick="openChatRoom(this)" onmouseout="gai('out',this)">宋江</li>
	<li onmouseover="gai('over',this)" onclick="openChatRoom(this)" onmouseout="gai('out',this)">小倩</li>
	<li onmouseover="gai('over',this)" onclick="openChatRoom(this)" onmouseout="gai('out',this)">张飞</li>
</ul>
</body>
</html>