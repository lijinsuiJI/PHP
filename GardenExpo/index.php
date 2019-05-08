<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>北京园博会推广网站</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="swiper4/css/swiper.min.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="main">
    <!--头部-->
    <div class="container demo-2" id="home">
        <div class="content">
            <div class="large-header" id="large-header">
                <a href="#1" class="main-title">
                    <span>北京世界园艺博览会</span>
                    <span>欢迎您</span>
                </a>
            </div>
        </div>
    </div>

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
    <!--第三部分 轮播图-->
    <div class="swiper-container" id="s1">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="gardenDetail.php"><img src="img/银杏大道1.jpg"></a></div>
            <div class="swiper-slide"><a href="gardenDetail.php"><img src="img/永定塔4.jpg"></a></div>
            <div class="swiper-slide"><a href="gardenDetail.php"><img src="img/园博湖3.jpg"></a></div>
        </div>
        <!-- 如果需要分页器 -->
        <div class="swiper-pagination"></div>
        <!-- 如果需要导航按钮 -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <!--第四部分 新闻-->
    <div class="box-2">
        <div class="box-2-1"><span>新闻速递</span></div>
        <div class="box-2-2">
            <div class="box-2-2-1">
                <div class="box-2-2-1-1">
                    <img src="img/江苏桃花.jpg">
                    <span>江苏如皋</span>
                    <div class="a">
                        <span> 花木之乡”春光好“桃花盛宴”醉了游人</span>
                    </div>
                </div>
            </div>
            <div class="box-2-2-2">
                <span class="wz">江苏如皋</span>
                <span>4月2日消息：30日，春光烂漫。位于如皋市磨头镇的百亩桃花开满枝头，簇簇浓烈芬芳的花朵似绯云一片，又如云霞万朵。当天，“金磨桃花缘”桃花节开幕，引来八方游客尽享“桃花盛宴”。 </span>
                <a href="#">更多</a>
            </div>
        </div>
        <div class="box-2-3">
            <div class="box-2-3-1">
                <span class="wz">江苏如皋</span>
                <span>4月2日消息：30日，春光烂漫。位于如皋市磨头镇的百亩桃花开满枝头，簇簇浓烈芬芳的花朵似绯云一片，又如云霞万朵。当天，“金磨桃花缘”桃花节开幕，引来八方游客尽享“桃花盛宴”。 </span>
                <a href="#">更多</a>
            </div>
            <div class="box-2-3-2">
                <div class="box-2-3-1-1">
                    <img src="img/江苏桃花.jpg">
                    <span>江苏如皋</span>
                    <div class="a">
                        <span> 花木之乡”春光好“桃花盛宴”醉了游人</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--第五部分 园区-->
    <div class="box-3">
        <div class="box-3-1"><span>园博美景</span></div>
        <div class="box-3-2">
            <div class="box-3-2-1">
                <img src="img/银杏大道1.jpg">
                <span class="wz">银杏大道</span>
                <span>秋色正浓时节，园博园像是被浓墨重彩渲染了一番似的，处处色彩缤纷，绚丽多彩。</span>
            </div>
            <div class="box-3-2-1">
                <img src="img/银杏大道1.jpg">
                <span class="wz">银杏大道</span>
                <span>秋色正浓时节，园博园像是被浓墨重彩渲染了一番似的，处处色彩缤纷，绚丽多彩。</span>

            </div>
            <div class="box-3-2-1">
                <img src="img/银杏大道1.jpg">
                <span class="wz">银杏大道</span>
                <span>秋色正浓时节，园博园像是被浓墨重彩渲染了一番似的，处处色彩缤纷，绚丽多彩。</span>

            </div>
            <div class="box-3-2-1">
                <img src="img/银杏大道1.jpg">
                <span class="wz">银杏大道</span>
                <span>秋色正浓时节，园博园像是被浓墨重彩渲染了一番似的，处处色彩缤纷，绚丽多彩。</span>

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
<script src="js/index.js"></script>
</body>
</html>