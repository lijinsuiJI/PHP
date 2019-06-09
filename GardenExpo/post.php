<?php
//发布留言
$title = $_POST['title'];
$detail = $_POST['detail'];
$uid = $_COOKIE['uid'];
date_default_timezone_set('PRC');
$message_time = date('Y-m-d H:i:s',time());
$link = mysqli_connect('localhost','root','12345678','garden');
	if (!$link) die("数据库连接失败");
	$sql= "INSERT INTO message (uid,message_time,mtitle,mcontent) VALUES('{$uid}','{$message_time}','{$title}','{$detail}')";
	$result=mysqli_query($link,$sql);
	if(!$result) die("数据库查询错误".$sql);
echo '<script language="JavaScript">;alert("发表成功！");location.href="Message.php";</script>;';
echo "发表成功!";
?>