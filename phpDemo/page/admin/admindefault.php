﻿<style>
    /*********** 声明公共元素样式 ***********/
* {
    margin: 0;
    padding: 0;
}
body {
    background-color: #efefef;
}
li {
    list-style-type: none;
}
a {
    color:#000;
    text-decoration-line: none;
}
a:hover {
    color: brown;
    text-decoration-line: underline;
}
/*********** 声明顶部样式 ***********/
header {
    background: linear-gradient(to top, lightgrey, #efefef);
    margin: 10px 20px;
    overflow: hidden;
    height: 60px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 6px;}
header div {
    width: 100%;
    margin: auto;
}
header h1 {
    float: left;
    margin-left: 20px;
    font-weight: normal;
    line-height: 60px;
}
header nav {
    float: right;
    margin-right: 20px;
}
header nav ul li {
    float: left;
    padding-left: 30px;
    line-height: 80px;
}
/*********** 声明主体区样式 ***********/
/*侧边导航栏*/
main {
    width: 1280px;  /*内容区宽度*/
    height: 800px;
    margin: 30px auto 0;
    padding-left: 200px;
    overflow: hidden;
    /*布局参考线*/
    /*border: 1px solid red;*/
}
main article {
    float: left;
    /*布局参考色块*/
    /*background-color: #FD6FCF;*/
    width: 100%;
    min-height: 100%;
    background: linear-gradient(to bottom, lightgrey, #ededed);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
    border-radius: 6px;
}
main aside {
    float: left;
    border-radius: 6px;
    background:linear-gradient(to left, lightgrey, #ededed);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
    padding-bottom: 20px;
    width: 175px;
    margin-left: -100%;
    position: relative;
    left: -197px;
}
main aside nav li {
    line-height: 2rem;
}
main aside nav li:first-child,main aside nav li a{
    padding: 10px 15px;
    display: block;
}
main aside nav li a.active,main aside nav li a:hover {
    border-left: 3px solid brown!important;
    background: #efefef;
    padding-left: 15px;
    margin-left: -3px;
}
main article iframe {
    min-width: 100%;
    min-height: 700px;
    margin: auto;
    border: none;
}
main article footer p {
    text-align: center;
}
</style>
<body>
<!--顶部信息区-->
<header role="header">
    <div>
        <h1>后台管理系统</h1>
        <nav role="user">
            <ul>
                <li>欢迎管理员:<strong>admin</strong></li>
                <li><a href="modify_pass.html" target="main">修改密码</a></li>
                <li><a href="javascript:void(0);" onclick="logout()">退出登录</a></li>
            </ul>
        </nav>
    </div>
</header>
<!--圣杯二列布局-->
<main role="main">
    <!--主体内联框架区-->
    <article role="content">
        <iframe src="welcome.php"  name="main">欢迎登陆</iframe>
        <footer role="copyright">
            
        </footer>
    </article>
    <!--左侧导航区-->
    <aside>
        <nav role="option">
            <ul>
                <li>导航列表</li>
                <li><a href="userMan.php" target="main">用户管理</a></li>
                <li><a href="bookMan.php" target="main">图书管理</a></li>
                <li><a href="addBook.php" target="main">添加图书</a></li>
            </ul>
        </nav>
    </aside>
</main>
</body>
</html>
<script>
    function logout() {
        if (window.confirm('是否退出?')) {
            window.location.href = 'login.html';
        } else {
            return false;
        }
    }
</script>