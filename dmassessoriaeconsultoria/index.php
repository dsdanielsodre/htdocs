<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>DM Assesoria e Consultoria</title>

  </head>

  <body>

      <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="red">
          <a class="navbar-brand" href="index.php">DM Assesoria e Consultoria</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="produtos.php">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="manutencoes.php">Manutenções</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nr23.php">NR23</a>
              </li>
            <!--  <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>-->
            </ul>
            <form class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="text" placeholder="" aria-label="Pesquisar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
          </div>
        </nav>
      </header>

      <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel"  style="text-align:center">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="img/extintores.png" alt="First slide">
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1>Manutenção.</h1>
                  <p>Agende sua manutenção de extintores hoje.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Agende aqui</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="img/rapel.jpg" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Another example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="img/teste.jpg" alt="Third slide">
              <div class="container">
                <div class="carousel-caption text-right">
                  <h1>One more for good measure.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
        </br>
          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <img class="rounded-circle" src="img/valvula2.jpg" alt="Generic placeholder image" width="140" height="140" style="background-color: red;">
              <h2>Produtos</h2> <!-- PRODUTOS -->
              <p>A troca de peças se faz necessária devido ao desgaste físico das mesmas. </p>
              <p><a class="btn btn-secondary" href="produtos.php" role="button">Detalhes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="rounded-circle" src="img/extintor2.png" alt="Generic placeholder image" width="140" height="140">
              <h2>Manutenções</h2>  <!-- MANUTENÇÕES -->
              <p>  DM Assessoria e Consultoria vêm com o objetivo de conscientizar a importância da prevenção no combate a incêndio, 
                pois muitas pessoas podem imaginar que o extintor é um equipamento ultrapassado. Porém, estatísticas mostram que
                cerca de 90% dos incêndios  se desenvolvem a partir de minúsculos focos.</p>
              <p><a class="btn btn-secondary" href="manutencoes.php" role="button">Detalhes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="rounded-circle" src="img/nr23.png" alt="Generic placeholder image" width="140" height="140">
              <h2>NR23</h2>  <!-- NR23 -->
              <p>NR 23 Inspeção de extintores de incêndio.</p>
              <p><a class="btn btn-secondary" href="nr23.php" role="button">Detalhes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->


          <!-- START THE FEATURETTES -->

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Nossos Produtos. <span class="text-muted">Peças e Acessórios para Extintores de Incendio.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla.
                Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna,
                vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                <p><a class="btn btn-green btn-buy" href="produtos.php" role="button">Comprar &raquo;</a></p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="img/valvula2.jpg" alt="Generic placeholder image">
            </div>


          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">Manutenções. <span class="text-muted">Extintores de Incêndio.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                <p><a class="btn btn-green btn-buy" href="manutencoes.php" role="button">Comprar &raquo;</a></p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="img/extintor.jpg" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">NR23. <span class="text-muted">Segurança.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                <p><a class="btn btn-green btn-buy" href="nr23.php" role="button">Comprar &raquo;</a></p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="img/nr23.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">

  <h2 class="featurette-heading">Fale Conosco. <span class="text-muted">Mande sua Mensagem.</span></h2>
          </br>
<form> <!--FORMS--->
  <div class="form-group"> <!-- NOME -->
    <label for="exampleFormControlInput1">Nome</label>
    <input type="nome" class="form-control" id="FormControlName" placeholder="Nome">
  </div>
  <div class="form-group"> <!--EMAIL -->
      <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="FormControlEmail" placeholder="name@example.com">
  </div>
  <div class="form-group"> <!-- TELEFONE -->
      <label for="exampleFormControlInput1">Telefone</label>
    <input type="phone" class="form-control" id="FormControlPhone" placeholder="(XX)XXXX-XXXX">
  </div>

  <div class="form-group"> <!-- SUA MENSAGEM -->
    <label for="exampleFormControlTextarea1">Sua Mensagem</label>
    <textarea class="form-control" id="FormControlTextarea" rows="3"></textarea>
  </div>

  <!-- <input type="button" name="botao-ok" value="Enviar">-->
  <p><a class="btn btn-green" href="#" role="button">Enviar &raquo;</a></p>

</form>



          <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

  </main>
  </body>
        <!-- FOOTER -->
        <footer>

          <div class="caixa">
              <h2 class="featurette-heading">Sobre Nós. <span class="text-muted"></h2>
            <p> Na Damiao Machado, nos dedicamos em fornecer a nossos clientes um serviço cordial. Nós valorizamos seu negócio. Tornamos nossa missão o fornecimento de produtos e serviços confiáveis em nossa abordagem voltada ao cliente.</p>

<p>Nossa equipe cortês e profissional dispõe de uma variedade de serviços para atender suas necessidades.</p>

<p>Para saber mais sobre a Damiao Machado e os produtos e serviços que oferecemos, ligue para 55-11-957938458. </p>

          </div>

          <div class="caixa">
              <h2 class="featurette-heading">Localização. <span class="text-muted"></h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
             velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

          </div>

          <div class="caixa">
            <h2 class="featurette-heading">Fale Conosco. <span class="text-muted"></h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

          </div>
          <p class="float-right"><a href="#">Voltar ao topo</a></p>
          <p>&copy; 2018 DM Assesoria e Consultoria, Inc. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
          <p><a href="#">Fale Conosco.</a></p>
          <p>Fone: 55-11-957938458. </p>
          <p>Email: usuario@email.com. </p>
        </footer>



</html>
