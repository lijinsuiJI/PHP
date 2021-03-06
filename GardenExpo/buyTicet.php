<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>购买电子票</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="swiper4/css/swiper.min.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/ticket.css">
    <style type="text/css">

        .main .box .box2 {
            width: inherit;
            height: 400px;
            box-sizing: border-box;
            border: 2px solid #6fd508;
            border-radius: 20px;
            box-shadow: 0px 10px 25px 5px rgba(111,231,8,1.3);
            margin-bottom: 50px;
            text-align: center;
        }

        .box2 .box2-1 {
            margin-top: 50px;
        }

        .box2 .box2-1 span {
            margin-top: 30px;
            width: 100%;
            height: 60px;
            font-size: 30px;
            font-weight: 600;
            color: #6fd508;
            display: block;
        }

        .box2 .box2-2 span {
            width: 100%;
            height: 60px;
            line-height: 30px;
            font-size: 18px;

        }

        .box2 .box2-3 span {
            width: 100%;
            height: 60px;
            line-height: 30px;
            font-size: 18px;

        }

        .box2 .box2-4 span {
            width: 100%;
            height: 60px;
            line-height: 30px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="main">

    <div class="box">
        <!--第一部分 logo-->
        <div class="box1" id="1">
            <!--logo-->
            <div class="box1-1">
                <img src="img/2.jpg">
            </div>
            <div class="box1-2">
                <span class="wz">2019年中国北京世界园艺博览会</span>
                <span>China Beijing World Horticultural Exposition 2019</span>
            </div>
            <div class="box1-3">
                <span>联系我们：</span>
                <span class="wz">12580</span>
            </div>
        </div>
        <!--第二部分 导航栏-->
        <div class="box-1">
            <!--导航栏-->
            <div class="box-1-1" id="menu">
                <!--标题-->
                <div class="box-1-1-2">
                    <ul>
                        <li><a href="index.php">网站首页</a></li>
                        <li><a href="index.php">世园导览</a>
                            <ul>
                                <li><a href="News.php">世园资讯</a></li>
                                <li><a href="garden.php">主展馆</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php">园区服务</a>
                            <ul>
                                <li><a href="ticket.php">购票</a></li>
                                <li><a href="strategy.php">参观攻略</a></li>
                                <li><a href="active.php">世园活动</a></li>
                            </ul>
                        </li>
                        <li><a href="message.php">网站留言</a></li>
                        <li><a href="science.php">世园科普</a></li>
                        <li><a href="myDetail.php">个人中心</a>
                            <ul>
                                <li><a href="my.php">个人留言</a></li>
                                <li><a href="ticketDetail.php">我的电子票</a></li>
                                <li><a href="password.php">修改密码</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--注册登录-->
                <div class="box-1-1-3">
                    <?php
                    $link = mysqli_connect('localhost','root','12345678','garden');
                    if (!$link) die("数据库连接错误");
                    if (isset($_COOKIE['login']) && $_COOKIE['login'] ==1 ) {
                        echo "<a class='hi' style='color: #6fd508;background-color: white;width: 100%;font-weight: 600;'>您好,{$_COOKIE['username']}</a>";
                    ?>
                    <?php
                    }else{
                        echo "<a href='login.html' style='color: #6fd508;background-color: white;width: 241px;font-weight: 600; font-size:18px;margin-left: -80px;'>您还没有登录，点击重新登录</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--第三部分 购票详细信息-->
        <div class="box2">
            <?php 
            if (isset($_COOKIE['login']) && $_COOKIE['login'] ==1 ) {
            ?>
                <div class="box2-1"> <span>订单信息</span> </div>
                <?php
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $sum = $num1*$num2;
                    echo "<form action=\"buy.php?sum={$sum}\" method=\"post\">";
                ?>
                <div class="box2-2">
                    <span>订票用户：</span>
                    <span> <?php $username = $_GET['username']; echo $username; ?> </span>
                </div>
                <div class="box2-3">
                    <span>订票身份证号码：</span>
                    <span> <?php $ucode = $_GET['ucode']; echo $ucode; ?> </span>
                </div>
                <div class="box2-4">
                    <span>购票总价格：</span>
                    <span> <?php echo $sum; ?> </span>
                </div>
                <div class="box2-5">
                    <input type="submit" name="sub" value="确认购买" style="display: inline-block; width: 100px;line-height: 50px;font-size: 18px;text-align: center;color: #F5FFFA;background-color: #6fd508;border:0px;cursor: pointer; margin-top: 35px;">
                </div>
            </form>
            <?php
            }else{
                echo "<a href='login.html' style='color: #6fd508;background-color: white;width: 415px;font-weight: 600; font-size:30px;margin-left: -80px;box-sizing: border-box; padding-top: 160px;'>您还没有登录，点击重新登录</a>";
            }
            ?>
        </div>
    </div>

    <!--尾部-->
    <div class="banner-wrapper1">
        <span class="time1">实时通讯</span>
        <span class="time2">北京世界园艺博览会地址：北京市石景山区阜石路159号首钢体育大厦</span>
        <input type="text" placeholder=" 请输入您的邮箱地址" class="text">
        <span class="send">寄给我</span>
        <div class="last">

        </div>
    </div>
</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="swiper4/js/swiper.min.js"></script>

</script>
</body>
</html>