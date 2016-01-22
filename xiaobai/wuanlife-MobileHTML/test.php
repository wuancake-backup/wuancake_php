<?php
include "conn.php";
$groupID=1;
$sql="SELECT pb.title,pd.text,pd.createTime,pb.ID,pb.userID,ub.nickName \n"
    . "FROM post_base pb,post_detail pd,user_base ub \n"
    . "WHERE pb.groupID=$groupID \n"
    . "AND pb.ID = pd.ID \n"
    . "AND pb.userID = ub.ID \n"
    . "AND pd.floor = '1' \n"
    . " ORDER BY createTime DESC";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result)){
    print_r($row);
    echo "</br>";
}


