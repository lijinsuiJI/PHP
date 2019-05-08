<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>购买电子票</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="swiper4/css/swiper.min.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/ticket.css">
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
        <!--第三部分 购票头-->
        <div class="box-2">
            <div class="box-2-1">
                <img src="img/银杏大道1.jpg">
            </div>
            
            <div class="box-2-2">
                <div class="box-2-2-1">
                    <span>北京园博园</span>
                </div>
                <div class="box-2-2-2">
                    <span class="wz1">价格</span>
                    <span class="wz2">20元</span>
                    <span class="wz3">已售6666</span>
                </div>
                <?php
                    echo "<form action=\"buyTicet.php?ucode={$_COOKIE['ucode']}&username={$_COOKIE['username']}\" method=\"post\">";
                ?>
                <!-- <form action="buyTicet.php" method="post"> -->
                    <div class="box-2-2-3">
                        <span>数量</span>
                        <div class="cart-select">
                            
                            <button type="button" onclick="reduce()">-</button>
                            <input type="text" id="text1" value="1" name="num2">
                            <button type="button" onclick="add()">+</button>
                        </div>
                    </div>
                    <div class="box-2-2-4">
                        <input type="hidden" id="text1" value="20" name="num1">
                        <input type="submit" name="sub" value="购买" style="display: inline-block; width: 100px;line-height: 50px;font-size: 22px;text-align: center;color: #F5FFFA;background-color: #6fd508;border:0px;cursor: pointer;">
                    </div>
                </form>
                <div class="box-2-2-5">
                    <span class="wz">服务承诺</span>
                    <span>免预约 |</span>
                    <span>随时退 |</span>
                    <span>过期退</span>
                </div>
            </div>
            
        </div>
        <!--第四部分-->
        <div class="box-3">
            <div class="box-3-1">
                <span>购买须知</span>
            </div>
            <div class="box-3-2">
                <div class="box-3-2-1">
                    <span>使用时间</span>
                    <span class="wz">7：30-18：00</span>
                </div>
                <div class="box-3-2-2">
                    <span>使用规则</span>
                    <span class="wz">电子票验证地点：凭收到60开头的12位数字码或二维码到景区3号门门口售票处换票入园</span>
                    <p>无需预约，消费高峰时可能需要等位，每张券限1人使用</p>
                    <p>券密码一旦验证即代表消费成功，不可申请“随时退款”和“过期退款”，请您合理安排验证时间</p>

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
<script>
    //购物车加减商品数量
    //实现点击减数量
    function reduce() {
        //1、获取输入框节点
        var a = document.getElementById("text1");
        //2、获取数量节点
        var b = parseInt(a.value) ;
        //3、点击减数量
        if (b > 1){
            a.value = b - 1;
        }
    }

    //实现点击增数量
    function add() {
        //1、获取输入框节点
        var a = document.getElementById("text1");
        //2、获取数量节点
        var b = parseInt(a.value) ;
        //3、点击加数量
        if (b < 10){
            a.value = b + 1;
        }
    }

    $(document).ready(function(){
        $('#a').hover(function() {
            $("#b").css('display', 'block');
        }, function() {
            $("#b").css('display', 'none');
        });

        $("#b").hover(function() {
            $(this).css('display', 'block');;
        }, function() {
            $(this).css('display', 'none');
        });
    })
</script>
</body>
</html>