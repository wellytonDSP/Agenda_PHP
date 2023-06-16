<?php

include_once("connection.php");
include_once("url.php");


$info = $_POST;

//empty verifica se a um valor da variavel $info, caso haja ele retorna false por isso o sinal ! antes, com esse sinal ele faz ao contrario retorna true caso aja um valor!  
if(!empty($info)){
    if($info["type"] === "create"){
        $name = $info["name"]; 
        $age = $info["age"];
        $adress = $info["adress"];
        $phone = $info["phone"]; 
        $email = $info["email"];

        $query = "INSERT INTO contato (nome,idade,endereco,telefone,email) VALUES (:name,:age,:endereco,:telefone,:email)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":age",$age);
        $stmt->bindParam(":adress",$adress);
        $stmt->bindParam(":phone",$phone);
        $stmt->bindParam(":email",$email);
        
    }
}else{
    
    $id;

    if(!empty($_GET)){
        $id = $_GET["id"];
    }


    if(!empty($id)){
        $query = "SELECT * FROM contato WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id",$id);

        $stmt->execute();
        
        $contacts = $stmt->fetch();
    }else{
        $contacts = [];
    }

}