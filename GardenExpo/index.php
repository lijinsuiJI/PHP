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
    <!--第三部分 轮播图-->
    <div class="swiper-container" id="s1">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="#"><img src="img/中国馆.jpg"></a></div>
            <div class="swiper-slide"><a href="#"><img src="img/中国馆.png"></a></div>
            <div class="swiper-slide"><a href="#"><img src="img/中国馆1.png"></a></div>
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
                    <img src="img/新闻.jpg">
                    <span>荣誉日活动</span>
                    <div class="a">
                        <span> 世界旅游城市联合会荣誉日活动在举行中</span>
                    </div>
                </div>
            </div>
            <div class="box-2-2-2">
                <span class="wz">世界旅游城市联合会荣誉日</span>
                <span>5月28日消息：世界旅游城市联合会荣誉日活动在园区国际馆举行。嘉宾们首先参观了北京世园会国际馆。活动中，世界旅游城市联合会展位进行了会员推介及媒体宣传，随后还开展了洽谈活动。</span>
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
        <div class="box-3-1"><span>世园美景</span></div>
        <div class="box-3-2">
            <div class="box-3-2-1">
                <img src="img/中国馆1.png">
                <span class="wz">中国馆</span>
                <span>以宋代著名青绿山水《千里江山图》长卷为主题，以永生苔藓作为绘画材料再现经典画卷。</span>
            </div>
            <div class="box-3-2-1">
                <img src="img/植物馆.png">
                <span class="wz">植物馆</span>
                <span>这个作品位于屋顶东南角，位置十分显眼。从位置待遇上我们就能看出，它是植物馆的“流量担当”。</span>

            </div>
            <div class="box-3-2-1">
                <img src="img/国际馆.png">
                <span class="wz">国际馆</span>
                <span>国内首创大型透景画壁展项。以生命的迁徙与自然的和谐共生为主线，展开一场关于园艺诗情画意的巡游之旅。</span>

            </div>
            <div class="box-3-2-1">
                <img src="img/生活体验馆.jpg">
                <span class="wz">生活体验馆</span>
                <span>在生活体验馆还可以体验本草文化、了解举办地延庆的地域特色和产业成果，交互体验气象、航空航天与园艺、与生活的相互联系。</span>

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
<script src="js/index.js"></script>
</body>
</html>