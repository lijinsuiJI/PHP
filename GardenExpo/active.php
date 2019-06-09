<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>活动</title>
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
        <!--第三部分 活动-->
        <div class="box-2">
            <div class="box-2-1">
                <div class="box-2-1-3">
                    <span>园博活动</span>
                </div>
                <div class="box-2-1-4">
                    <div class="box-2-1-4-1">
                        <a href="activeDetail.php"><img src="img/活动.jpg"></a>
                        <span class="wz"><a href="activeDetail.php">奇幻光影森林</a></span>
                        <span><a href="activeDetail.php">奇幻光影森林集成了AR技术、人工智能技术、虚拟视觉技术、人机互动技术、</a></span>
                    </div>
                    <div class="box-2-1-4-1">
                        <a href="activeDetail.php"><img src="img/上海日活动.jpg"></a>
                        <span class="wz"><a href="activeDetail.php">上海日活动</a></span>
                        <span><a href="activeDetail.php">5月27日,演员在“上海日”活动中表演。</a></span>
                    </div>
                    <div class="box-2-1-4-1">
                        <a href="activeDetail.php"><img src="img/加勒比海盗日.jpg"></a>
                        <span class="wz"><a href="activeDetail.php">加勒比音乐节活动</a></span>
                        <span><a href="activeDetail.php">5月19日，表演者（前）在加勒比音乐节上献艺。</a></span>
                    </div>
                    <div class="box-2-1-4-1">
                        <a href="activeDetail.php"><img src="img/民族文化.jpg"></a>
                        <span class="wz"><a href="activeDetail.php">世园会上展示民族文化</a></span>
                        <span><a href="activeDetail.php">在北京世园会“内蒙古日”文化展示活动上展出的呼伦贝尔少数民族文创产品</a></span>
                    </div>
                    <div class="box-2-1-4-1">
                        <a href="activeDetail.php"><img src="img/世园之心.jpg"></a>
                        <span class="wz"><a href="activeDetail.php">世园之心灯光展</a></span>
                        <span><a href="activeDetail.php">青山绿水，花鸟为邻。5月4日至9月30日，长城脚下，妫水河畔</a></span>
                    </div>
                    <div class="box-2-1-4-1">
                        <a href="activeDetail.php"><img src="img/活动.jpg"></a>
                        <span class="wz"><a href="activeDetail.php">奇幻光影森林</a></span>
                        <span><a href="activeDetail.php">奇幻光影森林集成了AR技术、人工智能技术、虚拟视觉技术、人机互动技术、</a></span>
                    </div>
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