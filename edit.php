<?php
  include_once("templates/header.php");
?>
   <div class="container">
     <?php include_once("templates/backbtn.html");?>
     <h1 id="main-title">Editar contato</h1>
     <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
       <input type="hidden" name="type" value="edit">
       <input type="hidden" name="id" value="<?= $contacts["id"]?>">
       <div class="form-group">
         <label for="name">Nome do Contato:</label>
         <input type="text" class="form-control" id="name" name="name" value="<?= $contacts["name"]?>" required>
       </div>
       <div class="form-group">
         <label for="phone">Telefone do Contato:</label>
         <input type="text" class="form-control" id="phone" name="phone" value="<?= $contacts["phone"]?>" required>
       </div>
       <div class="form-group">
         <label for="observations">Observações:</label>
         <textarea class="form-control" name="observations" id="observations" rows="3"><?= $contacts["observations"]?></textarea>
       </div>
       <button type="submit" class="btn btn-primary">Atualizar</button>

     </form>
   </div>
<?php
  include_once("templates/footer.php");
?>
