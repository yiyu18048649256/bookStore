
<?php
 header("content-type:text/html;charset=utf-8");
$userId = $_POST['userId'];
$userPsd = $_POST['userPsd'];

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

session_start();
$_SESSION["adminId"] = "";
$_SESSION["adminPsd"] = "";
$sql = "SELECT ADMINID, ADMINPSD FROM admin WHERE (ADMINID='$userId') AND (ADMINPSD='$userPsd')";//查询这个表特定值
$result = mysqli_query($conn, $sql);//结果
if ($result->num_rows > 0) {

    echo "<script>alert('登 录 成 功 !');
    window.location.href = 'http://localhost:8080/phpDemo/page/admin/admindefault.php';</script>";
  
    $_SESSION["adminId"] = $userId;
    $_SESSION["adminPsd"] = $userPsd;
    
}
else if ($_SESSION["adminId"] == $userId && $_SESSION["adminPsd"] == $userPsd) {

    echo "<script>alert('该账号已经登录了！');
    window.location.href = 'http://localhost:8080/phpDemo/page/admin/admindefault.php';</script>";


}else {
    echo "<script>alert('登录失败，账号未找到！');
    window.location.href = 'http://localhost:8080/phpDemo/admin.php';</script>";
}


mysqli_close($conn);
?>