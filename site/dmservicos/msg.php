<?php

//$msg=0;
//@$msg= $_REQUEST['msg'];
 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
   <?php
      include 'links.php';
      include 'metas.php';
      include 'scripts.php';
      ?>
   <!-- MAPS -->
   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQAx6CLr0p1zQFDhB-5lHxn_8X49pkAxE&callback=initMap"></script>

   <!-- MAPS -->
   <title>Grupo DM Serviços</title>
</head>
    <body>

      <?php
         include "menu.php";

         ?>


         <main role="main">
           <!--MARKETING-->
            <div class="container marketing">
              <div class="row">
              <!--CONTEUDO SECUNDARIO -->
               <div class="conteudo-secundario">

                 <div class="col-lg-12">






  <?php if($msg==enviado){

  ?>
        <h1>Mensagem enviada, agradecemos seu contato!</h1>

  <?php }else{ ?>

        <fieldset>

        <h2 class="featurette-heading golden">Fale Conosco<span class="text-muted"></h2>
    		<form name="contato" method="POST" action="processaForm.php">

          <div class="form-group">
    			<label for="nome">Nome</label>
    			<input id="FormControlName" type="text" name="nome" class="form-control" placeholder="Nome completo" required>
          </div>

          <div class="form-group">
    			<label for="email">Email</label>
    			<input id="email" type="email" name="email" class="form-control" placeholder="Seu email" required>
          </div>

          <div class="form-group">
    			<label for="assunto">Assunto</label>
    			<input id="assunto" type="text" name="assunto" class="form-control" placeholder="Assunto" required>
          </div>

          <div class="form-group">
    			<label for="mensagem">Mensagem</label>
    			<textarea id="mensagem" name="mensagem" class="form-control" rows="4" cols="50" required></textarea>
          </div>

    			<input type="submit" value="Enviar" class="btn btn-success" style=" float: right; "><br><br>
    		</form>
        </fieldset>
  <?php } ?>



</div>
 </div>
 </div>
    </div>
 <?php
    include "footer2.php";
    ?>
    </main>
	</body>
</html>
