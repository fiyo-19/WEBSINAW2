<?php
    session_start();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registerstyle.css">
    <title>SINAW | Register</title>
</head>
<body>
    <form action="doRegister.php" method="post" class="form">
            <h3 class="title ">Sign Up "SINAW"</h3>
            Name            : <input class="input" type="text" name="inputName"><br>
            Email           : <input class="input" type="text" name="inputEmail"><br>
            Password        : <input class="input" type="password" name="inputPassword"><br>
            Retype Password : <input class="input" type="password" name="inputPassword2"><br>
            <button class="regis">Register</button>
    </form>
    <br>
    <br/>
    <?php
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]); 
        }

    ?>

    <br/>

    <hr/>
    <p>Already have an account? <a class="signin" href="login.php">Sign In</a></p>
</body>
</html>