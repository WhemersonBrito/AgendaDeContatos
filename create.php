<?php
  include_once("templates/header.php");
?>
   <div class="container">
     <?php include_once("templates/backbtn.html");?>
     <h1 id="main-title">Criar contato</h1>
     <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
       <input type="hidden" name="type" value="create">
       <div class="form-group">
         <label for="name">Nome do Contato:</label>
         <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome" required>
       </div>
       <div class="form-group">
         <label for="phone">Telefone do Contato:</label>
         <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o seu telefone" required>
       </div>
       <div class="form-group">
         <label for="observations">Observações:</label>
         <textarea class="form-control" name="observations" id="observations" rows="3" placeholder="Insira as observações"></textarea>
       </div>
       <button type="submit" class="btn btn-primary">Cadastrar</button>

     </form>
   </div>
<?php
  include_once("templates/footer.php");
?>
