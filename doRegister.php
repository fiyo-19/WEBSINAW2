<?php
    session_start();

    if(isset($_POST["inputName"])){

        $name = $_POST["inputName"];
        $email = $_POST["inputEmail"];

        $pass1 = $_POST["inputPassword1"];
        $pass2 = $_POST["inputPassword2"];

        if($name==""){
            $_SESSION["message"] = "Nama harus diisi";
            header("location:register.php");
            exit();

        }else if($email==""){
            $_SESSION["message"] = "Email harus diisi";
            header("location:register.php");
            exit();

        }else if($pass1==""){
            $_SESSION["message"] = "Password harus diisi";
            header("location:register.php");
            exit();

        }else if($pass1!=$pass2){
            $_SESSION["message"] = "Password tidak sama";
            header("location:register.php");
            exit();

        }else{

            include("connect.php");

            $result = $connect -> query("SELECT * FROM user WHERE userEmail LIKE '".$email."'");
            if($result->num_rows==0){

                $connect->query("INSERT INTO user VALUES (null, '".$name."', '".$email."','".$pass1."')");

                header("location:http://localhost/UAS3/index.html");
                exit();

            }else{
                $_SESSION["message"] = "Email telah digunakan";
            header("location:register.php");
            exit();
            }
            
        }

        
    }else{
        header("location:http://localhost/UAS3/index.html");
        exit();
    }