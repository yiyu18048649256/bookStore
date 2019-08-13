<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>脉脉图书</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
    <!-- 主体 -->
    <div>
        <!-- 顶部登录 -->
        <div class="top">
            <div class="top-box">
            <?php
            session_start();
            $userId = $_SESSION['userId'];
            if ($userId != "") {
                echo "<div class='top-box-l'>
                    <a href='./page/default.php'>" . $userId . "</a>
                </div>
                <div class='top-box-z'>
                    注销
                </div>";
            }
            else {
                echo " <div class='top-box-l'>
                    <a href='./page/login.php'>登录</a>
                </div>
                <div class='top-box-r'>
                    <a href='./page/register.php'>免费注册</a>
                </div>
";
            }
            ?>
            </div>
        </div>
        <!-- 内容 -->
        <div>
            <!-- logo -->
            <div class="logo">
                <div class="logo-img"><a href="./index.php"><img src="img/logo.png"></a></div>
                <div class="box">
                    <input type="text" name="search" placeholder="请输入关键字" id="bookName">
                    <div class="search">搜索</div>
                </div>
                <div class="logo-box">

                    <div class="logo-cart"><img src="img/cart.png"></div>
                    <div class="logo-text">购物车</div>
                </div>
            </div>
            <!-- 导航栏 -->
            <div class="nav">
                <div class="nav-box">
                <div class="nav-box-box1"><a href="./index.php">全部商品</a></div>
                <div class="nav-box-box2"><a href="./index.php">首页</a></div>
                <div class="nav-box-box3"><a href="#">电子书</a></div>
                </div>
            </div>
            <!-- 引导分类 -->
            <div class="classify">
                <!-- 分类 -->
                <div class="classify-box1">
                    <div class="classify-type">文学艺术</div>
                    <div class="classify-type">人文社科</div>
                    <div class="classify-type">健康生活</div>
                    <div class="classify-type">教育考研</div>



                </div>
                <!-- 轮播图 -->
                <div class="classify-img">
                    <div class="main" id="main">
                        <div class="banner" id="banner">

                            <div class="banner-slide sliwde1">
                                <img src="img/1.jpg">
                            </div>
                            <div class="banner-slide slide2">
                                <img src="img/2.jpg">
                            </div>
                            <div class="banner-slide slide3">
                                <img src="img/3.jpg">
                            </div>
                            <div class="banner-slide slide4">
                                <img src="img/4.jpg">
                            </div>

                        </div>
                        <div class="main-box" id="main-box">
                            <ul class="main-box-ul">
                                <li class="changeColor">经管励志</li>
                                <li>电子书</li>
                                <li>儿童读物</li>
                                <li>名店好书</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 好书推荐 -->
            <div class="rec">
                <div class="rec-box">
                    <div class="rec-box-text">
                        好书推荐
                    </div>
                    <div class="rec-box-img1">
                        <ul>                           
                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "201314";
                                $dbname = "book_shop";

                             
                            
                               // 创建连接
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("连接失败: " . $conn->connect_error);
                                    echo "连接失败";
                                }

                                $sql = "SELECT * FROM recommend";
                                $result = $conn->query($sql);
                                    
                                $Num=$result->num_rows;
                               
                                for($i=0; $i<$Num; $i++){
                                    $row =$result->fetch_assoc();
                                    $name = $row["BOOKNAME"];
                                    $price =  $row["BOOKPRICE"];
                                    $writer =  $row["BOOKWRITER"];
                                    $jpg = $row["BOOKIMG"];
                                    $url ="./page/search.php?search=".$name."&id=";
                                    echo "<li><div class='rec-box-img1-box'><p><a href='{$url}'><img  src='{$jpg}'  align='middle'/></a></p>";
                                    echo '<div class="rec-box-img1-book"><ul><li class="book-name">';
                                    echo "{$name}";
                                    echo ' </li><li class="book-writer"> ';
                                    echo "{$writer}";
                                    echo '</li><li class="book-price">';
                                    echo "￥{$price}";
                                    echo '</li></ul></div></li>';
                                  
                                }
                              
                                $conn->close();
                                ?>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 底部 -->
            <div class="bottom">
                <div class="bottom-img"> <img src="img/footert1.jpg"></div>
                <div class="bottom-on">脉脉官方网站 • 在线留言 • 联系我们</div>
            </div>
        </div>
</body>
    <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="./js/index/banner.js"></script>
    <script src="./js/autoSize.js"></script>
    <script src="./js/index/search.js"></script>
    <script src="./js/defualt.js"></script>
    <script src="./js/index/index.js"></script>
    
</html>