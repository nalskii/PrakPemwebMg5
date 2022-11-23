<?php
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $dbName = "tgs5";
    $connection = mysqli_connect($host, $user, $password, $dbName);
    if(!$connection){
        die("Koneksi gagal : ".mysqli_connect_error());
    }
?>
