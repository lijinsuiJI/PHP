<?php
//修改留言
$title = $_POST['title'];
$detail = $_POST['detail'];
$mid = $_POST['mid'];
$link = mysqli_connect('localhost','root','12345678','garden');
if (!$link) die("数据库连接失败");

$sql= "UPDATE message SET mtitle='$title',mcontent='$detail' WHERE mid='{$mid}'";
$result=mysqli_query($link,$sql);
if(!$result) die("数据库修改错误".$sql);
echo "<script language=\"JavaScript\">;alert(\"修改成功，点击确定返回查看！\");location.href=\"myMessageDetail.php?mid='{$mid}'\";</script>;";
?>