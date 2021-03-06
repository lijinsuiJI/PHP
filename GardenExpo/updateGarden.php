<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理系统</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/admin.css">
    <style type="text/css">
        .main .box-1 .box-1-2 .information ul li a {
            display: block;
            width: 200px;
            height: 58px;
            line-height: 58px;
            border-bottom: 1px solid #483D8B;
            background-color: #F8F8FF;
            color: black;
        }

        .main .box-2 {
            height: 100%;
        }

        .main .box-2 .box-2-2 {
            margin-top: 100px;
        }

        .main .box-2 .box-2-2 .box-2-1-8 {
            width: 100%;
            height: 60px;
        }

        .main .box-2 .box-2-2 .box-2-1-8 span {
            font-size: 20px;
            font-weight: 600;
            color: #6fd508;
            margin-left: 50px;
        }

        .main .box-2 .box-2-2 .box-2-1-8 input {
            display: inline-block;
            width: 590px;
            height: 25px;
            font-size: 17px;
        }
        .main .box-2 .box-2-2 .box-2-1-9 {
            width: 100%;
        }

        .main .box-2 .box-2-2 .box-2-1-9 span {
            margin-bottom: 20px;
            width: 100%;
            font-size: 20px;
            font-weight: 600;
            color: #6fd508;
            margin-left: 50px;
            vertical-align: top;
        }

        .main .box-2 .box-2-2 .box-2-1-9 textarea {
            display: inline-block;
            width: 590px;
            height: 200px;
            font-size: 17px;
        }
    </style>
</head>
<body>
<div class="main">

    <div class="head">
        <div class="box-1">
            <div class="box-1-1">
                <img src="img/2.png" style="width: 80px;">
                <div class="box-1-1-1">
                    <a href="#" class="text1">后台管理系统</a>
                    <a href="#" class="text2">Background Management System</a>
                </div>
            </div>
            <div class="box-1-2">
                <a href="userDetail.php" class="index">用户管理</a>
                <div class="mg">
                    <a class="garden">世园信息管理</a>
                    <div class="box-1-2-1 information">
                        <ul>
                            <li><a href="updateNews.php">更新世园资讯</a></li>
                            <li><a href="deleteNews.php">删除世园资讯</a></li>
                            <li><a href="updateGarden.php">更新园区信息</a></li>
                            <li class="de"><a href="deleteGarden.php">删除园区信息</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mg">
                    <a class="message">留言信息管理</a>
                    <div class="box-1-2-2 information">
                        <ul>
                            <li><a href="#">警告用户</a></li>
                            <li><a href="deleteMessage.php">删除留言</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mg">
                    <a class="my">个人信息管理</a>
                    <div class="box-1-2-3 information">
                        <ul>
                            <li><a href="#">查看个人信息</a></li>
                            <li><a href="updatePassword.php">修改密码</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-2-1">
                <span>
                    <?php
                        $link = mysqli_connect('localhost','root','12345678','garden');
                        if (!$link) die("数据库连接错误");
                        if (isset($_COOKIE['login']) && $_COOKIE['login'] ==2 ) {
                            echo "欢迎，{$_COOKIE['aname']}";
                    ?>
                </span>
            </div>
            <div class="box-2-2">
                <form action="updateG.php" method="post" enctype="multipart/form-data">
                    <div class="box-2-1-8">
                        <span >标题</span>
                        <input type="text" name="title" required="required">
                    </div>
                    <div class="box-2-1-9">
                        <span>内容</span>
                        <textarea placeholder="请输入园区描述！" name="detail"></textarea>
                    </div>
                    <div class="box-2-1-9" style="height: 60px;line-height: 60px;">
                        <span>上传图片</span>
                        <input type="file" name="file">
                    </div>
                    <div class="box-2-1-10">
                        <input type="submit" value="发表" class="fb" style="display: block;width: 100px;height: 40px;line-height: 40px;font-size: 16px;margin-top: 20px;margin-left: 92px;">
                    </div>
                </form>
                <?php
                    }else{
                        echo "<a href='login.html' style='color: #6fd508;background-color: white;width: 241px;font-weight: 600; font-size:18px;margin: 150px 80px 10px 150px;'>您还没有登录，点击重新登录</a>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>