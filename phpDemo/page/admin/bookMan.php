<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文档管理</title>
</head>
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
</style>
<body>
<h3>当前位置：文档管理</h3>
<table class="table table-hover text-center">
        <tbody><tr>
            <th width="4%">ID</th>
            <th width="5%">编号</th>
            <th width="10%">图片</th>
            <th width="7%">名称</th>
            <th width="7%">作者</th>
            <th width="5%">价格</th>
            <th width="5%">分类</th>
            <th width="5%">库存</th>
            <th width="5%">状态</th>
            <th width="2%">推荐</th>
            <th width="20%">简介</th>
            <th width="10%">时间</th>
            <th width="10%">操作</th>
        </tr>
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
            $sql = "SELECT * FROM book";
            $result = $conn->query($sql);             
            $Num=$result->num_rows;         
            for($i=1; $i<$Num+1; $i++){
                $row =$result->fetch_assoc();
                $id=$row['ID'];   //序号
                $bId=$row['BOOKID']; //图书编号
                $bname = $row["BOOKNAME"]; //图书名字
                $price =  $row["BOOKPRICE"]; //图书价格
                $writer =  $row["BOOKWRITER"];  //作者
                $type=$row['BOOKTYPE']; //分类
                $syn=$row['BOOKSYNOPSIS']; //简介
                $jpg = $row["BOOKIMG"];//图书图片
                $rec=$row['BOOKREC']; //是否推荐
                $isDel=$row['ISDEL']; //是否上下架
                $bNum=$row['BOOKNUM']; //库存
                $cTime=$row['CREATETIME']; //创建时间               
                echo "<tr>
                <td>{$i}</td>
                <td>{$bId}</td>
                <td width='10%'><img src='{$jpg}' width='70' height='50'></td>
                <td>{$bname}</td>
                <td>{$writer}</td>
                <td>{$price}</td>
                <td>{$type}</td>
                <td>{$bNum}</td>
                <td>{$isDel}</td>
                <td>{$rec}</td>
                <td style='overflow: scroll;height:50px;'>{$syn}</td>
                <td>{$cTime}</td>
                <td><div><a href=''>修改</a> <a href=''>删除</a> </div></td>
              </tr>";
            }      
          $conn->close();
        ?>
    
      
         
    </tbody></table>
<!--分页-->
<p>
    <a href="">首页</a>
    <a href="" class="active">1</a>
    <a href="">2</a>
    <a href="">3</a>
    <a href="">4</a>
    <a href="" class="more">...</a>
    <a href="">尾页</a>
</p>
</body>
</html>