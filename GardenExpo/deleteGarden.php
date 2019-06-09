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

        .main .box-2 .box-2-2 {
            width: 100%;
            box-sizing: border-box;
            padding-left: 50px;
            margin-top: 100px;
        }

        .main .box-2 .box-2-2 .box-2-2-1 {
            width: 100%;
            height: 60px;
            line-height: 30px;
            font-size: 18px;
            position: relative;
        }

        .main .box-2 .box-2-2 .box-2-2-1 .delete {
            position: absolute;
            right: 0;
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
                            <!-- <li><a href="#">警告用户</a></li> -->
                            <li><a href="deleteMessage.php">删除留言</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mg">
                    <a class="my">个人信息管理</a>
                    <div class="box-1-2-3 information">
                        <ul>
                            <!-- <li><a href="#">查看个人信息</a></li> -->
                            <li><a href="updatePassword.php">修改密码</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-2-1">
                <span>
                    欢迎
                    <?php
                        $link = mysqli_connect('localhost','root','12345678','garden');
                        if (!$link) die("数据库连接错误");
                        if (isset($_COOKIE['login']) && $_COOKIE['login'] ==2 ) {
                            echo "{$_COOKIE['aname']}";
                    ?>
                        
                </span>
            </div>
            <div class="box-2-2">
                <?php
                $link = mysqli_connect('localhost','root','12345678','garden');
                if (!$link) die("数据库连接错误");
                $sql = "SELECT * FROM garden";
                $result = mysqli_query($link,$sql);
                if(!$result) die("数据库查询错误".$sql);
                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                    echo "<div class=\"box-2-2-1\">";
                    echo "<span>{$row['pname']}</span>";
                    echo "<span class=\"delete\"><a href=\"deleteG.php?pid={$row['pid']}\">删除</a></span>";
                    echo "</div>";
                }
                ?>
                <?php
                    }else{
                            echo "<a href='login.html' style='color: #6fd508;background-color: white;width: 241px;font-weight: 600; font-size:18px;margin-left: -80px;'>您还没有登录，点击重新登录</a>";
                    }
                ?>     
            </div>
        </div>
    </div>
</body>
</html>