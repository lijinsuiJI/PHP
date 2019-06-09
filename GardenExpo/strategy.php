<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>参观攻略</title>
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
                    <span id="3"><a class="wz">电瓶车参观路线</a></span>
                    <img src="img/电瓶车路线.jpg" class="photo">
                </div>
                <div class="box-2-1-2">
                    <span id="4"><a class="wz">精品路线</a></span>
                    <p>【路线】：六号门区——植物馆——中国馆——国际馆（预计1小时50分钟）</p>
                    <p>【介绍】</p>
                    <p>六号门作为团队入口，其主题为植物之门、生命之门。</p>
                    <p style="font-weight: 600;">植物馆</p>
                    <img src="img/植物园.jpg" class="photo">
                    <p>植物馆建筑面积约10,000平方米，建筑设计理念为“升起的地平”，建筑表面机理以植物根系为灵感，庞大的垂坠根系向下不断蔓延，将植物原本隐藏于地下的强大生命力直观呈现给参观者，不仅产生强烈的视觉冲击，更带领参观者踏上一场以感受植物根系力量为起点的奇妙植物世界之旅。</p>
                    <p style="font-weight: 600;">中国馆</p>
                    <p>世园会的主要场馆之一，中国馆按照“生生不息，锦绣中华”的展陈理念，静态展示与动态演绎相结合，实物花艺与虚拟意境相呼应，追华夏园艺历史长河，观九州园艺辉煌杰作，赏山水林田湖草律动生机。以园艺为载体聚焦中国生态文化，汇聚中国31个省区市园艺产业、生态文明建设成果以及科研院校探索的前沿成果，展示中国非物质文化遗产插花艺术，创建中国园艺产业的发展成就和高新科技成果的展示平台，打造新时代美丽中国建设成果的示范窗口，搭建中国园艺生态文化传承创新的交流空间。</p>
                    <p style="font-weight: 600;">国际馆</p>
                    <p>世园会的主要场馆之一，国际馆以“融和绽放”为展陈理念，采用“实物+多媒体+互动+氛围”多维方式，讲述“一带一路”沿线等全球园艺文化故事，荟萃世界各地独特的园艺成果与贡献；官方参展者展示各自独特的园艺特色与地域文化，举办2019世界花艺大赛、市花月季、菊花等七类花卉专项国际竞赛展示，展现园艺产业发展水平，通过园艺架起世界“开放包容、合作共赢、传承创新”的桥梁。</p>
                </div>
                <div class="box-2-1-2">
                    <span id="5"><a class="wz">世园交通攻略</a></span>
                    <p style="font-weight: 600;">7条直通世园会公交专线任您选择</p>
                    <p>世园会公交专1线（地铁朱辛庄站-世园会P3停车场）</p>
                    <p>世园会公交专2线（地铁北安河站-世园会P3停车场）</p>
                    <p>世园会公交专3线（地铁天通苑北站-世园会P3停车场）</p>
                    <p>世园会公交专4线（地铁金安桥站-世园会P3停车场）</p>
                    <p>世园会公交专5线（地铁西二旗站-世园会P3停车场）</p>
                    <p>世园会公交专6线（地铁六里桥东站-世园会P3停车场）</p>
                    <p>世园会公交专7线（地铁霍营站-世园会P3停车场）</p>
                </div>
                <div class="box-2-1-2">
                    <span id="6"><a class="wz">园区导览图</a></span>
                    <img src="img/园区导览图.jpg" class="photo">
                </div>
            </div>
            <div class="box-2-2">
                <div class="box-2-2-1">
                    <span>搜索</span>
                    <input type="text" placeholder="请输入关键字">
                </div>
                <div class="box-2-2-2">
                    <span>分类</span>
                    <a href="#3">参观路线</a>
                    <a href="#4">精品路线</a>
                    <a href="#5">交通攻略</a>
                    <a href="#6">园区导览图</a>
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