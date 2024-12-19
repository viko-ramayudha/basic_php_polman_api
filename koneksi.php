<?php
    $host = "localhost";
    $db = "belajarphp";
    $user = "viko_ramayudha";
    $password = "poltek2023";

    $con = mysqli_connect($host, $user, $password, $db);

    //mengecek koneksi
    if(mysqli_connect_error()) {
        echo "Failed to connect MySQL : ", mysqli_connect_error();
    } else {
        // echo "Alkhamdulillah Koneksi berhasil";
    }
?>
