<?php

    session_start();
    include_once("connection.php");
    include_once("url.php");

    $id;
    if(!empty($_GET)){
        $id = $_GET["id"];
    }

    //Retorna dado e um contato
    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();
    }else{
    //Retorna dado de todos os contatos
    $contacts = [];


    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);
    $stmt ->execute();
    $contacts = $stmt->fetchAll();
}