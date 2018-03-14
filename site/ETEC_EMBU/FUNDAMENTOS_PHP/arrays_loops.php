<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>MANIPULANDO ARRAYS COM LOOPS NO PHP</title>

    </head>

    <body>
        <a href="../index.html">Voltar</a><br/>

      <!--
      funções string:
        strtoupper - maiusculo;
        strtolower - minusculo;
        ucfirst - primeira maiuscula;
      -->

        <?php

        $arr = array('HTML 5', 'CSS 3', 'JAVASCRIPT', 'PHP 7');

        /* MANIPULANDO O ARRAY COM O LOOP WHILE:*/

        $cont = 0;

        echo '<h3>MANIPULANDO O ARRAY COM WHILE</h3>';
        while ($cont < sizeof($arr)){

          echo $arr[$cont] . '<br/>';
          $cont++;

        }

        echo '<h3>MANIPULANDO O ARRAY COM FOR</h3>';
        for ($i=0; $i < sizeof($arr); $i++){

          echo $arr[$i] . '<br/>';

        }

        echo '<h3>MANIPULANDO O ARRAY COM FOREACH</h3>';
        foreach ($arr as $indice => $valor) {

          echo 'O numero do indice: ' . $indice . '<br/> ' . ' O valor do indice é: ' . $valor . '<br/><br/>';

        }

        $marcao = array('nome'=>'Marcos Costa', 'profissao'=>'Professor', 'aulas'=>'Lógica de Programação', 'idade'=> 35);

          echo '<h3>MANIPULANDO O ARRAY COM FOREACH (MARCÃO)</h3>';

          foreach ($marcao as $indice => $valor) {

            echo strtoupper($indice) . ': ' . $valor . '<br/>';

          }




        ?>

    </body>

</html>
