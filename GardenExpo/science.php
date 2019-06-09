<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>园博科普</title>
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
        <!--第三部分 展馆-->
        <div class="box-2">
            <div class="box-2-1">
                <div class="box-2-1-2">
                    <span ><a class="wz">2019年中国北京世界园艺博览会</a></span>
                    <p>2019年中国北京世界园艺博览会（简称2019北京世园会或北京世园会），是经国际园艺生产者协会批准，由中国政府主办、北京市承办的最高级别的世界园艺博览会，是继云南昆明后第二个获得国际园艺生产者协会批准及国际展览局认证授权举办的A1级国际园艺博览会。</p>
                    <p>2019年3月22日，北京世园会动员大会在北京召开。4月28日，在2019年中国北京世界园艺博览会开幕式上，中华人民共和国主席习近平发表了《共谋绿色生活，共建美丽家园》的讲话。</p>
                    <p>园艺源于自然，是人类智慧与自然的结晶，承载着人类对自然的向往和寄托。绿色是人类永恒的追求，代表着安全、健康和人与自然的和谐。城市是人类生活的重要环境。伴随着人类文明进程，人类正从认识自然、改造自然走向尊重自然、融入自然，建设绿色城市已成为人们追求美好生活的新潮流。让园艺融入自然，让城市融入自然，让绿色融入城市，体现了人类渴望自然、返璞归真的精神追求。在自然中接受心灵的洗礼，让自然感动人类的心灵，是人类内心世界的自我升华和对生命感悟的最佳途径。</p>
                    <p>2019北京世园会，让汇集世界各国的精品园艺融入天然的山水大花园中，将全面展示园艺、城市、自然与人类和谐相融。园区与周边的自然美景融为一体，成为山水大花园中的园中之园，这将是对“让园艺融入自然让自然感动心灵”这一办会理念的最佳阐释。</p>
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