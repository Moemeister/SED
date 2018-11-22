<!DOCTYPE html>
<?php include 'core/conection.php'; ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style_register.css" />
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/validations.js"></script>

</head>
<body>
<div class="register-box" id= "register-box">
        <h1>Register</h1>
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <label for="user">Username</label>
            <input type="text" name="user" id="user" placeholder="Enter Username">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Enter Password" onkeyup="check()">
            <label for="pass">Confirm Password</label>
            <input type="password" name="pass2" id="pass2" placeholder="Confirm Password" onkeyup='check();' >
            <span id='message'></span>
            <p>Your password has to contain:</p> 
            
            <ul>
                <li id="mayus">Mayusculas</li>
                <li id="number">Numeros</li>
                <li id="len">8 caracteres</li>
            </ul>
            <input type="submit"name="sign" value="Sign In" onclick="emptyFieldsReg()">
            <a href="login.php">Do you already have an account?</a>
            
        </form>
        <?php
            if(isset($_POST['sign'])){
                if(isset($_POST['user']) && !empty($_POST['user']) &&
                isset($_POST['pass']) && !empty($_POST['pass']) &&
                isset($_POST['name']) && !empty($_POST['name'])){   
                    $sql =  "SELECT * FROM Sed_User";
                    $rec =  mysqli_query($mysqli,$sql);
                    $verificar = 0;
                    while($resultado =  mysqli_fetch_object($rec)){
                        if($resultado->username_sed == $_POST['user']){
                            $verificar = 1;
                            
                        }
                    }
                    if($verificar == 0){
                        $pwd = $_POST['pass'];
                        $pwd2 = $_POST['pass2'];
                        if($pwd == $pwd2){
                            $nom = $_POST['name'];
                            $user = $_POST['user'];
                            $pass = hash('SHA256',$_POST['pass']);
                            $stmt = $mysqli->prepare("INSERT INTO Sed_User (name_sed,username_sed,pass_sed,id_category_us) VALUES (?,?,?,2)");
                            $stmt->bind_param('sss',$nom,$user,$pass);
                            $stmt->execute();
                            $stmt->close();
                            echo "<script type='text/javascript'>alert('Your account has been created');window.location.href='login.php';</script>";
                        }else{
                            echo "<script> alert('Passwords does not match')</script>";
                        }
                        
                    // header("location: login.php");
                    }else{
                        echo "<script type='text/javascript'>alert('This username is already taken');</script>";
                    }
                }else {
                    header("location: register.php");
                }
            }
        ?>
    </div>
    
</body>
</html>