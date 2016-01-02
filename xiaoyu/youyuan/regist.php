
<!DOCTYPE html>
<title>我要报名</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<link href="css/regist.css" rel="stylesheet" type="text/css" />

<script>
$(function(){
    var regBtn = $("#regBtn");
    $("#regText").change(function(){
        var that = $(this);
        that.prop("checked",that.prop("checked"));
        if(that.prop("checked")){
            regBtn.prop("disabled",false)
        }else{
            regBtn.prop("disabled",true)
        }
    });
});

function HS_DateAdd(interval,number,date){
	number = parseInt(number);
	if (typeof(date)=="string"){var date = new Date(date.split("-")[0],date.split("-")[1],date.split("-")[2])}
	if (typeof(date)=="object"){var date = date}
	switch(interval){
	case "y":return new Date(date.getFullYear()+number,date.getMonth(),date.getDate()); break;
	case "m":return new Date(date.getFullYear(),date.getMonth()+number,checkDate(date.getFullYear(),date.getMonth()+number,date.getDate())); break;
	case "d":return new Date(date.getFullYear(),date.getMonth(),date.getDate()+number); break;
	case "w":return new Date(date.getFullYear(),date.getMonth(),7*number+date.getDate()); break;
	}
}

function checkDate(year,month,date){
	var enddate = ["31","28","31","30","31","30","31","31","30","31","30","31"];
	var returnDate = "";
	if (year%4==0){enddate[1]="29"}
	if (date>enddate[month]){returnDate = enddate[month]}else{returnDate = date}
	return returnDate;
}

function WeekDay(date){
	var theDate;
	if (typeof(date)=="string"){theDate = new Date(date.split("-")[0],date.split("-")[1],date.split("-")[2]);}
	if (typeof(date)=="object"){theDate = date}
	return theDate.getDay();
}

function HS_calender(){
	var lis = "";
	var style = "";
	style +="<style type='text/css'>";
	style +=".calender { width:170px; height:auto; font-size:12px; margin-right:14px; background:url(calenderbg.gif) no-repeat right center #fff; border:1px solid #397EAE; padding:1px}";
	style +=".calender ul {list-style-type:none; margin:0; padding:0;}";
	style +=".calender .day { background-color:#EDF5FF; height:20px;}";
	style +=".calender .day li,.calender .date li{ float:left; width:14%; height:20px; line-height:20px; text-align:center}";
	style +=".calender li a { text-decoration:none; font-family:Tahoma; font-size:11px; color:#333}";
	style +=".calender li a:hover { color:#f30; text-decoration:underline}";
	style +=".calender li a.hasArticle {font-weight:bold; color:#f60 !important}";
	style +=".lastMonthDate, .nextMonthDate {color:#bbb;font-size:11px}";
	style +=".selectThisYear a, .selectThisMonth a{text-decoration:none; margin:0 2px; color:#000; font-weight:bold}";
	style +=".calender .LastMonth, .calender .NextMonth{ text-decoration:none; color:#000; font-size:18px; font-weight:bold; line-height:16px;}";
	style +=".calender .LastMonth { float:left;}";
	style +=".calender .NextMonth { float:right;}";
	style +=".calenderBody {clear:both}";
	style +=".calenderTitle {text-align:center;height:20px; line-height:20px; clear:both}";
	style +=".today { background-color:#ffffaa;border:1px solid #f60; padding:2px}";
	style +=".today a { color:#f30; }";
	style +=".calenderBottom {clear:both; border-top:1px solid #ddd; padding: 3px 0; text-align:left}";
	style +=".calenderBottom a {text-decoration:none; margin:2px !important; font-weight:bold; color:#000}";
	style +=".calenderBottom a.closeCalender{float:right}";
	style +=".closeCalenderBox {float:right; border:1px solid #000; background:#fff; font-size:9px; width:11px; height:11px; line-height:11px; text-align:center;overflow:hidden; font-weight:normal !important}";
	style +="</style>";

	var now;
	if (typeof(arguments[0])=="string"){
		selectDate = arguments[0].split("-");
		var year = selectDate[0];
		var month = parseInt(selectDate[1])-1+"";
		var date = selectDate[2];
		now = new Date(year,month,date);
	}else if (typeof(arguments[0])=="object"){
		now = arguments[0];
	}
	var lastMonthEndDate = HS_DateAdd("d","-1",now.getFullYear()+"-"+now.getMonth()+"-01").getDate();
	var lastMonthDate = WeekDay(now.getFullYear()+"-"+now.getMonth()+"-01");
	var thisMonthLastDate = HS_DateAdd("d","-1",now.getFullYear()+"-"+(parseInt(now.getMonth())+1).toString()+"-01");
	var thisMonthEndDate = thisMonthLastDate.getDate();
	var thisMonthEndDay = thisMonthLastDate.getDay();
	var todayObj = new Date();
	today = todayObj.getFullYear()+"-"+todayObj.getMonth()+"-"+todayObj.getDate();
	
	for (i=0; i<lastMonthDate; i++){  // Last Month's Date
		lis = "<li class='lastMonthDate'>"+lastMonthEndDate+"</li>" + lis;
		lastMonthEndDate--;
	}
	for (i=1; i<=thisMonthEndDate; i++){ // Current Month's Date

		if(today == now.getFullYear()+"-"+now.getMonth()+"-"+i){
			var todayString = now.getFullYear()+"-"+(parseInt(now.getMonth())+1).toString()+"-"+i;
			lis += "<li><a href=javascript:void(0) class='today' onclick='_selectThisDay(this)' title='"+now.getFullYear()+"-"+(parseInt(now.getMonth())+1)+"-"+i+"'>"+i+"</a></li>";
		}else{
			lis += "<li><a href=javascript:void(0) onclick='_selectThisDay(this)' title='"+now.getFullYear()+"-"+(parseInt(now.getMonth())+1)+"-"+i+"'>"+i+"</a></li>";
		}
		
	}
	var j=1;
	for (i=thisMonthEndDay; i<6; i++){  // Next Month's Date
		lis += "<li class='nextMonthDate'>"+j+"</li>";
		j++;
	}
	lis += style;

	var CalenderTitle = "<a href='javascript:void(0)' class='NextMonth' onclick=HS_calender(HS_DateAdd('m',1,'"+now.getFullYear()+"-"+now.getMonth()+"-"+now.getDate()+"'),this) title='Next Month'>&raquo;</a>";
	CalenderTitle += "<a href='javascript:void(0)' class='LastMonth' onclick=HS_calender(HS_DateAdd('m',-1,'"+now.getFullYear()+"-"+now.getMonth()+"-"+now.getDate()+"'),this) title='Previous Month'>&laquo;</a>";
	CalenderTitle += "<span class='selectThisYear'><a href='javascript:void(0)' onclick='CalenderselectYear(this)' title='Click here to select other year' >"+now.getFullYear()+"</a></span>年<span class='selectThisMonth'><a href='javascript:void(0)' onclick='CalenderselectMonth(this)' title='Click here to select other month'>"+(parseInt(now.getMonth())+1).toString()+"</a></span>月"; 

	if (arguments.length>1){
		arguments[1].parentNode.parentNode.getElementsByTagName("ul")[1].innerHTML = lis;
		arguments[1].parentNode.innerHTML = CalenderTitle;

	}else{
		var CalenderBox = style+"<div class='calender'><div class='calenderTitle'>"+CalenderTitle+"</div><div class='calenderBody'><ul class='day'><li>日</li><li>一</li><li>二</li><li>三</li><li>四</li><li>五</li><li>六</li></ul><ul class='date' id='thisMonthDate'>"+lis+"</ul></div><div class='calenderBottom'><a href='javascript:void(0)' class='closeCalender' onclick='closeCalender(this)'>×</a><span><span><a href=javascript:void(0) onclick='_selectThisDay(this)' title='"+todayString+"'>Today</a></span></span></div></div>";
		return CalenderBox;
	}
}
function _selectThisDay(d){
	var boxObj = d.parentNode.parentNode.parentNode.parentNode.parentNode;
		boxObj.targetObj.value = d.title;
		boxObj.parentNode.removeChild(boxObj);
}
function closeCalender(d){
	var boxObj = d.parentNode.parentNode.parentNode;
		boxObj.parentNode.removeChild(boxObj);
}

function CalenderselectYear(obj){
		var opt = "";
		var thisYear = obj.innerHTML;
		for (i=1970; i<=2020; i++){
			if (i==thisYear){
				opt += "<option value="+i+" selected>"+i+"</option>";
			}else{
				opt += "<option value="+i+">"+i+"</option>";
			}
		}
		opt = "<select onblur='selectThisYear(this)' onchange='selectThisYear(this)' style='font-size:11px'>"+opt+"</select>";
		obj.parentNode.innerHTML = opt;
}

function selectThisYear(obj){
	HS_calender(obj.value+"-"+obj.parentNode.parentNode.getElementsByTagName("span")[1].getElementsByTagName("a")[0].innerHTML+"-1",obj.parentNode);
}

function CalenderselectMonth(obj){
		var opt = "";
		var thisMonth = obj.innerHTML;
		for (i=1; i<=12; i++){
			if (i==thisMonth){
				opt += "<option value="+i+" selected>"+i+"</option>";
			}else{
				opt += "<option value="+i+">"+i+"</option>";
			}
		}
		opt = "<select onblur='selectThisMonth(this)' onchange='selectThisMonth(this)' style='font-size:11px'>"+opt+"</select>";
		obj.parentNode.innerHTML = opt;
}

function selectThisMonth(obj){
	HS_calender(obj.parentNode.parentNode.getElementsByTagName("span")[0].getElementsByTagName("a")[0].innerHTML+"-"+obj.value+"-1",obj.parentNode);
}

function HS_setDate(inputObj){
	var calenderObj = document.createElement("span");
	calenderObj.innerHTML = HS_calender(new Date());
	calenderObj.style.position = "absolute";
	calenderObj.targetObj = inputObj;
	inputObj.parentNode.insertBefore(calenderObj,inputObj.nextSibling);
}


function check(){

    user_name=regist_form.name.value;
    user_height=regist_form.height.value;
    user_birthday=regist_form.birthday.value;
    user_mobile_number=regist_form.mobile_number.value;
    user_ID_number=regist_form.ID_number.value;
    user_address=regist_form.address.value;
    user_department=regist_form.department.value;
    user_yearly_income=regist_form.yearly_income.value;
    user_qq=regist_form.qq.value;


	if (user_name=="")
	{
         alert("姓名不能为空!");
         return false;
	}
    else if((!document.regist_form.sex[0].checked)){
        
        if(!document.regist_form.sex[1].checked){

            alert("性别不能为空!");
            return false;
        }
    }
    else if(user_height==""){

         alert("身高不能为空!");
         return false;
    }
    else if(user_birthday==""){

         alert("生日不能为空!");
         return false;
    }
    else if(user_mobile_number==""){

         alert("手机号码不能为空!");
         return false;
    }
    else if(user_ID_number==""){

         alert("身份证号码不能为空!");
         return false;
    }
    else if(user_address==""){

         alert("地址不能为空!");
         return false;
    }
    else if(user_department==""){

         alert("工作单位不能为空!");
         return false;
    }
    else if(user_yearly_income==""){

         alert("年收入不能为空!");
         return false;
    }
    else if(user_qq==""){

         alert("QQ不能为空!");
         return false;
    }

	return true;
}

</script>

</head>
<body>
<h1>我要报名：）<sup>11.11在线相亲hot!</sup></h1>

<div class="regist" style="margin-top:50px;">
    <div class="web_qr_regist" id="web_qr_regist" style="display: block; height: 80px;">    
</div>


  <!--注册-->
   
    <div class="web_regist">
        <form name="regist_form" id="regist_form" accept-charset="utf-8"  action="registed.php" method="post">
            <ul class="reg_form" id="reg-ul">
                <li>
                    <label for="name"  class="input-tips2">姓名：</label>
                    <div class="inputOuter2">
                        <input type="text" id="name" name="name" maxlength="16" class="inputstyle2"/>
                    </div>
                </li>
                
                <li>
                <label for="sex"  class="input-tips2">性别：</label>
                <div class="inputOuter2">
                    <label><input name="sex" type="radio" value="male" style="margin-top:6%;margin-left:10%;"/>男</label> 
                    <label><input name="sex" type="radio" value="famale" style="margin-top:6%;margin-left:5%;"/>女</label>
                </div>
                </li>
                
                <li>
                 <label for="height" class="input-tips2">身高：</label>
                    <div class="inputOuter2">
                        <input type="text" id="height" name="height" maxlength="6" class="inputstyle2"/>
                    </div>
                </li>

                <li>
                 <label for="height" class="input-tips2">出生日期：</label>
                    <div class="inputOuter2">
                        <input type="text" id="birthday" name="birthday" onfocus="HS_setDate(this)" maxlength="10" class="inputstyle2"/>
                    </div>
                </li>

                <li>
                 <label for="mobile_number" class="input-tips2">手机号码：</label>
                    <div class="inputOuter2">
                        <input type="text" id="mobile_number" name="mobile_number" maxlength="11" class="inputstyle2"/>
                    </div>
                </li>
                
                <li>
                 <label for="ID_number" class="input-tips2">身份证号：</label>
                    <div class="inputOuter2">
                        <input type="text" id="ID_number" name="ID_number" maxlength="18" class="inputstyle2"/>
                    </div>   
                </li>
                
                <li>
                 <label for="address" class="input-tips2">家庭地址：</label>
                    <div class="inputOuter2">
                        <input type="text" id="address" name="address" maxlength="128" class="inputstyle2"/>
                    </div>
                </li>
               
                <li>
                 <label for="department" class="input-tips2">工作单位：</label>
                    <div class="inputOuter2">
                        <input type="text" id="department" name="department" maxlength="128" class="inputstyle2"/>
                    </div>
                </li>
                
                
               <li>
                 <label for="yearly_income" class="input-tips2">年收入：</label>
                    <div class="inputOuter2">
                        <input type="text" id="yearly_income" name="yearly_income" maxlength="11" class="inputstyle2"/>
                    </div>
                </li>

                <li>
                 <label for="qq" class="input-tips2">QQ：</label>
                    <div class="inputOuter2">
                        <input type="text" id="qq" name="qq" maxlength="10" class="inputstyle2"/>
                    </div>
                </li>

                <li>
                    <div class="inputArea">                   
                    <button type="submit" disabled id="regBtn" class="button_blue" onclick="return check()">同意协议并立即报名</button>
                    <label><input name="agreed" type="checkbox" id="regText">同意<a href="agreement.html" class="zcxy" target="_blank">报名协议</a></label>
                    </div>
                </li>
            </ul>
        </form>      
    </div>
    <!--注册end-->
</body>
</html>
