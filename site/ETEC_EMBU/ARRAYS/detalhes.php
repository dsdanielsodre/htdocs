
<?php  require_once 'arrays.php';


$codigo = $_GET["codigo"];


?>

<!doctype html>
<html lang="pt-BR">


<!--
echo '<pre>';
print_r($_GET);
echo '</pre>';
exit

-->

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

				<div class="coluna_detalhes">
					
					<img src="<?php echo $img[$codigo]?>">
					<h2> <?php echo $titulos[$codigo]?></h2>
					<p> <?php echo $textos[$codigo]?> </p>

				</div>

      </div>

      <div class="clear"></div>

    </div>

	</body>

</html>
