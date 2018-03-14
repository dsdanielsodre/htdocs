<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TPI - 2 - FUNDAMENTOS DO PHP</title>
        
    </head>
    
    <body>
        <a href="../index.html">Voltar</a><br/>
        
        <h1>TPI - 2 - FUNDAMENTOS DO PHP</h1>
        
        <?php 
        
        //COMENTÁRIO DE LINHA.
        #OUTRO TIPO DE COMENTÁRIO DE LINHA.
        
        /*
        COMENTÁRIO DE BLOCO.
        */
        
        //echo "Olá!";
        
        /*VARIÁVEIS E OPERADORES MATEMÁTICOS.*/
        
        //DECLARANDO E ATRIBUINDO DADOS A VARIÁVEIS
        
        $r = 0;
        $n1 = 100;
        $n2 = 150;
        $n3 = 200;
        $n4 = 200;
        
        /* 
        OPERADORES MATEMÁTICOS
        + SOMA
        - SUBTRAÇÃO
        * MULTIPLICAÇÃO
        / DIVISÃO
        */
        
        echo '<h4>Exemplo de soma no PHP</h4>';
        $r = $n3 + $n2;
        echo 'SOMA: ' . $r .'<br/>';
        //$r = $r + $n3;
        $r += $n3;
        echo 'SOMA: ' . $r .'<br/>';

        echo '<h4>Exemplo de subtração no PHP</h4>';
        $r = $n3 - $n2;
        echo 'SUBTRAÇÃO: ' . $r .'<br/>';
        //$r = $r + $n3;
        $r -= $n3;
        echo 'SUBTRAÇÃO: ' . $r .'<br/>';
        
        echo '<h4>Exemplo de multiplicação no PHP</h4>';
        $r = $n3 * $n2;
        echo 'MULTIPLICAÇÃO: ' . $r .'<br/>';
        //$r = $r + $n3;
        $r *= $n3;
        echo 'MULTIPLICAÇÃO: ' . $r .'<br/>';
        
        echo '<h4>Exemplo de divisão no PHP</h4>';
        $r = $n3 / $n2;
        echo 'DIVISÃO: ' . $r .'<br/>';
        //$r = $r + $n3;
        $r /= $n3;
        echo 'DIVISÃO: ' . $r .'<br/>';
        
        //FUNÇÕES PARA TRATAMENTO DE NÚMEROS
        /*
            FLOOR - Arredonda um número para baixo;
            CEIL - Arredonda um número para cima;
            ROUND - Arredonda de acordo com um valor após o ponto (0-4 para baixo) (5-9 para cima);
            NUMBER_FORMAT - Permite configurar uma apresentação númerica;
        */
        
        /*EXEMPLO DE FLOOR*/
        echo '<h4>EXEMPLO DE FLOOR</h4>';
        $r = $n3 / $n2;
        echo floor($r);
        
         /*EXEMPLO DE CEIL*/
        echo '<h4>EXEMPLO DE CEIL</h4>';
        $r = $n3 / $n2;
        echo ceil($r);
        
        
         /*EXEMPLO DE ROUND*/
        echo '<h4>EXEMPLO DE ROUND PARA BAIXO</h4>';
        echo round(1.4);
    
        echo '<h4>EXEMPLO DE ROUND PARA BAIXO</h4>';
        echo round(1.6);
        
         /*EXEMPLO DE NUMBER_FORMAT*/
        $r = $n3 / $n2;
        echo '<h4>NUMBER_FORMAT COM 2 CASAS DECIMAIS</h4>';
        
        /*
            PARAMETROS DA FUNÇÕA NUMBER_FORMAT:
            1VALOR A SER FORMATADO;
            2NUMERO DE CASAS DECIMAIS;
            3SEPARADOR DE CASAS DECIMAIS . OU ,
            4SEPARADOR DE MILHAR
        */
        echo number_format($r, 2, ",", "");
        
        echo '<h4>NUMBER_FORMAT COM MILHAR</h4>';
        echo 'R$ ' . number_format(1000.50, 2, ",",".");
        
        ?>
        
        
    </body>  
</html>