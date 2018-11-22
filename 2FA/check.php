<?php
session_start();
if ($_SESSION['config'] == null){
    header("location: ../index.php");
}
include '../core/conection.php';
require "authenticator.php";
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("location: settings.php");
    die();
}
$Authenticator = new Authenticator();




$checkResult = $Authenticator->verifyCode($_SESSION['auth_secret'], $_POST['code'], 2);    // 2 = 2*30sec clock tolerance

if (!$checkResult) {
    $_SESSION['failed'] = true;
    header("location: settings.php");
    die();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentication Successful</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>

        body,html {
            height: 100%;
        }


        .bg {
            background-image: url("img/wallpaper_login.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;

            background-size: cover;
        }
    </style>
</head>
<body  class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3"  style="background: white; padding: 20px; box-shadow: 10px 10px 5px #888888; margin-top: 100px;">
                <hr>
                    <div style="text-align: center;">
                           <h1>Your Information has been modified</h1>
                    </div>
                <hr>
                <?php

                    $stmt = $mysqli->prepare("UPDATE Sed_User SET name_sed = ?, username_sed = ?, pass_sed = ? WHERE id_user = ?");
                    $stmt->bind_param('sssi',$_SESSION['nombre'],$_SESSION['nick'],$_SESSION['pass'],$_SESSION['idUser']);
                    $stmt->execute();
                    $stmt->close();
                    echo "<script type='text/javascript'>alert('Your information has been modified');window.location.href='../index.php';</script>";
                    $_SESSION['username'] = $_SESSION['nick'];
                ?>

            </div>
        </div>
    </div>
</body>
</html>
