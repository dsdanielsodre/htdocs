<?php
ob_start();
session_start();
    if(!isset($_SESSION['usuariocsa']) && (!isset($_SESSION['usuariocsa']))){
        header("Location: index.php?acao=negada"); exit;
    }
    include("includes/conexao.php");
    include("includes/head.php");
?>
    <body>

        <?php include("includes/navbar.php");?>
        <?php include("includes/action_usuario.php");?>

        <div class="container-seach">

            <img src="img/logo_etec.png" class="img-responsive center-block">

            <form action="listagem.php" method="get" class="col-md-6 col-xs-8 col-md-offset-3 col-xs-offset-2">

                <input type="search" class="form-control" id="search" name="search" placeholder="Informe o Nome/Matrícula" autofocus>

                <div class="form-actions btn-login input-group col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3" style="text-align: center">
                    <a href='listagem.php' class="btn btn-primary btn-login btn-lg">Listar Todos</a>
                </div>
    
            </form>

        </div>

    </body>

</html>