<?php

include_once("config/url.php");
include_once("config/process.php");

?>

<!-- Cabeçalho -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css3 -->
    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
    <title>Agenda</title>
</head>
<body>
    <header>
        <!-- Barra de navegação -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark align-middle justify-content-center">
            <div class="navbar-nav">
                <a class="nav-link active" href="<?=$BASE_URL?>index.php" >Inicio</a>
                <a class="nav-link active" href="<?=$BASE_URL?>create.php" >Adicionar Contato</a>
                <a class="nav-link active" href="<?=$BASE_URL?>edit.php" >Gerenciar Contatos</a>
            </div>
        </nav>
    </header>
    

    
