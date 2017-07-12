<?php
    header('Content-Type:text/html;charset=utf-8');
    class connectMysql{
        private $conn;
        private $sql;
        public function __construct($host,$user,$password){
            $this->conn=mysql_connect($host,$user,$password);
            if(!$this->conn){
                die("登录数据库失败".mysql_error());
            }
            else{
                mysql_select_db("test");
                mysql_query("set names utf-8");
            }
        }
        //登陆
        function enter($username,$password)
        {
            $this->sql = "SELECT * FROM test WHERE name like '$username'";
            $result = mysql_query($this->sql, $this->conn);
            if (!mysql_num_rows($result)){
                mysql_free_result($result);
                echo "该用户尚未在本网站注册<br/><br/>";
                echo "<a href='sigin.html'>点击注册</a>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "<a href='login.html'>返回重新登录</a>";
            }
            else {
                //判断密码是否正确
                $row = mysql_fetch_row($result);
                if ($row[2] == md5($password)) {
                    mysql_free_result($result);
                    echo "登陆成功！即将跳转到主页面";
                    header("Refresh:3;url=succeed.html");
                } else {
                    mysql_free_result($result);
                    echo "您输入的密码不正确，请返回重新输入";
                    header("Refresh:5;url=login.php");
                }
            }
        }
        //注册
        function register($username,$password){
            $md5password=md5($password);
            $this->sql="INSERT INTO test(name,password)VALUE('$username','$md5password')";
            $result=mysql_query($this->sql,$this->conn);
            if(!$result){
                mysql_free_result($result);
                die("<a href='sigin.html'>注册失败,点击返回</a>");
            }
            else{
                @mysql_free_result($result);
                echo "<a href='login.html'>注册成功！如没有跳转，点击登录</a>";
                header("Refresh:3;url=login.html");
            }
        }
    }
?>