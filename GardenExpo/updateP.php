<?php
//管理员修改密码
$password = $_POST['password'];
$password1 = $_POST['password1'];
$aid = $_COOKIE['aid'];
$link = mysqli_connect('localhost','root','12345678','garden');
if (!$link) die("数据库连接失败");

$sql1 = "SELECT * FROM admin WHERE aid='{$aid}'";
$result1 = mysqli_query($link, $sql1);
if (!$result1) die("数据库查询错误".$sql1);
$row =  mysqli_fetch_array($result1,MYSQL_ASSOC);
$oldPassword = $row["apassword"];
if ($oldPassword == $password1) {
	$sql= "UPDATE admin SET apassword='$password' WHERE aid='{$aid}'";
	$result=mysqli_query($link,$sql);
	if(!$result) die("数据库修改错误".$sql);
	echo "<script language=\"JavaScript\">;alert(\"修改成功，点击确定重新登录！\");location.href=\"login.html\";</script>;";
}else {
	echo "<script language=\"JavaScript\">;alert(\"旧密码输入错误，点击确定重新修改！\");location.href=\"updatePassword.php\";</script>;";
}


?>