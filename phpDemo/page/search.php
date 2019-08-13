<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>脉脉图书·搜索</title>
</head>
    <link rel="stylesheet" href="../css/search.css">
<body>
    <div>
        <!-- 顶部登录 -->
        <div class="top">
            <div class="top-box">
            <?php
            session_start();
            $userId = $_SESSION['userId'];
            if ($userId != "") {
                echo "<div class='top-box-l'>
                    <a href='./default.php'>" . $userId . "</a>
                </div>
                <div class='top-box-z'>
                    注销
                </div>";
            }
            else {
                echo " <div class='top-box-l'>
                    <a href='./login.php'>登录</a>
                </div>
                <div class='top-box-r'>
                    <a href='./register.php'>免费注册</a>
                </div>
";
            }
            ?>

            </div>
        </div>
        <!-- 内容 -->
        <div>
            <!-- logo -->
            <!-- logo -->
            <div class="logo">
            <div class="logo-img"><a href="../index.php"><img src="../img/logo.png"></a></div>
            <div class="box">
                <form action="./page/search.php" method="GET">
                <input type="text" id="bookName" name="search" placeholder="请输入关键字" >
                </form>
                <div class="search">搜索</div>
            </div>
            <div class="logo-box">
                <div class="logo-cart"><img src="../img/cart.png"></div>
                <div class="logo-text">购物车</div>
            </div>
        </div>
        <!-- 导航栏 -->
        <div class="nav">
            <div class="nav-box">
            <div class="nav-box-box1"><a href="../index.php">全部商品</a></div>
            <div class="nav-box-box2"><a href="../index.php">首页</a></div>
            <div class="nav-box-box3"><a href="#">电子书</a></div>
            </div>
        </div>
           <!-- 主体 -->
            <div class="sec">
                
                    <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "201314";
                                $dbname = "book_shop";
                                
                                $bookName=$_POST['bookName'];
                                
                                
                                if(isset($_REQUEST['search'])) //如果存在参数“fix”
                                {
                                    $bookName=$_REQUEST['search']; //将fix值赋给变量alpha
                                 // 创建连接
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                 // Check connection
                                    if ($conn->connect_error) {
                                     die("连接失败: " . $conn->connect_error);
                                     echo "连接失败";
                                    }
                                        
                                    $sql = "SELECT * FROM book WHERE BOOKNAME='$bookName'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {

                                    $Num=$result->num_rows;    
                                    echo "<div class='sec-box1'>一共搜索到{$Num}条数据</div>
                                    <div class='sec-box2'>
                                        <ul>";                           
                                    for($i=0; $i<$Num; $i++){
                                        $row =$result->fetch_assoc();
                                        $id=$row["BOOKID"];
                                        $name = $row["BOOKNAME"];
                                        $price =  $row["BOOKPRICE"];
                                        $writer =  $row["BOOKWRITER"];
                                        $jpg = $row["BOOKIMG"];
                                        $synopsis = $row["BOOKSYNOPSIS"];
                                        $url ="../page/details.php?search=".$name."&id=".$id;
                                        echo "<li>
                                        <div class='sec-box2-li-l'><a href='{$url}'><img src='{$jpg}'></a></div>
                                        <div class='sec-box2-li-r'>
                                            <ul>
                                                <li class='sec-box2-r-li'><i>{$name}</i> <p>作者：{$writer}</p></li>
                                                <li class='sec-box2-r-price'>￥ {$price} rmb</li>
                                                <li class='sec-box2-r-text'>简介：{$synopsis}</li>
                                                <li class='sec-box2-r-btn'>
                                                    <div><a href='{$url}'>详情</a></div>
                                                    <div><a href='{$url}'>购买</a></div>
                                                </li>
                                            </ul>
                                        </div>
                                     </li>";
                                  
                                    }
                                }else exit(0);
                                }
                               
                                ?>
                     
                    </ul>
                </div>
            </div>
            <!-- 底部 -->
            <div class="bottom">
                <div class="bottom-img"> <img src="../img/footert1.jpg"></div>
                <div class="bottom-on">脉脉官方网站 • 在线留言 • 联系我们</div>
            </div>
        </div>
        <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/autoSize.js"></script>
    <script src="../js/register.js"></script>
    <script src="../js/defualt.js"></script>
    <script src="../js/index/search.js"></script>
    <script src="../js/input.js"></script>
    <script src="../js/index/index.js"></script>
</body>

</html>