<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>主展馆</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="swiper4/css/swiper.min.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/garden.css">
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
                        <li><a href="index.php">园博导览</a>
                            <ul>
                                <li><a href="News.php">园博资讯</a></li>
                                <li><a href="garden.php">主展馆</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php">园区服务</a>
                            <ul>
                                <li><a href="ticket.php">购票</a></li>
                                <li><a href="strategy.php">参观攻略</a></li>
                                <li><a href="active.php">园博活动</a></li>
                            </ul>
                        </li>
                        <li><a href="message.php">网站留言</a></li>
                        <li><a href="science.php">园博科普</a></li>
                        <li><a href="my.php">个人中心</a></li>
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
        <!--第三部分 展馆-->
        <div class="box-2">
            <div class="box-2-1">
                <div class="box-2-1-1">
                    <?php
                    $link = mysqli_connect('localhost','root','12345678','garden');
                    if (!$link) die("数据库连接错误");
                    $sql = "SELECT * FROM garden";
                    $result = mysqli_query($link,$sql);
                    if(!$result) die("数据库查询错误".$sql);
                    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                        echo "<a href=\"gardenDetail.php?pid={$row['pid']}\"><img src=\"img/banner01.jpg\"></a>";
                        echo "<span><a href=\"gardenDetail.php?pid={$row['pid']}\">{$row['pname']}</a></span>
                              <span>{$row['content']}</span>";
                        echo "<a href=\"gardenDetail.php?pid={$row['pid']}\" class=\"see\">查看</a>";
                    }
                    ?>
                </div>
                <div class="box-2-1-1">
                    <a href="gardenDetail.html"><img src="img/banner01.jpg"></a>
                    <span><a href="gardenDetail.html">杭州园</a></span>
                    <span>杭州园的主题是西湖十景之“花港观鱼”。花港观鱼是十景中唯一含有“赏鱼”意趣的景观。我们造园的理念是“源于自然又蕴含诗意”，西湖不但有自然山水之美，更有丰富的人文历史内涵...</span>
                    <a href="gardenDetail.html" class="see">查看</a>
                </div>
                <div class="box-2-1-1">
                    <a href="gardenDetail.html"><img src="img/banner01.jpg"></a>
                    <span><a href="gardenDetail.html">杭州园</a></span>
                    <span>杭州园的主题是西湖十景之“花港观鱼”。花港观鱼是十景中唯一含有“赏鱼”意趣的景观。我们造园的理念是“源于自然又蕴含诗意”，西湖不但有自然山水之美，更有丰富的人文历史内涵...</span>
                    <a href="gardenDetail.html" class="see">查看</a>
                </div>
                <div class="box-2-1-1">
                    <a href="gardenDetail.html"><img src="img/banner01.jpg"></a>
                    <span><a href="gardenDetail.html">杭州园</a></span>
                    <span>杭州园的主题是西湖十景之“花港观鱼”。花港观鱼是十景中唯一含有“赏鱼”意趣的景观。我们造园的理念是“源于自然又蕴含诗意”，西湖不但有自然山水之美，更有丰富的人文历史内涵...</span>
                    <a href="gardenDetail.html" class="see">查看</a>
                </div>
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
        <span class="time2">北京园博园地址：北京市丰台区长辛店镇射击场路15号</span>
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