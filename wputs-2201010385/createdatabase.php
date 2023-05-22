<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);

    if($cnn){
       
        $sql = "CREATE DATABASE ". DBNAME;
        $hasil = mysqli_query($cnn, $sql );
        if($hasil){
            echo "Pembuatan Database " . DBNAME . " Suksess!";
        }
    }
        else{
        echo "Pembuatan Database Gagal";
        }