<!DOCTYPE html>
<?php
    session_start();
    include 'core/conection.php';
    if (!isset($_SESSION['username'])){
        echo "<script>alert('YOU DONT HAVE AUTHORIZATION');window.location.href='index.php'</script>";

    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style_settings.css" />
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/validations.js"></script>
    <title>Config page</title>
</head>
<body>
    <?php
        $sql = $mysqli->prepare("SELECT id_user, name_sed, username_sed, pass_sed FROM Sed_User WHERE id_user = ?") ;
        $sql->bind_param('i',$_SESSION['idC']);
        $sql->execute();
        $result = $sql->get_result();
        $row = $result->fetch_assoc();
        $_SESSION['idUser'] = $row['id_user'];
       

    ?>
    <div class="config-box"id ="config-box">
        <h1>Settings</h1>
        <form id="id-form"action="2FA/settings.php" method="post" onsubmit="return emptyFieldsReg2(event)">
            
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $row['name_sed'];?>">
            <label for="user">Username:</label>
            <input type="text" name="user" id="user" value="<?php echo $row['username_sed'];?>">
            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass" placeholder="Enter Password" onkeyup="check2()">
            <label for="pass">Confirm Password</label>
            <input type="password" name="pass2" id="pass2" placeholder="Confirm Password" onkeyup='check2();' >
            <span id='message'></span>

            <p>Your password has to contain:</p> 
            <ul>
                <li id="mayus">Mayusculas</li>
                <li id="number">Numeros</li>
                <li id="len">8 caracteres</li>
            </ul>
            <input type="submit" value="change" name="change">
        </form>
        <?php
             
        ?>
    </div>
</body>
</html>