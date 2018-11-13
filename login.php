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
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        <form action="check_login.php" method="POST">
            <label for="text">User</label>
            <input type="text" name="user" id="user">
            <label for="pass">Pass</label>
            <input type="password" name="pass" id="pass">
            <button type="submit"name="login">Login</button>
        </form>
    </div>
</body>
</html>