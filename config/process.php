<?php

session_start();

include_once("connection.php");
include_once("url.php");


$info = $_POST;
//empty verifica se a um valor da variavel $info, caso haja ele retorna false por isso o sinal ! antes, com esse sinal ele faz ao contrario retorna true caso aja um valor!  


if(!empty($info)){
    //cria contato
    if($info["type"] === "create"){
        $name = $info["name"]; 
        $age = $info["age"];
        $address = $info["address"];
        $phone = $info["phone"]; 
        $email = $info["email"];

        $query = "INSERT INTO contact (name,age,address,phone,email) VALUES (:name,:age,:address,:phone,:email)";

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

    //Deleta contato
    }else if ($info["type"] === "delete"){
        $id = $info["id"];

        $query = "DELETE FROM contact WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam (":id", $id);


        try{
            $stmt -> execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";
        }catch(Exception $e){
            $error = $e->getMessage();
            echo "ERRO: $erro"; 
        }
    //Edita contato
    }else if ($info["type"] === "edit"){
              
        $name = $info["name"]; 
        $age = $info["age"];
        $address = $info["address"];
        $phone = $info["phone"]; 
        $email = $info["email"];
        $id = $info["id"];

        $query = "UPDATE contact 
                  SET name = :name, age = :age, address = :address, phone = :phone, email = :email 
                  where id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam (":name", $name);
        $stmt->bindParam (":age", $age);
        $stmt->bindParam (":address", $address);
        $stmt->bindParam (":phone", $phone);
        $stmt->bindParam (":email", $email);
        $stmt->bindParam (":id", $id);

        try{
            $stmt -> execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";
        }catch(Exception $e){
            $error = $e->getMessage();
            echo "ERRO: $erro";
        }
    }
    //direciona para a pagina inicial
    header("Location:" . $BASE_URL . "../index.php");
}else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Retorna o dado de um contato
    if(!empty($id)) {

      $query = "SELECT * FROM contact WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $contact = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $contacts = [];

      $query = "SELECT * FROM contact";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $contacts = $stmt->fetchAll();

    }

  }

$conn = null;