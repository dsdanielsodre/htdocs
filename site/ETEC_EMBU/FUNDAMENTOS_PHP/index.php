<html>
    <head>
        <meta charset="utf-8">
        <title>TPI - 2 - FUNDAMENTOS DO PHP</title>
        
        <style>
            body{background-color: #ccc;    }
        </style>
        
        <script>
            function teste(){
                
                alert("Olá Mundo!");
            }
        
        </script>
        
    </head>
    
    <body>
        
        <h1>TPI - 2 - FUNDAMENTOS DO PHP</h1>
        
        <?php 
        // cOMENTARIO
        #OUTRO COMENTARIOA
        /*

        RT


        */
        //echo "Olá!";

        /*VARIAVEIS E OPERADORES MATEMATICOS:*/

        //DECLARANDO E ATRIBUINDO DADOS A VARIAVEIS
       
        $r = 0;
        $n1 = 100;
        $n2 = 150;
        $n3 = 200;
        $n4 = 200;

        /*
        operadores matematicos:
        + soma
        - subtração
        * mutiplicação
        / divisão
            */
        
        // EXEMPLO DE SOMA

            echo '<h2>SOMA PHP<br/>';
        $r = $n1 + $n2;
            echo 'SOMA: ' .  $r . '<br/>';
        //$r = $r + $n3;
            $r += $n3;
            echo 'SOMA: '  . $r .  '<br/>';

            //sOMA
            //subtração
               
                echo '<h2>SUBTRAÇÃO PHP<br/>';
            $r = $n1 - $n2;
            echo 'SUBTRACAO: ' .  $r . '<br/>';
        //$r = $r + $n3;
            $r -= $n3;
            echo 'SUBTRACAO: '  . $r .  '<br/>';
                //subtração
            
            echo '<h2>MULTIPLICAÇÃO PHP<br/>';
            $r = $n1 * $n2;
            echo 'MULTIPLICAÇÃO: ' .  $r . '<br/>';
        //$r = $r + $n3;
            $r *= $n3;
            echo 'MULTIPLICAÇÃO: '  . $r .  '<br/>';
            
              echo '<h2>DIVISÃO PHP<br/>';
            $r = $n1 / $n2;
            echo 'DIVISÃO: ' .  $r . '<br/>';
        //$r = $r + $n3;
            $r /= $n3;
            echo 'DIVISÃO: '  . $r .  '<br/>';
            /*FUNÇÕES PARA TRATAMENTO DE NUMEROS;*/
            /*FLOR - ARREDONDA PARA BAIXO;
              CEIL - ARREDONDA PARA CIMA;
              ROUND - ARREDONDO DE ACORDO COM O VALOR APOS O PONTO (0-4 PARA BAIXO) (5-9 PARA CIMA);
              NUMBER_FORMAT - PERMITE CONFIGURAR UMA APRESENTAÇÃO NUMERICA. */
              //EXEMPLO DE FLOR

              echo '<h2>Exemplo de função floor<br/>';
                $r = $n3 / $n2;
                echo floor($r);

                echo '<h2>Exemplo de função ceil<br/>';
                $r = $n3 / $n2;
                echo ceil($r);
                
                echo '<h2>Exemplo de função round para baixo<br/>';
                
                echo round(1.4);
                 echo '<h2>Exemplo de função round para cima<br/>';
                
                echo round(1.6);
                    /*EXEMPLO DE NUMBER_FORMAT*/
                                 $r = $n3 / $n2;
                                 echo '<h2>NUMBER_FORMAT COM DUAS CASA DECIMAIS</h2>';

                echo number_format($r, 2, ",", "");
                echo '<h2>NUMBER_FORMAT COMM MILHAR</h2>';
                echo number_format (1000.50, 2, ",", ".");  


        ?>


    </body>  
</html>