<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>TRABALHANDO COM ARRAYS NO PHP</title>

    </head>

    <body>
        <a href="../index.html">Voltar</a><br/>
        
        <?php 
        
        /* TRABALHANDO COM ARRAYS NO PHP */
        
        /* DECLARAÇÃO DE ARRAY DE INDICE NUMERICO. 1º FORMA: */
        $arr = array('HTML 5', 'CSS 3', 'JAVASCRIPT', 'PHP 7');
        
        /* EXIBINDO A ESTRUTURA DE UM ARRAY*/
        echo '<pre>';
            print_r($arr);
        echo '</pre>';
        
        /* EXIBINDO DADOS SOMENTE DE UM ARRAY:*/
        echo $arr[0] . '<br/>';
        echo $arr[1] . '<br/>';
        echo $arr[2] . '<br/>';
        echo $arr[3] . '<br/>';
        
        /* ADICIONANDO UM VALOR NO ARRAY: */
        
        $arr[] = 'MYSQL';
        
        /* EXIBINDO A ESTRUTURA DE UM ARRAY*/
        echo '<pre>';
            print_r($arr);
        echo '</pre>';
        
        /* CRIANDO ARRAYS COM INDICE LITERAL:*/
        
        $marcao = array('nome'=>'Marcos Costa', 'profissao'=>'Professor', 'aulas'=>'Lógica de Programação', 'idade'=> 35);
        echo '<pre>';
            print_r($marcao);
        echo '</pre>';
        
        /* EXIBINDO DADOS DE UM ARRAY LITERAL */
        echo "NOME: " . $marcao['nome']. '<br/>';
        echo "PROFISSÃO: " . $marcao['profissao']. '<br/>';
        echo "AULAS: " . $marcao['aulas']. '<br/>';
        echo "IDADE: " . $marcao['idade']. '<br/>';
        
        ?>

    </body>

</html>
