<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "apetrecho";

global $pdo;
global $security_salt;


try{
    $security_salt = '123456786543245ynbvc23bj45k6jh4gf32hj4';

    $pdo = new PDO("mysql:host=".$localhost.";dbname=".$banco, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    $security_salt = '123456786543245ynbvc23bj45k6jh4gf32hj4';

    echo "Erro: ".$e->getMessage();
    exit;

}

?>