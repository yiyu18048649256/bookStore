
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
$_SESSION["userId"] = "";
$_SESSION["userPsd"] = "";
$sql = "SELECT USERID, USERPSD FROM user WHERE (USERID='$userId') AND (USERPSD='$userPsd')";//查询这个表特定值
$result = mysqli_query($conn, $sql);//结果
if ($result->num_rows > 0) {

    echo "<script>alert('登 录 成 功 !');
    window.location.href = '../default.php';</script>";
  
    $_SESSION["userId"] = $userId;
    $_SESSION["userPsd"] = $userPsd;
    
}
else if ($_SESSION["userId"] == $userId && $_SESSION["userPsd"] == $userPsd) {

    echo "<script>alert('该账号已经登录了！');
    window.location.href = '../default.php';</script>";


}
else echo "<script>window.location.href='../login.php';alert('账号密码错误');</script>";


mysqli_close($conn);
?>