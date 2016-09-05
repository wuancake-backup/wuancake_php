<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>泰瑞装饰_新闻内容</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="css/master.css" type="text/css" rel="stylesheet" />
<link href="css/base.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
</head>


<body>

<!--头部-->
<div class="head">
	<div class="block yh f13">
    	<p class="tright"><a onclick="SetHome(window.location)" href="javascript:void(0)" class="pl10 pr10">设为首页</a> | <a onclick="AddFavorite(window.location,document.title)" href="javascript:void(0)" class="pl10 pr10">加入收藏</a></p>
    
   <div class="box position_a clearfix">     
   <!--导航-->
   <div class="nav fleft ofHidden">
       <ul>
           <li><a href="">首页</a></li>
           <li><a href="gsjj.html">公司简介</a></li>
           <li><a href="xwzx.php">新闻中心</a></li>
           <li><a href="cpzs.php">产品展示</a></li>
           <li><a href="">成功案例</a></li>
           <li><a href="zxly.html">在线留言</a></li>
           <li><a href="">联系我们</a></li>
           <li><a href="">资质荣誉</a></li>
       </ul>
   </div>
        
        <!--搜索-->
        <form name="searchform" method="post" action="/e/search/index.php" class="ss ofHidden">
        <input name='ecmsfrom' type='hidden' value='9'>
        <input type="hidden" name="show" value="title,newstext">
        <input class="index_srh" name="keyboard" placeholder="请输入关键字" >
        <input class="search" type="submit" name="submit" value="搜索">
        </form>
    </div>
    
    </div>
    
</div>

<!--幻灯片-->
<div class="fullSlide list_hd">
		<div class="bd">
			<ul>
			<li style="background:url(images/banner.jpg) #FFF center 0 no-repeat;"><a target="_blank" href="#"></a></li>
			<li style="background:url(images/banner2.jpg) #FFF center 0 no-repeat;"><a target="_blank" href="#"></a></li>
			<li style="background:url(images/banner.jpg) #FFF center 0 no-repeat;"><a target="_blank" href="#"></a></li>
			<li style="background:url(images/banner2.jpg) #FFF center 0 no-repeat;"><a target="_blank" href="#"></a></li>
			<li style="background:url(images/banner.jpg) #FFF center 0 no-repeat;"><a target="_blank" href="#"></a></li>
			</ul>
		</div>

		<div class="hd"><ul></ul></div>
	</div>  

<?php 
	include './php/conn.php';
	$id = $_GET["id"];
	$sql = "select * from xwzx where id=$id";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
?>
<!--文字列表页主体-->
<div class="newsbox">
    	<div class="block">
        	<div class="navmenu yh"><span>您现在的位置: <a href="#">设计工程</a> > 精品工程</span>精品工程</div>
            <div class="newsnr">
           	  <h1 class="newstitle"><?=$row['title']?></h1>
                <span class="newsxx">发布时间: <?$time = date('Y-m-d ',$row['time']);echo $time;?>&nbsp;&nbsp;&nbsp;&nbsp;来源: 汇博装饰&nbsp;&nbsp;&nbsp;&nbsp;浏览数: <?=$row['eye']?></span>
                <div class="content yh">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$row['content']?></p>
                	<?	$eye = $row['eye'] + 1;
						mysql_query("update xwzx set eye = $eye WHERE id=$id");?>
                    <div class="fenxiang">
                    <!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
<span class="bds_more">分享到：</span>
<a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<a class="bds_t163"></a>
<a class="bds_mshare"></a>
<a class="bds_tqf"></a>
<a class="bds_tieba"></a>
<a class="bds_bdhome"></a>
<a class="bds_sqq"></a>
<a class="bds_copy"></a>
<a class="bds_print"></a>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=375347" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->
                    </div>
                </div>
          </div>
        </div>
    </div>	
    
    
    

        
        
<div class="foot clearfix">
	<div class="block">
        <div class="fleft">
            <p><a href="" class="a1">联系我们</a>|<a href="" class="a2">公司诚聘</a>|<a href="" class="a3">合作伙伴</a>|<a href="" class="a4">网站地图</a></p>
            <p>Copyright © 2014-2015 www.zhongwang.com,All Rights Reserved 来源:<a href="#" target="_blank">中网科技</a></p>
            <p>版权所有  中网科技</p>
        </div>
        
        <div class="fright">
        	<p class="p1">装修热线：0517-85158777</p>
            <p class="p2">邮箱：2079491718@qq.com</p>
        </div>
    </div>
</div>    

<script src="js/all.js" type="text/javascript"></script>
</body>
</html>