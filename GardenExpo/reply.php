<?php
//回复评论
$cid = $_GET['cid'];
$detail = $_POST['detail'];
$uid = $_COOKIE['uid'];
$reply_time = date('Y-m-d H:i:s',time());
$link = mysqli_connect('localhost','root','12345678','garden');
	if (!$link) die("数据库连接失败");
	$sql= "INSERT INTO reply (cid,uid,reply_time,content) VALUES('{$cid}','{$uid}','{$reply_time}','{$detail}')";
	$result=mysqli_query($link,$sql);
	if(!$result) die("数据库查询错误".$sql);
echo '<script language="JavaScript">;alert("回复成功！");location.href="Message.php";</script>';
?>