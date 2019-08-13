<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文档管理</title>
</head>
    <link rel="stylesheet" href="css/addBook.css">
<style>
    table, th, td {
        border: solid 1px #efefef;
    }
    table {
        width: 100%;
        margin: auto;
        border-collapse: collapse;
        text-align: center;
        border-radius: 6px;
    }
    td,th{
        padding: 10px;
    }
    a {
        text-decoration-line: none;
        color: green;
    }
    a:hover {
        color: brown;
        text-decoration-line: underline;
    }
    tr:first-child {
        background-color: #efefef;
        border-radius: 4px 4px 0 0;
        border-bottom: solid 1px #ddd;
    }
    table caption {
        font-size: 1.5rem;
        font-weight: bolder;
        margin-bottom: 20px;
    }
    p {
        text-align: center;
    }
    /*首页样式*/
    p a:first-child {
        width: 56px;
    }
    p a:last-child {
        width: 56px;
    }
    p a {
        display: inline-block;
        width: 28px;
        height: 24px;
        border: 1px solid green;
        margin-left:2px;
        line-height: 24px;
    }
    /*当前页样式*/
    .active {
        background-color: green;
        color: white;
    }
    .more {
        border: none;
    }
    ul li{
        list-style: none;
    }
</style>
<body>
<h3>当前位置：新增图书</h3>
<table class="table table-hover text-center">
            <form action="upbook.php" method="post" id="book_form">
                <div class="box">
                    <div class="box-l">
                        <ul>
                            <li><span>书名:&nbsp;</span><input type="text" name="bookName"  placeholder="书名，例：西游记" id="bookName"></li>
                            <li><span>封面:&nbsp;</span><input type="text" name="bookImg"  placeholder="图片地址" id="bookImg"></li>
                            <li><span>书号:&nbsp;</span><input type="text" name="bookId"  placeholder="书号，例：20191015" id="bookId"></li>
                            <li><span>简介:&nbsp;</span><textarea   class="syn" placeholder="简介" name="bookSyn" id="bookSyn"></textarea></li>
                        
                        </ul>
                    </div>
                    <div class="box-r">
                        <ul>
                            <li><span>作者:&nbsp;</span><input type="text" name="bookWriter"  placeholder="作者" id="bookWriter"></li>
                            <li><span>价格:&nbsp;</span><input type="text" name="bookPrice"  placeholder="价格，例32.00" id="bookPrice"></li>
                            <li><span>分类:&nbsp;</span><input type="text" name="bookType"  placeholder="分类，例，古典文学" id="bookType"></li>
                            <li><span>数量:&nbsp;</span><input type="text" name="bookNum"  placeholder="数量，例，999" id="bookNum"></li>
                        </ul>
                    </div>
                </div>            
            </form>
            <div class="btn"> 
                <div class="btn-qx"><a href="bookMan.php">取消</a></div>
                <div class="btn-tj"><a>提交</a></div>
            </div>
</body>
    <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="./js/add.js"></script>
</html>