
<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilo.css">
        <title>PROCESSA DE IMC</title>

    </head>

    <body>


        <div class="container sombra">

            <div class="topo"></div>


            <?php require_once 'menu.php';?>


            <div class="content_titulo">CÁLCULO DE IMC</div>

            <div class="content">

           <?php  

           $altura = $_POST['txt_altura'];
           $peso = $_POST['txt_peso'];


/*           echo'<pre>'; 
           print_r($_POST);
           echo'</pre>';
*/


           // PROCESSAMENTO 



           $imc = $peso / ($altura * $altura)

           //SAIDA 
           echo 'Seu IMC é' .number_format(imc, 2 ',','');

            ?>

            </div>

        </div>


    </body>

</html>
