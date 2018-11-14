<!DOCTYPE html>
<?php include 'core/conection.php'; ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style_register.css" />
    <script src="js/validations.js"></script>
</head>
<body>
<div class="register-box">
        <h1>Register</h1>
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <label for="user">Username</label>
            <input type="text" name="user" id="user" placeholder="Enter Username">
            <label for="pass">Pass</label>
            <input type="password" name="pass" id="pass" placeholder="Enter Password">
            <input type="submit"name="sign" value="Sign In" onclick="emptyFields()">
            
        </form>
        <?php
            if(isset($_POST['sign'])){
                $sql =  "SELECT * FROM Sed_User";
                $rec =  mysqli_query($mysqli,$sql);
                $verificar = 0;
                while($resultado =  mysqli_fetch_array($rec)){
                    if($resultado->username_sed == $_POST['user']){
                        $verificar = 1;
                    }
                }
                if($verificar == 0){
                    $nom = $_POST['name'];
                    $user = $_POST['user'];
                    $pass = hash('SHA256',$_POST['pass']);
                    $mysqli->query("INSERT INTO Sed_User (name_sed,username_sed,pass_sed,id_category_us) VALUES ('$nom','$user','$pass',2)");
                    mysqli_query($mysqli,$sql);
                    echo 'Te has registrado';

                }
            }
        ?>
    </div>
    
</body>
</html>