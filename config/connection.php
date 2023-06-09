<?php
    //Info do banco
    $host = "localhost";
    $dbname = "agenda";
    $user = "root";
    $password = "";

    try{
        //Conexão PDO com o banco
        $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
        //Ativando o modo de erros
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOexception $e){
        //caso tenha erro de conexão imprimi um erro na tela! 
        $erro = $e->getMessage();
        echo "Erro:  $erro";
    }


?>