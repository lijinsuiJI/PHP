<?php
//发布园区信息
$title = $_POST['title'];
$detail = $_POST['detail'];
$garden_time = date('Y-m-d H:i:s',time());
$link = mysqli_connect('localhost','root','12345678','garden');
	if (!$link) die("数据库连接失败");
	$sql= "INSERT INTO garden (pname,content,garden_time) VALUES('{$title}','{$detail}','{$garden_time}')";
	$result=mysqli_query($link,$sql);
	if(!$result) die("数据库查询错误".$sql);
echo '<script language="JavaScript">;alert("发表成功！");location.href="updateGarden.php";</script>;';
echo "发表成功!";
?>