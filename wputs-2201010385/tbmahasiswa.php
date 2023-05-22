<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel= "tbmahasiswa";
        $sql = "CREATE TABLE $tbel(
            id INT  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(35), 
            nim VARCHAR(10),
            prodi VARCHAR(25),
            email VARCHAR(50)
        )";
        $hasil = mysqli_query($cnn, $sql);
        if($hasil){
            echo "Pembuatan Tabel " . $tbel . " Suksess!";
        }
    }
        else{
        echo "Pembuatan Tabel " . $tbel . " Gagal";
        }