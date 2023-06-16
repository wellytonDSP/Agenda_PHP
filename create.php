<?php
    include_once("templates/header.php");
?>
<!-- Adicionar contatos -->
    <div class="container">
        <h1 class="main-title">ADICIONAR CONTATOS</h1>
            <form class="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" placeholder="Digite o seu nome" required>
                </div>
                <div class="form-group">    
                    <label>Idade</label>
                    <input type="text" name="age" placeholder="Digite sua idade" required>
                </div>
                <div class="form-group">    
                    <label>Endereço</label>
                    <input type="text" name="adress" placeholder="Digite o endereço" required>
                </div>    
                <div class="form-group">    
                    <label>Telefone</label>
                    <input type="phone" name="phone" placeholder="Digite o telefone" required>
                </div>    
                <div class="form-group">    
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Digite o email" required>
                </div>
                <button type="submit" name="create" class="btn btn-dark" >Adicionar</button>
            </form>
    </div>

<?php
    include_once("templates/footer.php"); 
?>