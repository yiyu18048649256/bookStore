<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>脉脉图书·注册</title>
</head>
    <link rel="stylesheet" href="../css/register.css">
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
                <div class="logo-text">欢 迎 注 册</div>
            </div>
           <!-- 主体 -->
           <div class="reg">
                <div class="reg-text">
                   <div class="reg-text-l">欢迎注册</div>
                   <div class="reg-text-r">如果已有账号，<a href="./login.php">点此登录</a></div>
                </div>
                <div class="reg-box"> 
                    <form action="jump/updata.php" method="post" id="text_form">     
                           <div class="reg-box-text userId">会员账号：<input type="text" id="userId" value="" name="userId">*<i id="checkBox-userId"></i></div> 
                           <div class="reg-box-text userPhone">手机号：<input type="text" value="" name="userPhone" id="userPhone">*<i id="checkBox-userPhone"></i> </div>           
                           <div class="reg-box-text userPsd">密码：<input type="password" value="" name="userPsd" id="userPsd">*<i id="checkBox-userPsd"></i> </div>
                           <div class="reg-box-text reUserPsd">确认密码：</i><input type="password" value="" name="reUserPsd" id="reUserPsd">*<i id="checkBox-reUserPs    d"></i> </div>                         
                       </form>
                       
                       <div class="btn_zhuce">提交</div>
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
</html>