<?php
    //mysql://bb802bfc420c63:d3598573@us-cdbr-iron-east-01.cleardb.net/heroku_72aece82671abd2?reconnect=true
    //$mysqli = new mysqli("localhost", "root", "", "Shop");
    $mysqli = new mysqli("us-cdbr-iron-east-01.cleardb.net", "bb802bfc420c63", "d3598573", "heroku_72aece82671abd2");
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
