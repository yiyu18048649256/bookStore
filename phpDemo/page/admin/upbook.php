<?php 
header("content-type:text/html;charset=utf-8");

$bId = $_POST['bookId']; //图书编号
$bname = $_POST["bookName"]; //图书名字
$price =  $_POST["bookPrice"]; //图书价格
$writer =  $_POST["bookWriter"];  //作者
$type = $_POST['bookType']; //分类
$syn = $_POST['bookSyn']; //简介
$jpg = $_POST["bookImg"];//图书图片
$bNum = $_POST['bookNum']; //库存


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

$sql = "SELECT BOOKID FROM book WHERE BOOKID='$bId'";
$result = mysqli_query($conn, $sql);
echo "$result->num_rows";
if ($result->num_rows == 0) {

        $sql1 = "INSERT INTO book(BOOKID,BOOKNAME,BOOKWRITER,BOOKPRICE,BOOKTYPE,BOOKSYNOPSIS,BOOKIMG,BOOKNUM) VALUES('$bId', '$bname', '$writer','$price','$type','$syn','$jpg','$bNum')";
        //查询这个表     
        //判断是否成功
        if (mysqli_query($conn, $sql1)) {
                echo "<script>window.location.href = 'bookMan.php';
        alert('添加成功');</script>";
        }
       else {
            echo "<script>window.location.href = 'addBook.php';
            alert('意外原因，添加失败');</script>";
        // echo "$bId<p>$bname<p>$writer<p>$price<p>$type<p>$syn<p>$jpg<p>$bNum";
         }
        
}
else {
        echo " <script>window.location.href ='addBook.php';
        alert('书号已经存在，请检查后输入!');</script>";

}

mysqli_close($conn);

?>