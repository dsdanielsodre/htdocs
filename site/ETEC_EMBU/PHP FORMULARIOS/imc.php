
<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilo.css">
        <title>CÁLCULO DE IMC</title>

    </head>

    <body>


        <div class="container sombra">

            <div class="topo"></div>

            <div class="menu">

              <a href="imc.html">IMC</a>
              <a href="media.html">MÉDIA</a>
              <a href="tabuada.html">TABUADA</a>
              <a href="triangulo.html">TRIÂNGULO</a>

            </div>

            <div class="content_titulo">CÁLCULO DE IMC</div>

            <div class="content">

                <form action="processaIMC.php" method="POST">

                    <label>Altura: </label>
                    <input type="text" name="txt_altura">

                    <label>Peso: </label>
                    <input type="text" name="txt_peso">

                    <input type="submit" value="CALCULAR">

                </form>

            </div>

        </div>


    </body>

</html>
