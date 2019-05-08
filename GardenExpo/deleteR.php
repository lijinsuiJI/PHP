<?php
//删除回复
$rid = $_GET['rid'];
$mid = $_GET['mid'];

$link = mysqli_connect('localhost','root','12345678','garden');
if(!$link) die("数据库连接错误");

$sql = "DELETE  FROM reply WHERE rid='{$rid}'";
$result = mysqli_query($link, $sql);
if(!$result) die("数据库查询错误".$sql);

echo "<script language=\"JavaScript\">;alert(\"删除成功，点击确定返回查看！\");location.href=\"myMessageDetail.php?mid={$mid}\";</script>;";

?>
