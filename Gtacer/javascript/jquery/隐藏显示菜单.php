<html>
<form >
<meta charset="utf-8">
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	dt{
		width: 100px;
		height: 25px;
		line-height: 25px;
		background: blue;
	}
	dd{
		margin: 5px 0 5px 20px;
		background: red;
		width: 100px;
		height: 25px;
		line-height: 25px;
	}
</style>
<script type="text/javascript" src="jquery-3.2.1.js"></script>
<dl>
	<dt>���ٷ���</dt>
	<dd>����</dd>
	<dd>����</dd>
	<dd>�ĵ�</dd>
</dl>
<dl>
	<dt>�˵���</dt>
	<dd>��Ƶ</dd>
	<dd>ͼƬ</dd>
	<dd>�ĵ�</dd>
	<dd>����</dd>
</dl>
<dl>
	<dt>�ղ�</dt>
	<dd>����</dd>
	<dd>�������</dd>
</dl>
<script type="text/javascript">
	$("dt").bind("click",function(){
		$(this).parent().find("dd").slideToggle();
	})
</script>
</html>