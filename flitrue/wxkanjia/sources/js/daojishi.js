
function startTime()
{
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    // add a zero in front of numbers<10
    m=checkTime(m);
    s=checkTime(s);
    document.getElementById('txt').innerHTML="活动倒计时："+h+":"+m+":"+s;
    t=setTimeout('startTime()',1000);
}

function checkTime(i)
{
    if (i<10) {
        i="0" + i;
    }
    return i;
}

var toupiao=$("#toupiao");
toupiao.on("click",function () {
//TODO
    if(1){
        var btn = $(this)
        btn.button('loading')
        window.location.href="http://kanjia.cn/detail.php"
        btn.button('reset')
    }else{
        alert("没有关注公众号")
    }
});






