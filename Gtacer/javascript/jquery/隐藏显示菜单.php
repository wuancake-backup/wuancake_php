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
	<dt>快速访问</dt>
	<dd>桌面</dd>
	<dd>下载</dd>
	<dd>文档</dd>
</dl>
<dl>
	<dt>此电脑</dt>
	<dd>视频</dd>
	<dd>图片</dd>
	<dd>文档</dd>
	<dd>下载</dd>
</dl>
<dl>
	<dt>收藏</dt>
	<dd>娱乐</dd>
	<dd>最近访问</dd>
</dl>
<script type="text/javascript">
	$("dt").bind("click",function(){
		$(this).parent().find("dd").slideToggle();
	})
</script>
</html>