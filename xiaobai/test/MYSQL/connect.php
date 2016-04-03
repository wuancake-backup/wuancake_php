<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='root';
$con=mysql_connect($dbhost,$dbuser,$dbpass);
if (!$con){
    die( "mysql not connect".mysql_error());
}
echo "connect successfully";
mysql_close($con);