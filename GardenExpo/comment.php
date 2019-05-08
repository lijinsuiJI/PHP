<?php
//发评论
$detail1 = $_POST['detail1'];
$uid = $_COOKIE['uid'];
$comment_time = date('Y-m-d H:i:s',time());
$mid=$_GET['mid'];
$username = $_GET['username'];
/*echo "$username";*/
/*echo "$mid";*/
$link = mysqli_connect('localhost','root','12345678','garden');
	if (!$link) die("数据库连接失败");
	$sql= "INSERT INTO comment (mid,uid,username,comment_time,content) VALUES('{$mid}','{$uid}','{$username}','{$comment_time}','{$detail1}')";
	$result=mysqli_query($link,$sql);
	if(!$result) die("数据库查询错误".$sql);
	/*echo "<a href=\"view.php?pid='{$pid}'\">返回文章评论</a>";*/
	echo "<script language=\"JavaScript\">;alert(\"评论成功，返回文章查看\");location.href=\"messageDetail.php?mid={$mid}&username={$username}\";</script>;";
?>