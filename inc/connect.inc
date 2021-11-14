<?php 
    //biến $_SERVER lấy tên của server.(chính là localhost) 
    $server = $_SERVER['SERVER_NAME'];
    $user = "root";
    $pass = "";
    $db = "udn";
    //có thể thay $server thành 'localhost'
    $con = mysqli_connect($server,$user,$pass,$db);
    mysqli_query($con,"set names 'utf8'");
?>