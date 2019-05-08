<?php
//提交购票订单
$ucode = $_COOKIE['ucode'];
$price = $_GET['sum'];
$ticket_time = date('Y-m-d H:i:s',time());
$link = mysqli_connect('localhost','root','12345678','garden');
if (!$link) die("数据库连接失败");
$sql= "INSERT INTO ticket (ucode,ticket_time,price) VALUES('{$ucode}','{$ticket_time}','{$price}')";
$result=mysqli_query($link,$sql);
if(!$result) die("数据库查询错误".$sql);
setcookie('price',$price,time()+60*10);
echo "<script language=\"JavaScript\">;alert(\"购票成功！\");location.href=\"ticketDetail.php\";</script>;";
?>