<html>
<head>
<title>聊天室</title>
<?php 
	//接受window.open传过来的username
	$username=$_GET['username'];
	$username=trim($username);
?>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<script type="text/javascript" src="my.js"></script>
<script type="text/javascript">
	window.resizeTo(400,300);
	function sendMessage(){
		var myXmlHttpRequest=getXmlHttpObject();
		if(myXmlHttpRequest){
			var url="sendMessage.php";
			var data="content="+$('content').value+"&getter=<?php echo $username;?>&sender=<?php session_start();echo $_SESSION['username'];?>";
			//window.alert(data);
			myXmlHttpRequest.open("post",url,true);
			myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			myXmlHttpRequest.onreadystatechange=function (){
				if(myXmlHttpRequest.readyState==4){
					if(myXmlHttpRequest.state==200){
						//这里要返回信息，不需要处理
						
				}
				}
			}
			myXmlHttpRequest.send(data);
		}
	}
</script>
</head>
<body>
<center>
<h1><?php echo $_SESSION['username'];?>正在和<?php echo $username;?>聊天</h1>
<TEXTAREA rows="20" cols="60"></TEXTAREA><br/>
<input type="text" style="width:300px" id="content"/>
<input type="button" onclick="sendMessage();" value="发送"/>
</center>
</body>
</html>