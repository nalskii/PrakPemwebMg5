<?php
    include "koneksi.php";
    $prodi = $_GET["prodi"];
    $query = "SELECT $prodi FROM mahasiswa";
    $result = mysqli_query($connection, $query);
?>