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
        <?php if(count($contacts) > 0 ): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <!-- Colunas / col = especifica o cabeçalho da coluna -->
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">email</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>    
                </thead>
                <!-- Corpo da tabela -->
                <tbody>
                    <?php foreach($contacts as $contact): ?>
                        <tr>
                            <td scope="row" class="col-id"><?= $contact["id"] ?></td>
                            <td scope="row" ><?= $contact["name"] ?></td>
                            <td scope="row" ><?= $contact["age"] ?></td>
                            <td scope="row" ><?= $contact["address"] ?></td>
                            <td scope="row" ><?= $contact["phone"] ?></td>
                            <td scope="row" ><?= $contact["email"] ?></td>
                            <td class="actions">
                            <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                                <form class="delete-form" action="<?= $BASE_URL?>config/process.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $contact["id"]?>">
                                    <button type = "submit"><i class="fa-solid fa-circle-xmark" style="color: #ce2222;"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?> 
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">Nenhum contato encontrado, <a href="<?= $BASE_URL?>create.php">Clique aqui para adicionar um contato!</a></p>
        <?php endif;?>
    </div>
<?php
    include_once("templates/footer.php");
?>