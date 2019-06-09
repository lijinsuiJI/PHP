<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>活动详情</title>
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
                                <li><a href="News.php">园博资讯</a></li>
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
                    <span ><a class="wz">奇幻光影森林</a></span>
                    <p>2019北京世界园艺博览会是园林园艺领域的“奥林匹克盛会”，科技文化与园林园艺如何创新示范，是一个不可缺席的议题，奇幻光影森林应运而生。</p>
                    <p> 奇幻光影森林集成了AR技术、人工智能技术、虚拟视觉技术、人机互动技术、新媒体技术，与中国的传统文化《山海经》相结合，打造了一个充满想象的奇幻世界。奇幻光影森林将白天夜晚融合设计，分为“太阳幻境”与“月亮幻境”。</p>
                    <p>白天，游客下载“太阳幻境”，“太阳幻境”基于AR与虚拟视觉技术为用户打造了奇幻光影森林AR景园，用户通过手机寻找、参与体验，一个白天看起来普普通通的园林，却有你意想不到的偶遇……偶遇了岩石上的故事；偶遇了神兽仙灵；也许还会偶遇一群神仙天女……“太阳幻境”再现了奇幻光影森林的夜间展项，同时也有超出夜晚的内容，最为惊艳的是在天空中惊艳呈现“天女散花”，鲜花会降落到每个用户头顶，用户可与云间的天女合影留念……“奇幻光影森林”的AR景园——“太阳幻境”，为不在延庆住宿、不能体验夜间奇幻光影森林的用户，提供了体验的机会，同时也是一个用户可以“请回家”的数字园林，通过云端下载家庭版“太阳幻境”，为不能来世园的用户提供了与“神仙们”交互的机会。</p>
                    <p>奇幻光影森林将科技与文化、白天与黑夜、景区与家庭、线上与线下、实景与虚景、以及多种人机互动融合设计，且在体验上互为支撑，在科技文旅的模式上形成创新示范，带给游客丰富多彩的惊喜体验！</p>
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