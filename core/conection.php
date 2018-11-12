<?php
    $link =  'mysql:host=localhost;dbname=Shop';
    $user = 'root';
    $pass = '';
    try{
        $pdo = new PDO($link,$user,$link);
        echo 'conectado';
    }catch(PDOException $e){
        print "Error";
        die();
    }
?>