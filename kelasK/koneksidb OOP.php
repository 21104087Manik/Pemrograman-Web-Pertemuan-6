<?php
include_once("konfigurasi.php");
//localhost : 127.0.0.1
//user : root
//pw :...


//metode OOP

    $cn = new mysqli(dbSERVER,dbUSER,dbPWD);

    if($cn->connect_error){
        die("Terjadi kesalahan");
    }

    echo "succes Connect";