<?php

    include_once("templates/header.php");

?>
<!-- Inicio --> 
    <div class="container">
        <!-- tabela / table = Prepara um layout de tabela do boostrap -->
        <h1 id="main-title">CONTATOS</h1>
        <table class="table">
            <thead>
                <tr>
                    <!-- Colunas / col = especifica o cabeçalho da coluna -->
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">email</th>
                </tr>    
            </thead>
            <!-- Corpo da tabela -->
            <tbody>
                <?php foreach($contacts as $contact):?>
                    <tr>
                        <td scope="row" class="col-id"><?= $contact["id"] ?></td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
    </div>



<?php
    include_once("templates/footer.php");
?>