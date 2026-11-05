<?php

    $str = "mysql:host=localhost;dbname=locadora;charset=utf8mb4";
    $user = "root";
    $pwd = "";

    try{
        $con = new PDO($str, $user, $pwd);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("Não foi possível conectar ao banco!");
    }

    function h($v){
        return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
    }
