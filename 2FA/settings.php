<?php
    session_start();
    require "authenticator.php";

    $Authenticator = new Authenticator();
if (!isset($_SESSION['auth_secret'])) {
    $secret = $Authenticator->generateRandomSecret();
    $_SESSION['auth_secret'] = $secret;
}


$qrCodeUrl = $Authenticator->getQR('tengoSed MEGS', $_SESSION['auth_secret']);


if (!isset($_SESSION['failed'])) {
    $_SESSION['failed'] = false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tengo SED</title>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body,html {
            height: 100%;
        }


        .bg {
            background-image: url("../img/wallpaper_login.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;

            background-size: cover;
        }
    </style>
</head>
<body  class="bg">
            <?php
            if(isset($_POST['change'])){
                if(isset($_POST['user']) && !empty($_POST['user']) &&
                    isset($_POST['pass']) && !empty($_POST['pass']) &&
                    isset($_POST['name']) && !empty($_POST['name']) &&
                    isset($_POST['pass2']) && !empty($_POST['pass2'])) {
                        $_SESSION['nombre'] = $_POST['name'];
                        $_SESSION['nick'] = $_POST['user'];
                        $_SESSION['pass'] = hash('SHA256',$_POST['pass']);
                }else{
                    header("location: ../config.php");
                }   
            }
            ?>
             
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3"  style="background: white; padding: 20px; box-shadow: 10px 10px 5px #888888; margin-top: 70px;">
                <h1>Identificate</h1>
                <p style="font-style: italic;">Ingresa el codigo generado por tu app de seguridad de Google **SIN ESPACIOS**</p>
                <hr>
                <form action="check.php" method="post">
                    <div style="text-align: center;">
                        <?php if ($_SESSION['failed']): ?>
                            <div class="alert alert-danger" role="alert">
                                        <strong>Oh crap!</strong> Invalid Code.
                            </div>
                            <?php
                                $_SESSION['failed'] = false;
                            ?>
                        <?php endif ?>

                            <img style="text-align: center;;" class="img-fluid" src="<?php   echo $qrCodeUrl ?>" alt="Verify this Google Authenticator"><br><br>
                            <input type="text" class="form-control" name="code" placeholder="******" style="font-size: xx-large;width: 200px;border-radius: 0px;text-align: center;display: inline;color: #0275d8;"><br> <br>
                            <button type="submit" class="btn btn-md btn-primary" style="width: 200px;border-radius: 0px;">Verify</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>