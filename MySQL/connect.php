<?php
    $link = mysqli_connect('localhost','zyb','iQRKbeYzUOOcAawi');
    if($link){
        echo 'success';
    }else{
        echo 'faile';
    }
    mysqli_set_charset($link,'utf8');
    mysqli_select_db($link,'zyb');
    $sql = 'select * from friends';
    $res = mysqli_query($link,$sql);
    var_dump($res);
    $result1 = mysqli_fetch_assoc($res);
    var_dump($result1);
    $result2 = mysqli_fetch_assoc($res);
    var_dump($result2);
    mysqli_close($link);