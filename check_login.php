<?php
    session_start();
    if ($_SESSION['username'] != null){
        header("location: index.php");
    }
    include 'core/conection.php';
    if(isset($_POST['login'])){
        if(isset($_POST['user']) && !empty($_POST['user']) &&
            isset($_POST['pass']) && !empty($_POST['pass'])){
            $username = $_POST['user'];
            $password = hash('sha256',$_POST['pass']);
            
          //  $sql = "SELECT username_sed, pass_sed FROM Sed_User WHERE username_sed = '$_POST[user]'";
            $sql = $mysqli->prepare("SELECT id_user,username_sed, pass_sed FROM Sed_User WHERE username_sed = ? AND pass_sed = ?") ;
            $sql->bind_param('ss',$username,$password);
            $sql->execute();
            //$ans = $sql->get_result();
            //$row = $ans->fetch_assoc();
            
            $sql->bind_result($id,$username,$password);
            $sql->store_result();
            if($sql->num_rows == 1){
                if($sql->fetch()){
                   // $ans = $sql->get_result();
                   // $row = $ans->fetch();
                    $_SESSION['username'] = $_POST['user']; 
                    $_SESSION['idC'] = $id;
                    header("location: index.php");
                }
            }else{
                //echo 'lel';
                echo "<script type='text/javascript'>alert('Please enter your information correctly');window.location.href='login.php';</script>";
                //header("location: login.php");
            }
        }else{
            header("location: login.php");
        }
    }

    
?>