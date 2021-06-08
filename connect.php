<?php
    $_host   = "localhost";
    $_user   = "root";
    $_pass   = "";
    $_db     = "database_sinaw";

    $connect = new mysqli($_host,$_user,$_pass,$_db);

    if($connect){
        /*echo "sukses konek";*/
    }else{
        echo "Gagal konek";
        exit();
    }