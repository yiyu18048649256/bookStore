<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>脉脉图书·登陆</title>
</head>
<link rel="stylesheet" href="../css/login.css">

<body>
<div>
        <!-- 顶部登录 -->
        <div class="top">
            <div class="top-box">
                <div class="top-box-l">
                    <a href="./login.php">登录</a>
                </div>
                <div class="top-box-r">
                    <a href="./register.php">免费注册</a></li>
                </div>

            </div>
        </div>
        <!-- 内容 -->
        <div>
            <!-- logo -->
            <div class="logo">
                <div class="logo-img"><a href="../index.php"><img src="../img/logo.png"></a></div>
                <div class="logo-text">欢 迎 登 录</div>
            </div>
            <div class="login">
                <div class="login-box-l">
                </div>
                <div class="login-box-r">                    
                    <div class="login-box-box">
                        <div class="login-box-text">脉脉图书商城会员登陆</div>
                        <div class="login-box-img">
                            <form action="jump/downdata.php" method="post" id="text_form">
                                <div class="input-box userId">账号：<input type="text" value="" id="userId" name="userId"></div>
                                <div class="input-box userPsd">密码：<input type="password" name="userPsd" id="userPsd" value="" ></div>
                                <div class="input-box-vCode">验证码：<input type="text" name="vCode" id="vCode" onmouseout="checkVCode()"><img src="jump/vCode.php" onClick="this.src='jump/vCode.php?nocache='+Math.random()" style="cursor:hand" alt="点击换一张"/>
                            </div>
                            
                            </form>
                            <div class="btn-box">
                           
                                <div class="btn-box-reg"><a href="./register.php">注册</a></div>
                                <div class="btn_box_login">登陆</div>
                            </div>
                            <div class="vCode-text">
                                <i id="check-text"></i>
                            </div>
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
<script src="../js/login.js"></script>
</html>
