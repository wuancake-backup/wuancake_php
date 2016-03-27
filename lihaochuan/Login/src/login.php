 <?php
 //验证登录

$conn = mysql_connect("localhost","root","root");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

$user=$_POST["user"];
$pwd=$_POST["password"];
if($user == ""|$pwd == "")
 {die("用户名或密码不能为空");}

mysql_select_db("test", $conn);

$arr=mysql_query("SELECT password FROM user WHERE username = '$user'");
mysql_close($conn);
$result = mysql_fetch_array($arr);

  if($result==""|!($result['password']==$pwd))
    {
      //验证失败，弹出提示框，返回登陆界面
echo '<script language="javascript">';
echo 'alert("用户名或密码错误!");';
echo "location.href='login.html'";
echo '</script>';
    }else {
//验证成功，转到欢迎界面
echo '<script language="javascript">';
echo 'alert("登陆成功!");';
echo "location.href='admin.php'";
echo '</script>';
}
 
?>