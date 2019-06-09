<?php
//发布园区信息
$title = $_POST['title'];
$detail = $_POST['detail'];
date_default_timezone_set('PRC');
$garden_time = date('Y-m-d H:i:s',time());
$link = mysqli_connect('localhost','root','12345678','garden');
$link->query("set names'utf8'");
$link->set_charset('utf8_general_ci');
if (!$link) die("数据库连接失败");
//把图片保存到服务器指定位置，并且把图片路径插入到数据库中
if ($_FILES["file"]["error"]) {
	echo $_FILES["file"]["error"];
}else{
	//控制上传文件的类型、大小
	if(($_FILES["file"]["type"]=="image/jpeg" || $_FILES["file"]["type"]=="image/png") && $_FILES["file"]["size"]<1024000){
		//在服务器中新建一个uploads文件夹，图片名中加入当前时间
		$filename = "uploads/".date("YmdHis").$_FILES["file"]["name"];
		//转换编码格式，只有转换成GB2312，move_uploaded_file函数才不会把图片名字里的中文变成乱码
		$filename1 = iconv("UTF-8","gb2312",$filename);
		if (file_exists($filename1)) {
			echo "该文件已存在！";
		}else{
			//保存文件
			move_uploaded_file($_FILES["file"]["tmp_name"], $filename1);
			$sql= "INSERT INTO garden (pname,content,garden_time,photo) VALUES('{$title}','{$detail}','{$garden_time}','{$filename1}')";
			$result=mysqli_query($link,$sql);
			if(!$result) die("数据库操作错误".$sql);
			echo '<script language="JavaScript">;alert("发表成功！");location.href="updateGarden.php";</script>;';
		}
	}else {
		echo '<script language="JavaScript">;alert("图片类型不正确！");</script>;';
	}
}
	

?>