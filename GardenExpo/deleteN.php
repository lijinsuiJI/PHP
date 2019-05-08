<?php
//删除园博资讯
$nid = $_GET['nid'];

$link = mysqli_connect('localhost','root','12345678','garden');
if(!$link) die("数据库连接错误");

$sql = "DELETE  FROM news WHERE nid='{$nid}'";
$result = mysqli_query($link, $sql);
if(!$result) die("数据库查询错误".$sql);
echo '<script language="JavaScript">;alert("删除成功，点击确定返回查看！");location.href="deleteNews.php";</script>;';

?>
