<?php 

require_once 'arrays.php';


/*

INCLUDE - INSERE UM ARQUIVO E QUANDO GERA UM ERRO, NÃO INTERROMPE O PROCESSAMENTO.
INCLUDE_ONCE - INSERE UMA VEZ.

REQUIRE  -INSERE UM ARQUIVO E QUANDO GERA UM ERRO, INTERROMPE O PROCESSAMENTO.
REQUIRE_ONCE - INSERE UMA VEZ.

*/

 ?>


<!DOCTYPE html>
<html lang="pt-BR">

	<head>

		<meta charset="utf-8">
		<title>Manipulando ARRAYS com PHP</title>
		<link rel="stylesheet"  href="normalize.css">
		<link rel="stylesheet"  href="estilo.css">

	</head>

	<body>

    <div class="container">

      <div class="topo"></div>

      <div class="coluna_container">

        <h1>TECNOLOGIAS FRONT-END</h1>

        <?php


        	foreach ($img as $chave => $valor) {
        	        	 


        ?>
				<div class="coluna">

					<img src="<?php echo $valor; ?>">
					<h2> <?php echo $titulos[$chave]; ?> </h2>
					<p><?php echo $textos[$chave]; ?></p>

					<br>
						<p class="link_noticias"><a href="<?php echo $links[$chave];?>">SAIBA MAIS</a></p>


						
				</div>
		
		<?php } ?>


        <div class="clear"></div>

      </div>

      <div class="clear"></div>

    </div>

	</body>

</html>
