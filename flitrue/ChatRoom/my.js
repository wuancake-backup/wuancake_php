// 创建ajax引擎
function getXmlHttpObject() {
	var xmlHttpRequest;
	// 不同的浏览器获取对象xmlHttpRequest对象方法不一样
	if (window.ActiveXObject) {
		xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		xmlHttpRequest = new XMLHttpRequest();
	}
	return xmlHttpRequest;
}

var xhr=getXmlHttpObject();

function $(id) {
	return document.getElementById(id);
}

function checkName(){
	var url="checkName.php";
	var data='username='+$('username').value;
	xhr.open('post',url,true);
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.onreadystatechange=chuli;
	xhr.send(data);
}

function chuli(){
	if(xhr.readyState==4 && xhr.status==200){
		var mes=xhr.responseText;
		$('mes').innerText=mes;
	}
}

