<?php
    header("content-type:text/html;charset=utf-8");
    session_start();
    $a=array();
    $_SESSION['list']=$a;
    $arr=$_SESSION['list'];
    if(sizeof($arr)==0){
        echo "购物车清空成功！等待5秒后自动返回！";
        echo "<script>
        
        setTimeout(function(){
            window.location.href = 'http://localhost:8080/phpDemo/page/gwc.php';
        },1000);
        </script>";
    }
    else {
        echo "<script>alert('购物车清空失败！');window.location.href = 'http://localhost:8080/phpDemo/page/gwc.php';</script>";
    }
?>