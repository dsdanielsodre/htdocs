<nav class="navbar navbar-default navbar-fixed-top";>
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php"><img src="img/logo_etec.png" alt="LOGO ETEC"></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</span></a></li>
                
                <li><a href="cadastro.php">Cadastro</span></a></li>

                <li><a href="relatorio.php">Relatórios</span></a></li>

                <li><a href="liberacao.php">Liberação</span></a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Usuário <span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
                <li><a href="?sair" onClick="return confirm('Deseja realmente sair do sistema?')">Sair <span class="glyphicon glyphicon-share-alt"></span></a></li>
                <?php include("includes/logout.php"); ?>
            </ul>
        </div>
    </div>
</nav>