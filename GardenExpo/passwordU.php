<?php
//用户修改密码
$password = $_POST['password'];
$uid = $_COOKIE['uid'];
$link = mysqli_connect('localhost','root','12345678','garden');
if (!$link) die("数据库连接失败");
$sql= "UPDATE user SET upassword='$password' WHERE uid='{$uid}'";
$result=mysqli_query($link,$sql);
if(!$result) die("数据库修改错误".$sql);
echo "<script language=\"JavaScript\">;alert(\"修改成功，点击确定重新登录！\");location.href=\"login.html\";</script>;";
?>