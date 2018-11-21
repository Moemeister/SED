<!DOCTYPE html>
<?php
    include "core/conection.php"
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style_login.css" />
    <script src="js/validations.js"></script>
</head>
<body>
    <div class="login-box">
        <h1>Log In</h1>
        <form action="check_login.php" method="POST">
            <label for="user">Username</label>
            <input type="text" name="user" id="user" placeholder="Enter Username">
            <label for="pass">Pass</label>
            <input type="password" name="pass" id="pass" placeholder="Enter Password">
            <input type="submit"name="login" value="Log In" id="login" onclick="emptyFields()">
            <a href="register.php">Don't have An account?</a>
            
        </form>
    </div>
</body>
</html>