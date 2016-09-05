<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>泰瑞装饰_产品展示</title>
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


<!--图片列表页主体-->
<div class="newsbox yh">
    	<div class="block">
        	<div class="navmenu"><span>您现在的位置: <a href="#">设计工程</a> > 精品工程</span>精品工程</div>
            
<div class="pic_list">
    <ul class="clearfix">
	<?php 
		include './php/cpzs.php';
		while($row = mysql_fetch_array($result)){
	?>
      <li>
        <div class="photo yh"><img src="<?=$row['image']?>" />
          <p><?=$row['name']?></p><!--产品名称-->
        </div>
        <div class="rsp"></div>
        <div class="text">
		  <a href="">
          <h3><?=$row['name']?></h3><!--产品名称-->
          <p><?php echo substr($row['briIntro'],0,70);?>...</p><!--产品简介-->
          <div>TIME :<?$time = date('Y-m-d',$row['time']);echo $time;?></div>
          </a>
		 </div>
      </li>
	<?php }?>
    </ul>
    
    <div class="page clearfix"><a href="" class="on">1</a><a href="">2</a><a href="">3</a><a href="">>></a></div>
    
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