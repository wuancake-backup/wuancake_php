<?php  
    if(!$_SESSION['isLogin']){

        header("content-type:text/html;charset=utf-8");  
        //连接mysql数据库  
        $conn=mysql_connect("localhost","root","root");  
          
        //选择数据库  
        mysql_select_db("youyuan");  
      
        //设置客户端和连接字符集  
        mysql_query("set names utf8");   
        
        //limit要求参数  
        $length=15;  
        $pagenum=$_GET['page']?$_GET['page']:1;  
          
        //数据总行数  
        $sqltot="select count(*) from youyuan_usr";  
        $arrtot=mysql_fetch_row(mysql_query($sqltot));  
        $pagetot=ceil($arrtot[0]/$length);  
      
        //限制页数  
        if($pagenum>=$pagetot){  
            $pagenum=$pagetot;  
        }  
        $offset=($pagenum-1)*$length;  
          
        //从数据库获取数据  
        $sql="select * from youyuan_usr order by id limit {$offset},{$length}";  
        //计算上一页和下一页  
        
        $prevpage=$pagenum-1;  
        $nextpage=$pagenum+1;  
      
        
        $result=mysql_query($sql);  
        echo "<h1 align='center'>报名用户审核</h1>";  
        echo "<table id='tb' class='hovertable' width='800px' border='1px' align='center'>";  
        echo "<tr>";  
        echo "<td>ID</td>";  
        echo "<td>姓名</td>";  
        echo "<td>性别</td>";  
        echo "<td>身份证号码</td>";  
        echo "<td>手机号码</td>";  
        echo "<td>审核</td>";  
        echo "</tr>";  

        while($row=mysql_fetch_assoc($result)){  
            if($row['status']==0){
            echo "<tr>";
            echo "<td><span id='usr_id'>{$row['id']}</span></td>";  
            echo "<td>{$row['name']}</td>";  
            echo "<td>{$row['sex']}</td>";  
            echo "<td>{$row['ID_number']}</td>";  
            echo "<td>{$row['mobile_number']}</td>";  
            echo "<td>" .'<input type="checkbox" name="usr" id='.$row['id'].'>'."</td>";
            echo "</tr>";  
        }}  
        echo "</table>";  
        echo "<p style='margin-top:20%;margin-left:20%;'>";  
        echo "<a href='javascript:void(0)' onclick='select()'>全选";
        echo "<a href='javascript:void(0)' onclick='fanselect()'>反选";
        echo "<a href='javascript:void(0)' onclick='noselect()'>不选";
        echo "<br>";
        echo "<select name='status' id='status'> <option value='1'>审核通过</option> <option value='-1'>审核不通过</option></select>";
        echo "<form id='verifyForm' name='verifyForm' method='post' action='verify.php'>";
        echo "<input type='hidden' name='total' id='total' value=''>";
        echo "<input type='hidden' name='statu' id='statu' value=''>";
        echo "<button type='submit' name='submit' onclick='result()' style='margin-left:20%;margin-top:auto;'>提交审核</button>";
        echo "</form>";
       
        
        echo "<h2 style='margin-top:auto;margin-left:70%;'><a href='checked.php?page={$prevpage}'>上一页</a><a href='checked.php?page={$nextpage}'>下一页</a></h2>";    
        
        echo "<h2 style='margin-top:auto;margin-left:70%;'><a href='uppwd.php'>更改管理员密码</a>";
        //释放连接资源  
        mysql_close($conn);
    }
    else{
    
        echo "<script>alert('请登录!');
        location='admin.php';</script>"; 
    }
?>
<html>
<head>
<title>11youyuan</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css"  />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">  
    var checkall=document.getElementsByName("usr");  
    function select(){                          //全选  

        for(var $i=0;$i<checkall.length;$i++){  
            checkall[$i].checked=true;  
        }  
    }  
    function fanselect(){                        //反选  
        
        for(var $i=0;$i<checkall.length;$i++){  
            if(checkall[$i].checked){  
                checkall[$i].checked=false;  
            }else{  
                checkall[$i].checked=true;  
            }  
        }  
    }           
    function noselect(){                          //全不选  

        for(var $i=0;$i<checkall.length;$i++){  
            checkall[$i].checked=false;  
        }  
    }
    
function result() {

        var _list = [];  
        
        for (var $i=0,$j=0;$i<checkall.length;$i++) {  
            
            if(checkall[$i].checked){  

                _list[$j] = checkall[$i].id;
                $j++;  
            }
        }  
        var idstr=_list.join(',');//将数组元素连接起来以构建一个字符串

        document.verifyForm.total.value = idstr;

        var str=window.document.getElementById("status").value;
        document.verifyForm.statu.value = str;

    }

</script>  
</head>
<body>
</body>
</html>
