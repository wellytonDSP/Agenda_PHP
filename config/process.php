<?php

session_start();

include_once("connection.php");
include_once("url.php");


$info = $_POST;
//empty verifica se a um valor da variavel $info, caso haja ele retorna false por isso o sinal ! antes, com esse sinal ele faz ao contrario retorna true caso aja um valor!  


if(!empty($info)){
    if($info["type"] === "create"){
        $name = $info["name"]; 
        $age = $info["age"];
        $address = $info["address"];
        $phone = $info["phone"]; 
        $email = $info["email"];

        $query = "INSERT INTO contato (nome,idade,endereco,telefone,email) VALUES (:name,:age,:address,:phone,:email)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":age",$age);
        $stmt->bindParam(":address",$address);
        $stmt->bindParam(":phone",$phone);
        $stmt->bindParam(":email",$email);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
        }catch(Exception $e){
            $error = $e->getMessage();
            echo "ERRO: $error";
        }

        
    }else if ($info["type"] === "delete"){
        $id = $info["contato_id"];

        $query = "DELETE FROM contato WHERE contato_id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam (":id", $id);


        try{
            $stmt -> execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";
        }catch(Exception $e){
            $error = $e->getMessage();
            echo "ERRO: $erro"; 
        }
    }else if ($info["type"] === "edit"){
        
        $name = $info["name"]; 
        $age = $info["age"];
        $address = $info["address"];
        $phone = $info["phone"]; 
        $email = $info["email"];
        $id = $info["contato_id"];

        $query = "UPDATE contatcts SET name = :name, age = :age, address = :address, phone = :phone, email = :email where contato_id = :id_contato";

        $stmt = $conn->prepare($query);

        $stmt->bindParam (":name", $name);
        $stmt->bindParam (":age", $age);
        $stmt->bindParam (":address", $address);
        $stmt->bindParam (":phone", $phone);
        $stmt->bindParam (":email", $email);
        $stmt->bindParam (":id_contato", $id);

        try{
            $stmt -> execute();
            $_SESSION["msg"] = "Contato editado com sucesso!";
        }catch(Exception $e){
            $error = $e->getMessage();
            echo "ERRO: $erro"; 
        }
    }
    header("Location:" . $BASE_URL . "../index.php");
}else{

    $id;

    if(!empty($_GET)) {
        
        $id = $_GET["id"];
        print_r($id);
      }

    // Retorna dado de um post específico
    if(!empty($id)) { 

        $query = "SELECT * FROM contato WHERE contato_id = :id";

        $stmt = $conn->prepare($query);
        
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();

    // Retorna todos os contatos
    } else {

        $query = "SELECT * FROM contato";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
}