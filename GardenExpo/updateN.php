<?php
//发布园博资讯
$title = $_POST['title'];
$detail = $_POST['detail'];
date_default_timezone_set('PRC');
$news_time = date('Y-m-d H:i:s',time());
$link = mysqli_connect('localhost','root','12345678','garden');
	if (!$link) die("数据库连接失败");
	$sql= "INSERT INTO news (nname,content,news_time) VALUES('{$title}','{$detail}','{$news_time}')";
	$result=mysqli_query($link,$sql);
	if(!$result) die("数据库查询错误".$sql);
echo '<script language="JavaScript">;alert("发表成功！");location.href="updateNews.php";</script>;';
echo "发表成功!";
?>