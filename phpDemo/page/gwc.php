


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>脉脉图书·购物车</title>
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
                <div class="logo-text">订单信息</div>
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
                        <div>
    <table>
    <tr>
            <td>序号</td>
            <td>书名</td>
            <td>编号</td>
            <td>价格</td>
            <td>数量</td>
        </tr>

    <?php
        session_start();
        $arr=$_SESSION['list'];
        // sizeof($arr)+1
        for($i=1;$i<11;$i++){
            $name=$arr[$i][0];
            $id=$arr[$i][1];
            $price=$arr[$i][2];
            $Number=$arr[$i][3];
            echo "<tr>
            <td>{$i}</td>
            <td>{$name}</td>
            <td>{$id}</td>
            <td>{$price}</td>
            <td>{$Number}</td>
            </tr>";
        }    
    ?>
   <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="http://localhost:8080/phpDemo/page/jump/clearCar.php">清空</a></td>
        </tr>      
    </table>


</div>
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