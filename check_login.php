<?php
    session_start();

    include 'core/conection.php';
    if(isset($_POST['login'])){
        if(isset($_POST['user']) && !empty($_POST['user']) &&
            isset($_POST['pass']) && !empty($_POST['pass'])){
            $username = $_POST['user'];
            $password = hash('sha256',$_POST['pass']);
            
          //  $sql = "SELECT username_sed, pass_sed FROM Sed_User WHERE username_sed = '$_POST[user]'";
            $sql = $mysqli->prepare("SELECT username_sed, pass_sed FROM Sed_User WHERE username_sed = ? AND pass_sed = ?") ;
            $sql->bind_param('ss',$username,$password);
            $sql->execute();
            $sql->bind_result($username,$password);
            $sql->store_result();
            if($sql->num_rows == 1){
                if($sql->fetch()){
                    $_SESSION['username'] = $_POST['user'];
                    header("location: index.php");
                }
            }else{
                echo "<script type='text/javascript'>alert('Please enter your information correctly');</script>";
                header("location: login.php");
            }

           /* $result = mysqli_prepare($mysqli,$sql);
            $ok = mysqli_stmt_bind_param($result,"s",$_POST['user']);
            $ok = mysqli_stmt_execute($result);
            if($ok==false){
                echo "Error";

            }else{
                $pwd = hash('sha256',$_POST['pass']);
             if($pwd==$ok['pass_sed']){
                 $_SESSION['username'] = $_POST['user'];
                 header("location: index.php");
             }else{
                 echo 'nope';
             }
            }
            if ($sql->exceute(array($_POST['user']))){
                while($fila = $sql->fetch()){
                    
                }

            }
            $result =  mysqli_query($mysqli,$sql);
            $session = mysqli_fetch_array($result);
            $pwd = hash('sha256',$_POST['pass']);
             if($pwd==$session['pass_sed']){
                 $_SESSION['username'] = $_POST['user'];
                 header("location: index.php");
             }else{
                 echo 'nope';
             } */
        }
    }

    
?>