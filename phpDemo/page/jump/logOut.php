<?php
 header("content-type:text/html;charset=utf-8");
$_SESSION = array();

    setCookie("PHPSESSID", "", time() - 1, "/");
    session_destroy();
    echo "<script>alert('退 出 成 功 !');
    window.location.href = 'http://localhost:8080/phpDemo/index.php';</script>"; 
?>