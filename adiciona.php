<?php
include_once "php_action/db_connect.php";
include_once "includes/header.php";

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3>Clientes</h3>
       <form action="php_action/create.php" method="POST" class="row">
           <div class="input-field col s12 m6">
               <input type="text" name="nome" id="nome" required>
               <label for="nome">Nome</label>
           </div>

           <div class="input-field col s12 m6">
               <input type="text" name="sobrenome" id="sobrenome" required>
               <label for="sobrenome">Sobrenome</label>
           </div>

           <div class="input-field col s12">
               <input type="email" name="email" id="email" required>
               <label for="email">Email</label>
           </div>

           <div class="input-field col s12">
               <input type="number" name="idade" id="idade" min="10" required>
               <label for="idade">Idade</label>
           </div>
           <button type="submit" class="btn" name="btn-adicionar">Adicionar</button>
           <a href="index.php" class="btn green">Lista de Clientes</a>
       </form>
        
    </div>
</div>

<?php
include_once "includes/footer.php";
?>

      
      