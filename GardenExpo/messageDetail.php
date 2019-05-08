<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>留言板详情</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="swiper4/css/swiper.min.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/message.css">
    <style type="text/css">
        .main .box .box-2 .box-2-1 .box-2-1-6 span {
            display: inline;
        }
    </style>
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
                        echo "<a href='login.html' style='color: #6fd508;background-color: white;width: 241px;font-weight: 600; font-size:18px;margin-left: -80px;'>您还没有登录，点击登录</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--第三部分 留言内容-->
        <div class="box-2">
            <div class="box-2-1">
                <?php
                
                $mid = $_GET['mid'];
                $link = mysqli_connect('localhost','root','12345678','garden');
                if (!$link) die("数据库连接错误");
                $sql_author = "SELECT * FROM user";
                $result_author = mysqli_query($link,$sql_author);
                if(!$result_author) die("数据库查询错误".$sql);
                while ($user = mysqli_fetch_array($result_author,MYSQL_ASSOC)) {
                $author[$user['uid']] = $user['username'];
                }
                $sql = "SELECT * FROM message WHERE mid={$mid}";
                $result = mysqli_query($link, $sql);
                if (!$result) die("数据库查询错误".$sql);
                $row =  mysqli_fetch_array($result,MYSQL_ASSOC);
                ?>
                <div class="box-2-1-3">
                    <span>
                        <?php  echo "{$row['mtitle']}"; ?>
                    </span>
                </div>
                <div class="box-2-1--">
                    <span style="display:inline-block;font-size: 15px;margin-bottom: 20px;">
                        <?php
                            $username = $author[$row['uid']];
                            echo "用户：{$username}";
                            echo "　";
                            echo "(发表时间：{$row['message_time']})";
                            
                        ?>
                    </span>
                </div>
                <div class="box-2-1-4">
                    <p>
                        <?php echo "{$row['mcontent']}"; ?>
                    </p>
                    
                </div>
                <div class="box-2-1-5">
                    <span>评论</span>
                    <a class="wz" title="点击写评论" href="#2">写评论</a>
                </div>
                <div class="box-2-1-6">
                    <?php
                    //查看评论
                    $link1 = mysqli_connect('localhost','root','12345678','garden');
                    if (!$link1) die("数据库连接错误");
                    $sql_author1 = "SELECT * FROM user";
                    $result_author1 = mysqli_query($link1,$sql_author1);
                    if(!$result_author1) die("数据库查询错误".$sql1);
                    while ($user1 = mysqli_fetch_array($result_author1,MYSQL_ASSOC)) {
                    $author1[$user1['uid']] = $user1['username'];
                    }
                    $sql1 = "SELECT * FROM comment WHERE mid={$mid} ";
                    $result1 = mysqli_query($link1, $sql1);
                    if (!$result1) die("数据库查找错误".$sql1);
                    while ($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
                        echo "<div style=\"width: 100%;height: 40px;font-size: 17px;line-height: 40px;\"><span class=\"wz1\">{$row1['username']}</span>";
                        echo "<span class=\"wz2\">{$row1['content']}</span>";
                        echo "<span class=\"wz3\">{$row1['comment_time']}</span></div>";

                        #查看回复内容
                        $sql2 = "SELECT * FROM reply WHERE cid={$row1['cid']} ";
                        $result2 = mysqli_query($link1, $sql2);
                        if (!$result2) die("数据库查找错误".$sql2);
                        while ( $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
                            #发评论用户
                            $username1 = $author[$row1['uid']];
                            #发表回复用户
                            $username2 = $author[$row2['uid']];
                            if ($username == $username2) {
                                echo "<div style=\"box-sizing: border-box;padding: 10px 0 10px 50px;\"><span class=\"wz1\">作者 回复用户 {$username1}</span>";
                            }else {
                                echo "<div style=\"box-sizing: border-box;padding: 10px 0 10px 50px;\"><span class=\"wz1\">{$username2} 回复用户 {$username1}</span>";
                            }
                            echo "<span class=\"wz2\">{$row2['content']}</span>";
                            echo "<span class=\"wz3\">{$row2['reply_time']}</span></div>";
                        }

                        echo "<div class=\"reply title\" >";
                        echo "<a onclick='reply({$row1['cid']})' title=\"点击回复\" class=\"reply2 hf\">回复</a></div>";
                        echo "<form action=\"reply.php?cid={$row1['cid']}\" method=\"post\">";
                        echo "<div class=\"reply1\" id=\"{$row1['cid']}\">";
                        echo "<input type=\"text\" placeholder=\"请输入回复内容\" name=\"detail\">";
                        echo "<button type=\"submit\">确认</button>";
                        echo "</div>";
                        echo "</form>";
                        echo "<script language=\"JavaScript\">
                         function reply(id) {
                                document.getElementById(id).style.display = \"block\";
                            }
                        ";
                        echo "</script>";

                        }
                    ?>
                    
                </div>
                <div class="box-2-1-6" >
                    <div style="width: 100%;height: 40px;font-size: 17px;line-height: 40px;"><span class="wz1">
                        <span class="wz1">啦啦啦</span>
                        <span class="wz2">登园博文昌阁，听中国之声</span>
                        <span class="wz3">2019-01-11</span>
                    </div>
                </div>
                <div class="box-2-1-6">
                    <div style="width: 100%;height: 40px;font-size: 17px;line-height: 40px;"><span class="wz1">
                        <span class="wz1">啦啦啦</span>
                        <span class="wz2">登园博文昌阁，听中国之声</span>
                        <span class="wz3">2019-01-11</span>
                    </div>
                </div>
                <div class="box-2-1-7" id="2">
                    <?php
                        if (isset($_COOKIE['login']) && $_COOKIE['login'] ==1 ) {
                        echo "<form action=\"comment.php?mid={$row['mid']}&username={$_COOKIE['username']}\" method=\"post\">";
                    ?>
                        <span>留下评论</span>
                        <textarea placeholder="写下你的评论吧！" name="detail1"></textarea>
                        <input type="submit" value="发表" class="fb" style="display: block;width: 100px;height: 40px;line-height: 40px;font-size: 16px;margin-top: 20px;margin-left: 100px;">
                    </form>
                    <?php
                        }else{
                            echo "<a href='login.html' style='color: #6fd508;background-color: white;width: 241px;font-weight: 600; font-size:18px;margin: 150px 80px 10px 150px;'>您还没有登录，点击重新登录</a>";
                        }
                    ?>
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