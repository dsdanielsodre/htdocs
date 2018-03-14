<?php

require_once 'array.php';


?>


<!DOCTYPE html>
<html>

	
	<head>
		<title>EDM DREAMERS</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/btn.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/responsivo_text.css">
	</head>
	
	<body>

		<div class="container">
			
			
			<div class="menu">
			<img class="logo" id="edm" src="../IMAGENS/edm_dreamers_logo.png">
			
			<?php

			foreach ($links as $key => $value) {		
			
			?>

			<a href="<?php echo $links[$key];?>" <!--class="btn btn-red"-- > <?php echo $titulos[$key]; ?>    </a>
		   
			
			<?php } ?>

			<img class="logo" id="brasil" src="../IMAGENS/bandeira_do_brasil.png">
			<a class="entrar">senha</a>
			<a class="entrar">login</a>	


			</div>
			<hr>
			<div class="coluna-esquerda">

			<p>Filtrar Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Dui	aute irure dolor in reprehenderit in voluptate velit esse
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
			
			<div class="conteudo" id="titulo">

			<H2><?php echo $titulos[0]; ?> </H2>

			<div class="conteudo" id="cont">
			


			<section>
				
			<nav>
				
				<ul>
					
				<li><a href="#img01"></li>
				<li><a href="#img02"></li>
				<li><a href="#img03"></li>
				
				</ul>
			</nav>

			

			<article id="img01">
			<figure>
			<img src="IMAGENS/party.jpg" alt=”paisagem 1″>
			</figure>
			</article>



			<article id="img02">
			<figure>
			<img src="<IMAGENS/tml.jpg>" alt=”paisagem 2″>
			</figure>
			</article>


			<article id="img03">
			<figure>
			<img src="IMAGENS/hardwell.jpg" alt=”paisagem 3″>
			</figure>
			</article>


			</section>

			<?php

			$x= 0;
			 

				while ($x!=28) {
				
			?>
				
				<h1><?php echo "olá, tudo bem?";?><h1>
				

			 <?php $x= $x+1; } ?>

		

					</div>

					</div>
				
		</div>

	</body>

</html>