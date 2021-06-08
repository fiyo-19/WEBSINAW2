<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <script src="js.js"></script>
    <title>SINAW | LOGIN</title>
</head>
<body>
    <form class="form" action="doLogin.php" method="post">
            Email       : <input class="input" type="text " name="inputEmail"><br>
            Password    : <input class="input" type="password" name="inputPassword"><br>
            <button class="loginbutton" onclick="runPopup()" >Login</button>
    </form>

    <br/>
    <?php
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]); 
        }

    ?>

    <br/>

    <hr/>
    <p>Doesn't have an account yet? <a class="register" href="register.php">Sign Up</a></p>
</body>
</html>