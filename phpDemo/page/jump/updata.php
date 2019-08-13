<?php 
 header("content-type:text/html;charset=utf-8");
$userId = $_POST['userId'];
$userPhone = $_POST['userPhone'];
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

$sql = "SELECT USERID FROM user WHERE USERID='$userId'";
$result = mysqli_query($conn, $sql);
echo "$result->num_rows";
if ($result->num_rows == 0) {

        $sql1 = " INSERT INTO user(`USERID`,USERPHONE,`USERPSD`) VALUES('$userId', '$userPhone', '$userPsd')";//查询这个表
        
        
        //判断是否成功
        if (mysqli_query($conn, $sql1)) {
                echo "<script>window.location.href = '../login.php';
        alert('注册成功');
        alert('{$userPhone}');</script>";
        }
}
else {
        echo " <script>window.location.href ='../register.php';
        alert('注册失败!该账号已被注册!');</script>";

}

mysqli_close($conn);

?>