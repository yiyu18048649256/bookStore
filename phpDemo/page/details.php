<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>脉脉图书·商品详情</title>
</head>
    <link rel="stylesheet" href="../css/details.css">
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
            <div class="logo">
            <div class="logo-img"><a href="../index.php"><img src="../img/logo.png"></a></div>
            <div class="box">
                <form action="3" method="GET">
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
                <div class="sec-box1">
                </div>
                <div class="sec-box2">
                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "201314";
                                $dbname = "book_shop";
                                
                                // $bookName=$_POST['bookName'];
                                $bookId ="";
                                
                                if(isset($_REQUEST['id'])) //如果存在参数“fix”
                                {
                                    // $bookName=$_REQUEST['id']; //将fix值赋给变量alpha
                                    $bookId=$_REQUEST["id"];
                                 // 创建连接

                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                 // Check connection
                                    if ($conn->connect_error) {
                                     die("连接失败: " . $conn->connect_error);
                                     echo "连接失败";
                                    }
                                        
                                    $sql = "SELECT * FROM book WHERE BOOKID='$bookId'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {

                                    $Num=$result->num_rows;                               
                                    for($i=0; $i<$Num; $i++){
                                        $row =$result->fetch_assoc();
                                        $id=$row["BOOKID"];
                                        $name = $row["BOOKNAME"];
                                        $price =  $row["BOOKPRICE"];
                                        $writer =  $row["BOOKWRITER"];
                                        $jpg = $row["BOOKIMG"];
                                        $synopsis = $row["BOOKSYNOPSIS"];
                                        $num=$row["BOOKNUM"];
                                        
                                        echo "<div class='sec-box2-l'>
                                        <div class='sec-box2-img'><img src='{$jpg}'></div>
                                        <div class='sec-box2-simg'>
                                            <ul>
                                                <li><img src='{$jpg}'></li>
                                                <li><img src='{$jpg}'></li>
                                                <li><img src='{$jpg}'></li>
                                            </ul>
                                        </div>
                                        <div class='sec-box2-num'>
                                            商品编码：{$id}
                                        </div>
                                    </div>
                                    <div class='sec-box2-r'>
                                        <div class='sec-box3'>
                                            <ul>
                                                <li class='sec-box3-li1'><t id='bname'>{$name}&nbsp;</t>作者：{$writer}</li>
                                                <li>简介：{$synopsis}</li>
                                                <li class='sec-box3-li3'>
                                                    <div class='li3-text'>
                                                        <div>618读书会</div><div id='bprice'>￥{$price}</div>
                                                    </div>
                                                </li>
                                                <li class='sec-box3-li4'>配送省份：
                                                    <select class='sel'>
                                                        <option value='volvo'>四川省</option>
                                                        <option value='saab'>云南省</option>
                                                        <option value='opel'>贵州省</option>
                                                        <option value='audi'>陕西省</option>
                                                    </select>
                                                </li>
                                                <li class='sec-box3-li5'>
                                                    库存：{$num}本
                                                </li>
                                                <li class='sec-box3-li7'>数量：
                                                <input type='button' value='-' onclick='bb()'>
                                                <input type='text' value='0' id='buy'>
                                                <input type='button' value='+' onclick='aa()'>
                                               </li>
                                                <li class='sec-box3-li6'>
                                                   <div id='buy-car'>加入购物车</div><a href='#'>立即购买</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>";
                                       
                                    }
                                }else exit(0);
                                }
                               
                                ?>
                    
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
    <script src="../js/buy.js"></script>
    <script src="../js/index/index.js"></script>
    
</body>

</html>