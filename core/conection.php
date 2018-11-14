<?php
    $mysqli = new mysqli("localhost", "root", "", "Shop");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    //echo $mysqli->host_info . "\n";
    /*$link =  'mysql:host=127.0.0.1;dbname=Shop';
    $user = 'root';
    $pass = '';
    try{
        $pdo = new PDO($link,$user,$pass);
        echo 'conectado';
    }catch(PDOException $e){
        echo $e->getMessage();
        die();
    }*/
?>