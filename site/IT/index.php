<?php

require_once 'array.php';


?>


<!DOCTYPE html>
<html>

	

	<head>
		<title>IT</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="responsivo_text.css">
	</head>
	
	<body>

		<div class="container">
			
			<div class="menu"> 

			<h3> home </h3>
			</div>

			

			<div class="coluna">

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>

			<div class="conteudo">

				<?php 

					foreach ($gifs as $key => $valor) {
				
				/*<h2><?php echo $gifs[$key]; ?></h2>-->*/

				?>

						<img src="<?php echo $valor; ?>">	


				<?php }	?>


						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				</div>
		</div>

	</body>

</html>