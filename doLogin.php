<?php
session_start();
    if(isset($_POST["inputEmail"])){

        $email  = $_POST["inputEmail"];
        $pass = $_POST["inputPassword"];

        if($email==""){
            $_SESSION["message"] = "Email harus diisi";
            header("location:login.php");
            exit();
        }else if($pass==""){
            $_SESSION["message"] = "Password harus diisi";
            header("location:login.php");
            exit();
        }else{

            include("connect.php");
            $result = $connect ->query("SELECT * FROM user WHERE userEmail LIKE'".$email."' AND
            userPassword Like '".$pass."'");

            if($result->num_rows==1){

                setcookie("userID",$result->fetch_assoc()["userID"]);
                header("location:http://localhost/UAS3/index.html");
            exit();

            }else{
                $_SESSION["message"] = "Akun tidak ditemukan";
            header("location:login.php");
            exit();
            }
        }



    }else{
        header("location:/");
        exit();
    }
?>