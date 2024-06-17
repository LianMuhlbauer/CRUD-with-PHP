<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "1234";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // Ativar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    $erro = $e->getMessage();
    echo "Erro: $erro";
}