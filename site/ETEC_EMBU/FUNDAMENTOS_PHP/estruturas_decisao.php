<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>ESTRUTURAS DE DECISÃO</title>

    </head>

    <body>
        <a href="../index.html">Voltar</a><br/>

        <?php 
        
        /*
            ESTRUTURA DE DECISÃO:
            1 - SIMPLES - TRATA APENAS TESTES LÓGICOS VERDADEIROS;
            2 - COMPOSTA - TRATA TESTES LÓGICOS VERDADEIROS OU FALSOS;
            3 - IF...ELSEIF...ELSE - PERMITE MULTIPLOS TESTES LÓGICOS;
        */
        
        $n1 = 10;
        $n2 = 15;
        
        /*ESTRUTURA DE DECISÃO SIMPLES*/
        
        if ($n1 != $n2) {
            echo "Os valores de n1 e n2 são diferentes. <br/>";
        }
        
        /*ESTRUTURA DE DECISÃO COMPOSTA*/
        
        if ($n1 == $n2) {
            echo "Os valores de n1 e n2 são iguais. <br/>";
        }else{
            echo "Os valores de n1 e n2 não são iguais. <br/>";
        }
        
         /*ESTRUTURA DE DECISÃO IF...ELSEIF...ELSE*/
        
        if ($n1 < 10) {
            
            echo "Os valores de n1 é menor que 10. <br/>";
            
        }else if($n1 > 10){
            
            echo "Os valores de n1 é maior que 10. <br/>";
            
        }else{
            
            echo "O valor de n1 é igual a 10.<br/>";
            
        }
        
        /*SINTAXE ALTERNATIVA*/
        
        if($n1 === 10):
            echo "N1 é igual a 10.<br/>";
        endif;
        
        if($n1 > $n2):
            echo "N1 é maior que N2.<br/>";
        else:
            echo "N1 é menor que N2.<br/>";
        endif;
        
        if($n1 < 10):
        
            echo "N1 é menor que N2.<br/>";
        
        elseif($n1 > 10):
        
            echo "N1 é maior que N2.<br/>";
        
        else:
        
            echo "N1 é igual a 10.<br/>";    
        
        endif;
        
        ?>

    </body>

</html>
