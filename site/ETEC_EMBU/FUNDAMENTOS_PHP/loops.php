<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>LOOPS DE REPETIÇÃO - PHP</title>

    </head>

    <body>
        <a href="../index.html">Voltar</a><br/>
        
        <?php 
        
        /* LOOPS DE REPETIÇÃO NO PHP*/
        
        /* LOOP DE REPETIÇÃO WHILE:*/
        
        $cont = 0;/* VARIÁVEL DE CONTADOR*/
        
        echo '<h3>LOOP WHILE:</h3>';
        while($cont < 10) {
        
            echo 'Valor do contador: ' . $cont . '<br/>';
            
            //INCREMENTO
            //1º FORMA DE INCREMENTO
            //$cont = $cont +1;
            
            //2º FORMA DE INCREMENTO = RECOMENDADO PARA CONTAR ACIMA DE 1 EM 1
            //$cont += 1;
            
            //3º FORMA DE INCREMENTO = RECOMENDADO PARA CONTAR DE 1 EM 1
            $cont++;
                
        }
        
        /* LOOP DE REPETIÇÃO WHILE:*/
        
        echo '<h3>LOOP FOR:</h3>';
        for ($i=0; $i < 10; $i++) {
            echo 'O valor do contador: ' . $i . '<br/>';
        }
        
        ?>

    </body>

</html>
