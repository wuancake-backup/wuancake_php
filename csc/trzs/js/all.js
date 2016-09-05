// JavaScript Document

 //加入收藏
        function AddFavorite(sURL, sTitle) {
            sURL = encodeURI(sURL); 
        try{   
            window.external.addFavorite(sURL, sTitle);   
        }catch(e) {   
            try{   
                window.sidebar.addPanel(sTitle, sURL, "");   
            }catch (e) {   
                alert("加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");}}}
    //设为首页
    function SetHome(url){
        if (document.all) {
            document.body.style.behavior='url(#default#homepage)';
               document.body.setHomePage(url);
        }else{
            alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页!");}}

//幻灯片
jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });


$(".xc_pic .block").hover(function(){
	$(this).children('b').stop().animate({top:'0px'},500);
	$(this).children('ul').stop().animate({top:'0px'},500);
},function(){
	$(this).children('b').stop().animate({top:'-230'},500);
	$(this).children('ul').stop().animate({top:'-230px'},500);
});

//精英团队
jQuery(".team").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});
 $(".team .bd ul li").hover(function(){
        $(this).children('.title').stop().animate({bottom:'3px'},{queue:false,duration:136});
    },function(){
        $(this).children('.title').stop().animate({bottom:'-33px'},{queue:false,duration:180});
    });

//图片列表
	$(".pic_list ul li .rsp").hide();	
	$(".pic_list ul li").hover(function(){
		$(this).find(".rsp").stop().fadeTo(500,0.8)
		$(this).find(".text").stop().animate({bottom:'0'}, {duration: 500})
	},
	function(){
		$(this).find(".rsp").stop().fadeTo(500,0)
		$(this).find(".text").stop().animate({bottom:'275'}, {duration: "fast"})
		$(this).find(".text").animate({bottom:'-275'}, {duration: 0})
	});













