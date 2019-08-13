<?php
 header("content-type:text/html;charset=utf-8");
    $bName=$_POST['bname'];
    $bId=$_POST['bid'];
    $bPrice=$_POST['bprice'];
    $bNum=$_POST['num'];
     
    session_start();
    // $arr=array();
    $arr=$_SESSION['list'];
    if(sizeof($arr)<=10){
      
            
             $str=array($bName,$bId,$bPrice,$bNum);
             $Num= count($arr,COUNT_NORMAL)+1;
             $arr[$Num]=$str;
             $_SESSION['list']=$arr;
             echo "1";
           
    }else{
        echo "0";
    }


?>