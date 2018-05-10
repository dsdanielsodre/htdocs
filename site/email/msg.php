<?php

$msg=0;
@$msg= $_REQUEST['msg'];
 ?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 	integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title>Contato</title>
    </head>
    <body>
      <?php if($msg==enviado){

      ?>
        <h1>Mensagem enviada, agradecemos seu contato!</h1>
      <?php }else{ ?>
    <fieldset>
		<h1>Formulário de Contato</h1>
		<form method="POST" action="processaForm.php">
			<label for="nome">Nome</label>
			<input id="nome" type="text" name="nome" placeholder="Nome completo" required><br><br>

			<label for="email">Email</label>
			<input id="email" type="email" name="email" placeholder="Seu email" required> <br><br>

			<label for="mensagem">Mensagem</label>
			<textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea><br><br>

			<input type="submit" value="Enviar"><br><br>
		</form>
    </fieldset>
  <?php } ?>
	</body>
</html>
