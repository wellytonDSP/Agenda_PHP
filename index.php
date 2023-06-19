<?php

    include_once("templates/header.php");

?>
<!-- Inicio --> 
    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ''): ?>
        <div class="alert alert-success mt-3" role="alert">    
            <?=$printMsg ?>
        </div>
        <?php endif; ?>
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
                <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td scope="row" class="col-id"><?= $contact["contato_id"] ?></td>
                        <td scope="row" ><?= $contact["nome"] ?></td>
                        <td scope="row" ><?= $contact["idade"] ?></td>
                        <td scope="row" ><?= $contact["endereco"] ?></td>
                        <td scope="row" ><?= $contact["telefone"] ?></td>
                        <td scope="row" ><?= $contact["email"] ?></td>
                        <td class="actions">
                            <a href="<?= $BASE_URL?>edit.php?contato_id<?=$contact["contato_id"]?>" ><i class="fas fa-edit edit-icon"></i></a>
                            <a href="<?= $BASE_URL?>config/process.php?contato_id<?=$contact["contato_id"]?>" value = "delete"><i class="fa-solid fa-circle-xmark" style="color: #ce2222;"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
    </div>



<?php
    include_once("templates/footer.php");
?>