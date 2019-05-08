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
                <div class="box-2-1-2">
                    <span id="3"><a class="wz">参观路线</a></span>
                    <p>北京园博会举行媒体开放日，邀请众多媒体参观、园博园，也提前领略到了园博园的风情。乘地铁14号线，从园博园站A口出来后，右手边停车场的摆渡大巴早已在等候。而从乘上摆渡大巴到园博园中部位置的3号大门，只需3分钟。同时记者发现，如果想从园博园的1号门进园，从地铁B口出最方便。</p>
                    <p>据园区工作人员介绍，园博园周边8条新建道路相继开通、地铁14号线设园博园站、7条公交线路直达、1万余停车位虚位以待，游客可以享受到最便捷的交通接驳服务。</p>

                </div>
                <div class="box-2-1-2">
                    <span id="4"><a class="wz">服务设施</a></span>
                    <p>为方便游客游览，园博园内开设了6大门区供游客出入，并配置了99辆电瓶车。6大门区共有入园闸机124个，出园闸机33个，通行速度为每3秒一个人。紧邻P4停车场的3号门区是主门区，远看状如恐龙的大门格外显眼，进去右手就是主展馆。园内还设置了11个服务区、14个游客服务中心、2个物品寄存处、5个物品租赁中心和3个医疗室。</p>
                    <p>游客服务中心分布在6个门区和8个服务区之中，可以提供咨询、投诉、广播找人和失物招领等服务。物品寄存处在2号门区和6号门区各有一个。5个物品租赁中心分别在3号、4号、6号门区和1号、9号服务区，有轮椅、婴儿车等设备对外出租，还提供自助导览、导游讲解等有偿服务。医疗室1号、9号、11号服务区各有一个。</p>

                </div>
                <div class="box-2-1-2">
                    <span id="5"><a class="wz">展出内容</a></span>
                    <p>一天遍赏经典园林，在园博园中看到，各场馆、设施建设已基本完工，绿树、鲜花、清湖装点着各具特色的园林，整个园区仿佛是一张清新大气、天地人和的美丽画卷。作为园博会中国传统展园代表的“五展园”，北京、重庆、江苏、广东、福建等5个省市分别建设的皇家园林、巴渝园林、苏州园林、岭南园林、闽南园林，各具地方特色，展示了中国不同类型的园林风情，游客可以在园博会一次赏遍中国各类经典园林。</p>
                    <p>时尚创意无处不在，有人说园博园是园艺版的“世界公园”，但当真正走进园区后会发现，许多创意设计也是逛园博园的一大亮点。作为标志性建筑的北京园博会主展馆，其独具特色的电子月季已经盛放迎客，展会期间，主展馆一层将作为室内展开放。</p>
                    <p>热气球主题园则首次把园林风景从地面延展到空中，游客可以乘坐热气球在50米的高空停留10分钟，在天空中俯瞰整个园博园的美景。同时，记者发现，园区为游客准备了多项贴心逛园服务，比如自行车、轮椅租赁，电瓶车接送等，而游客有任何疑问，随处可见的导览接待员都能做出详细的解答。</p>
                </div>
                <div class="box-2-1-2">
                    <span id="6"><a class="wz">园博全景地图</a></span>
                    <img src="img/园博地图.jpg" class="photo">
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
                    <a href="#4">服务设施</a>
                    <a href="#5">展出内容</a>
                    <a href="#6">园博全景地图</a>
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