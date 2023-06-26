<?php
    include_once("templates/header.php");
?>
<!-- Cria -->
<div class="container">
        <h1 id="main-title">ADICIONAR CONTATO</h1>
            <form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
                <div class="row mb-3">
                    <div class="form-group col">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Digite o seu nome" required>
                    </div>
                    <div class="form-group col">    
                        <label>Idade</label>
                        <input type="text" name="age" class="form-control" placeholder="Digite sua idade" required>
                    </div>
                </div>    
                <div class="row">
                    <div class="form-group col">
                        <label>Endereço</label>
                        <input type="text" name="address" class="form-control" placeholder="Digite o endereço" required>
                    </div>    
                    <div class="form-group col">    
                        <label>Telefone</label>
                        <input type="phone" name="phone" class="form-control" placeholder="Digite o telefone" required>
                    </div>    
                    <div class="form-group col mb-3">    
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Digite o email" required>
                    </div>
                </div>
                    <button type="submit" class="btn btn-dark" >Cadastrar</button>
            </form>
    </div>
<?php

    include_once("templates/footer.php");
?>