<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="swiper4/css/swiper.min.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/message.css">
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
        <!--第三部分 留言-->
        <div class="box-2">
            <div class="box-2-1">
                <div class="box-2-1-1">
                    <span>个人信息</span>
                </div>
                <?php
                    if (isset($_COOKIE['login']) && $_COOKIE['login'] ==1 ) {
                ?>
                <?php
                    $link = mysqli_connect('localhost','root','12345678','garden');
                    if (!$link) die("数据库连接错误");
                    $uid = $_COOKIE['uid'];
                    $sql = "SELECT * FROM user WHERE uid={$uid}";
                    $result = mysqli_query($link, $sql);
                    if (!$result) die("数据库查询错误".$sql);
                    $row =  mysqli_fetch_array($result,MYSQL_ASSOC);
                    $sex = $row['usex'];
                    if ($sex == 1) {
                        $sex = "男";
                    }elseif ($sex == 2) {
                        $sex = "女";
                    }
                ?>
                <div class="box-2-1-2">
                    <div><span>真实姓名：<?php  echo "{$row['uname']}"; ?></span></div>
                    <div><span>昵称：<?php  echo "{$row['username']}"; ?></span></div>
                    <div><span>性别：<?php  echo "{$sex}"; ?></span></div>
                    <div><span>手机号码：<?php  echo "{$row['unum']}"; ?></span></div>
                    <div><span>身份证号码：<?php   
                        $code = $row['ucode'];
                        echo strlen($code)==15?substr_replace($code,"****",8,4):(strlen($code)==18?substr_replace($code,"********",10,8):"身份证位数不正常！");
                    ?></span></div>

                </div>
                <div class="box-2-1-2">
                    
                </div>
                <?php
                    }else{
                        echo "<a href='login.html' style='color: #6fd508;background-color: white;width: 415px;font-weight: 600; font-size:30px;margin: 150px 80px 10px 150px;'>您还没有登录，点击重新登录</a>";
                    }
                ?>
            </div>
            <div class="box-2-2">
                <div class="box-2-2-1">
                    <span>搜索</span>
                    <input type="text" placeholder="请输入关键字">
                </div>
                <div class="box-2-2-2">
                    <span>分类</span>
                    <a href="#">国际展园</a>
                    <a href="#">传统展园</a>
                    <a href="#">现代展园</a>
                    <a href="#">创意展园</a>
                </div>
                <div class="box-2-2-3">
                    <span>最新活动</span>
                    <div>
                        <img src="img/郁金香.jpg">
                        <a href="#">
                            <span>观赏郁金香</span>
                            <span>2019.04.10</span>
                        </a>
                    </div>
                    <div>
                        <img src="img/郁金香.jpg">
                        <a href="#">
                            <span>观赏郁金香</span>
                            <span>2019.04.10</span>
                        </a>
                    </div>
                    <div>
                        <img src="img/郁金香.jpg">
                        <a href="#">
                            <span>观赏郁金香</span>
                            <span>2019.04.10</span>
                        </a>
                    </div>
                </div>
            </div>
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
</body>
</html>