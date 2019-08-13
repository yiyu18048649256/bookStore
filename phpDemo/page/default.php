<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>脉脉图书·个人信息</title>
</head>
    <link rel="stylesheet" href="../css/default.css">
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
                <div class="logo-text">个人页面</div>
            </div>
            <div class="nav">
                <div class="nav-box">
                    <div class="nav-box-box1"><a href="../index.php">全部商品</a></div>
                    <div class="nav-box-box2"><a href="../index.php">首页</a></div>
                    <div class="nav-box-box3"><a href="#">电子书</a></div>
                </div>
            </div>
           <!-- 主体 -->
            <div class="def">
                <div class="def-box">
                        <div class="def-box1">
                            <div class="def-box1-img">
                                <img src="../img/defualt.jpg">
                            </div>
                            <div class="def-box1-ul">
                                <ul>
                                    <li class="user">
                                        <?php
                                        echo "账号：" . $_SESSION['userId'];
                                        ?>
                                    </li>
                                    <li class="box"><a href="http://localhost:8080/phpDemo/page/default.php">个人资料</a></li>
                                    <li class="box"><a href="http://localhost:8080/phpDemo/page/gwc.php">订单信息</a></li>
                                    <li class="box"><a href="#">修改资料</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="def-box2">
                            <?php 
                            $servername = "localhost";
                            $username = "root";
                            $password = "201314";
                            $dbname = "book_shop";

                                // 创建连接   面向过程写法
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                                // Check connection
                            if (!$conn) {
                                die("连接失败: " . mysqli_connect_error());
                            }
                            mysqli_query($conn, 'set names utf8');//设置字符集

                            $userId = $_SESSION['userId'];
                            $sql = "SELECT * FROM user WHERE USERID='$userId'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();

                            echo "<div><i>账号：</i>" . $row['USERID'] . "</div>
                                    <div><i>昵称：</i> " . $row['USERNAME'] . "</div>
                                    <div><i>手机号：</i>" . $row['USERPHONE'] . "</div>
                                    <div><i>邮箱：</i> " . $row['USEREMAIL'] . "</div>
                                    <div><i>个人简介：</i>" . $row['USERSYNOPSIS'] . "</div>
                                    <div><i>注册时间：</i>" . $row['CREATETIME'] . "</div>";

                            ?>
                        </div>
                </div>
            </div>
            <!-- 底部 -->
            <div class="bottom">
                <div class="bottom-img"> <img src="../img/footert1.jpg"></div>
                <div class="bottom-on">脉脉官方网站 • 在线留言 • 联系我们</div>
            </div>
        </div>
</body>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/autoSize.js"></script>
    <script src="../js/register.js"></script>
    <script src="../js/defualt.js"></script>
</html>