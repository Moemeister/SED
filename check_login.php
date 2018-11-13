<?php
    session_start();

    include 'core/conection.php';
    if(isset($_POST['login'])){
        if(isset($_POST['user']) && !empty($_POST['user']) &&
            isset($_POST['pass']) && !empty($_POST['pass'])){
                
            $sql = "SELECT username_sed, pass_sed FROM Sed_User WHERE username_sed = '$_POST[user]'";
            $result =  mysqli_query($mysqli,$sql);
            $session = mysqli_fetch_array($result);
            $pwd = hash('sha256',$_POST['pass']);
             if($pwd==$session['pass_sed']){
                 $_SESSION['username'] = $_POST['user'];
                 header("location: index.php");
             }else{
                 echo 'nope';
             }
        } 
    }

    
?>