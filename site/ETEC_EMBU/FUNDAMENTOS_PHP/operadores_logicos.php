<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>OPERADORES LÓGICOS DO PHP</title>

    </head>

    <body>
        <a href="../index.html">Voltar</a><br/>

        <?php

        /*OPERADORES RELACIONAIS*/
        /*
            < MENOR;
            > MAIOR;
            <= MENOR OU IGUAL;
            >= MAIOR OU IGUAL;
            == IGUALDADE;
            === IDENTICIDADE;
            != DIFERENTE;
            !== DIFERENTE NÃO IDENTICO;
            ! NEGAÇÃO LOGICA.

        */

        $n1 = 10;
        $n2 = 15;

        echo'<h4>OPERADOR DE COMPRAÇÃO MENOR:</h4>';
        echo var_dump($n1 < $n2);

        echo'<h4>OPERADOR DE COMPRAÇÃO MAIOR:</h4>';
        echo var_dump($n1 > $n2);

        echo'<h4>OPERADOR DE COMPRAÇÃO MENOR IGUAL:</h4>';
        echo var_dump($n1 <= 10);

        echo'<h4>OPERADOR DE COMPRAÇÃO MAIOR IGUAL:</h4>';
        echo var_dump($n2 >= 13);

        echo'<h4>OPERADOR DE IGUALDADE:</h4>';
        echo var_dump($n1 == 10).'<br/>';
        echo var_dump($n1 == "10").'<br/>';

        echo'<h4>OPERADOR DE IDENTICIDADE:</h4>';
        echo var_dump($n1 === 10).'<br/>';
        echo var_dump($n1 === "10").'<br/>';

        echo'<h4>OPERADOR DE DIFERENÇA:</h4>';
        echo var_dump($n1 != $n2).'<br/>';
        echo var_dump($n1 != 10).'<br/>';
        echo var_dump($n1 != "10").'<br/>';

        echo'<h4>OPERADOR DE DIFERENÇA E DE IDENTICIDADE:</h4>';
        echo var_dump($n1 !== $n2).'<br/>';
        echo var_dump($n1 !== 10).'<br/>';
        echo var_dump($n1 !== "10").'<br/>';

        echo'<h4>OPERADOR DE NEGAÇÃO LÓGICA:</h4>';
        echo var_dump($n1 === 10).'<br/>';
        echo var_dump($n1 === "10").'<br/>';

        echo'<h4>OPERADOR DE NEGAÇÃO LÓGICA:</h4>';
        echo var_dump(!false).'<br/>';
        echo var_dump(!true).'<br/>';

        /*OPERADORES LÓGICOS*/
        /*
        && (AND) = RETORNA VERDADEIRO SE TODOS OS TESTES FOREM VERDADEIROS
        || (OR) = RETORNA VERDADEIRO SE UM OU MAIS TESTE LOGICOS RETORNAREM VERDADEIROS
        */

        $teste_logico1 = ($n1 === 10) && ($n2 == 15);
        $teste_logico2 = ($n1 === "10") && ($n2 == 15);

        echo '<h4>OPERADOR LÓGICO AND</h4>';
        var_dump($teste_logico1) . '<br/>';
        var_dump($teste_logico2) . '<br/>';

        $teste_logico1 = ($n1 === 10) || ($n2 == 15);
        $teste_logico2 = ($n1 === "10") || ($n2 == 15);

        echo '<h4>OPERADOR LÓGICO OR</h4>';
        var_dump($teste_logico1) . '<br/>';
        var_dump($teste_logico2) . '<br/>';


        echo '<h4>OPERADOR LÓGICO AND OR</h4>';
        $teste_logico3 =(($n1 === "10") || ($n2 == 15)) && ($n1 === "10");
        var_dump($teste_logico3).'<br/>';
        ?>

    </body>

</html>
