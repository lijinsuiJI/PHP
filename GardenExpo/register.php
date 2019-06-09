
<?php
//注册
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$register_time = date('Y-m-d H:i:s',time());
$uname = $_POST['uname'];
$usex = $_POST['sex'];
$unum = $_POST['unum'];
$ucode = $_POST['ucode'];

/*echo "$username";
echo "$password";
echo "$password2";
echo "$register_time";
echo "$uname";
echo "$usex";
echo "$unum";
echo "$ucode";*/

if (strcmp($password, $password2)) {
	echo '<script language="JavaScript">;alert("两次输入的密码不一致,请重新输入");location.href="register.html";</script>;';
}elseif (strlen($username)==0||strlen($password)==0) {
	echo '<script language="JavaScript">;alert("昵称和密码不能为空,请重新输入");location.href="register.html";</script>;';
}
else{
	$link = mysqli_connect("localhost",'root','12345678','garden');
	if (!$link) {
		die("数据库连接异常");
	}
	$sql= "SELECT * FROM user WHERE username='{$username}'";
	$result=mysqli_query($link,$sql);
	if (!$result) {
		echo "SQL执行错误".$sql;
	}
	if (mysqli_num_rows($result)) {
		echo '<script language="JavaScript">;alert("{$username}已经被使用,请重新输入");location.href="register.html";</script>;';
	}else{
		$sql= "INSERT INTO user (uname,username,ucode,unum,usex,upassword,register_time) VALUES ('{$uname}','{$username}','{$ucode}','{$unum}','{$usex}','{$password}','{$register_time}')";
	$result = mysqli_query($link,$sql);
	if (!$result) {
		echo "SQL执行错误".$sql;
	}else{
		echo "<script language=\"JavaScript\">;alert(\"{$username}注册成功。\");location.href=\"login.html\";</script>;";
	}

	}
    
}
?>