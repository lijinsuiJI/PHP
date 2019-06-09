<?php
//登录
$username = $_POST['username'];
$password = $_POST['password'];
$rule = $_POST['rule'];
/*echo "$rule";*/
if (strlen($username)==0||strlen($password)==0) {
	echo '<script language="JavaScript">;alert("用户名和密码不能为空,请重新输入");location.href="login.html";</script>;';
}else{
	$link = mysqli_connect('localhost','root','12345678','garden');
	if (!$link) die("数据库连接失败");
	if ($rule==1) {
		$sql= "SELECT * FROM user WHERE username='{$username}' AND upassword='{$password}'";
		$result=mysqli_query($link,$sql);
		if(!$result) die("数据库查询错误".$sql);
		$rows = mysqli_num_rows($result);
		if ($rows==1) {
        	$user = mysqli_fetch_array($result,MYSQL_ASSOC);
        	$uid = $user['uid'];
        	$ucode = $user['ucode'];
			setcookie('login',1,time()+60*10);
			setcookie('username',$username,time()+60*10);
			setcookie('uid',$uid,time()+60*10);
			setcookie('ucode',$ucode,time()+60*10);
			header("Location:index.php");
		}else{
			echo '<script language="JavaScript">;alert("用户名与密码不匹配，请重新输入");location.href="login.html";</script>;';
		}
	}
	if ($rule==2) {
		$sql= "SELECT * FROM admin WHERE aname='{$username}' AND apassword='{$password}'";
		$result=mysqli_query($link,$sql);
		if(!$result) die("数据库查询错误".$sql);
		$rows = mysqli_num_rows($result);
		if ($rows==1) {
        	$user = mysqli_fetch_array($result,MYSQL_ASSOC);
        	$aid = $user['aid'];
        	$aname = $user['aname'];
			setcookie('login',2,time()+60*10);
			setcookie('aname',$aname,time()+60*10);
			setcookie('aid',$aid,time()+60*10);
			header("Location:admin.php");
		}else{
			echo '<script language="JavaScript">;alert("用户名与密码不匹配，请重新输入");location.href="login.html";</script>;';
		}
	}
	
}
?>