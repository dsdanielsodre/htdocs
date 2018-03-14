<?php

require_once 'array.php';


?>


<!DOCTYPE html>
<html>

	

	<head>
		<title>EDM DREAMERS</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/responsivo_text.css">
	</head>
	
	<body>

		<div class="container">
			
			
			<div class="menu">
			<img src="">
			<?php

			foreach ($links as $key => $value) {
		
			
			?>


			 

			<a href="<?php echo $links[$key];?>"> <?php echo $titulos[$key]; ?> </a>
		
			

			
			<?php } ?>

			</div>

			<div class="coluna-esquerda">

			<p>Filtrar Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	Filtrar Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Filtrar Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Filtrar Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nul.</p>

			</div>
			<div class="conteudo">
			<div class="geraConteudo">

				<?php 

					foreach ($djs as $chave => $valor) {
				
				/*<h2><?php echo $gifs[$key]; ?></h2>-->*/

				?>

						<img src="<?php echo $valor; ?>">	


				<?php }	?>


					</div>

					</div>
				
		</div>

	</body>

</html>