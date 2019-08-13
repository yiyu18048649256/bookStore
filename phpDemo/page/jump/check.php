<?php
 header("content-type:text/html;charset=utf-8");
session_start();
$vCode = $_POST['vCode'];
$sCode = $_SESSION['vCode'];
if (isset($vCode)) {

    if (strtolower($vCode) == $sCode) {//strtolower转化为小写的函数
        // echo "<script>alert('输入正确！');</script>";
        echo "1";
    }
    else {
        echo "0";
    }
    exit();
}
?>  