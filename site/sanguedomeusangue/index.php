<!DOCTYPE html>
<html>
   <head>
      <?php
         include 'links.php';
         include 'metas.php';
         include 'scripts.php';
         ?>
      <!-- MAPS -->
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQAx6CLr0p1zQFDhB-5lHxn_8X49pkAxE&callback=initMap"></script>
      <!-- MAPS -->
      <title>Sangue do meu Sangue</title>
   </head>
   <body>
      <?php
         include "menu.php";

         ?>
      <main role="main">
         <div class="container marketing">
            <div class="row"  id="">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel"  style="text-align:center">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide" src="img/nos.png" alt="Treinamento">
                           <div class="container">
                               <div class="carousel-caption text-right">
                                 <h1></h1>
                                 <p></p>
                                 <p><a class="btn btn-lg btn-primary" href="contato.php" role="button">Sobre Nós</a></p>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide" src="img/doacao.png" alt="Second slide">
                           <div class="container">
                              <div class="carousel-caption text-right">
                                 <h1></h1>
                                 <p></p>
                                 <p><a class="btn btn-lg btn-primary" href="postos_doacao.php" role="button">Postos de Doação</a></p>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="img/parceiros.png" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption text-right">
                                 <h3>

                                 <p></h3></p>
                                 <p><a class="btn btn-lg btn-primary" href="pro_sangue.php" role="button">Instittuições Parceiras</a></p>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="img/medula.png" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption text-right">
                                 <h3></h3></p>
                                 <p><a class="btn btn-lg btn-primary" href="meduala_ossea.php" role="button">Doações de Medula Óssea</a></p>
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
               </div>
            </div>

            <!-- row-->
            <!-- Marketing messaging and featurettes
               ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->
            </br>
            <!-- Three columns of text below the carousel -->
            <div class="row">
              <div class="col-lg-12">
                   <hr class="featurette-divider">
              </div>

               <div class="col-lg-3">

                  <img class="rounded-circle" src="img/nos_black1.png" alt="Generic placeholder image"  style="padding: 2px;" >
                  <h3>QUEM
                     <p>SOMOS</h3></p>
                  <!-- PRODUTOS -->
                  <p>
                  <h6>A Sangue do meu Sangue incentiva milhares de pessoas a contribuirem com as doações de sangue
				  em hospitais que possuem baixo estoque, através de palestras motivacionais e informativas,
				  juntamente com o instituições parceiras.
                  </h6>
                  </p>
                  <p><a class="btn btn-secondary" href="missao.php" role="button">VEJA MAIS &raquo;</a></p>
               </div>
               <!-- /.col-lg-4 -->
               <div class="col-lg-3">
                  <img class="rounded-circle" src="img/doacao_black1.png" alt="Generic placeholder image"  style="padding: 2px;" >
                  <h3>POSTOS DE DOAÇÃO</h3>
                  <!-- MANUTENÇÕES -->
                  <p>
                  <h6>Saiba como doar sangue, locais para doar, cuidados que devemos ter ao doar sangue, grandes instituições parceiras e
				 como realizar doações em grupo.

                  </h6>
                  </p>
                  <p><a class="btn btn-secondary" href="postos_doacao.php" role="button">LEIA SOBRE &raquo;</a></p>
               </div>
               <!-- /.col-lg-4 -->
               <div class="col-lg-3">
                  <img class="rounded-circle" src="img/parceiros_black1.png" alt="Generic placeholder image" style="padding: 2px;" >
                  <h3>INSTITUIÇÕES</h3>
                  <!-- nr23 -->
                  <p>
                  <h6>A Sangue do meu Sangue trabalha em prol da conscientização das pessoas
				  sobre a doação de sangue, através da exemplificação de grandes instituições, como a Pro Sangue.
                  </h6>
                  </p>
                  <p><a class="btn btn-secondary" href="pro_sangue.html" role="button">SAIBA MAIS &raquo;</a></p>
               </div>
               <div class="col-lg-3">
                  <img class="rounded-circle" src="img/medula_black1.png" alt="Generic placeholder image"  style="padding: 2px;" >
				     <h3>DOAÇÕES DE MEDULA ÓSSEA</h3>
                  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation
                    </h3>
                  <!-- nr23 -->
                  <p>
                  <h6>
                  </h6>
                  </p>
                  <p><a class="btn btn-secondary" href="nr23.html" role="button">LEIA MAIS &raquo;</a></p>
               </div>
               <!-- /.row -->
               <!-- START THE FEATURETTES -->
            </div>
            <hr class="featurette-divider">
            <div class="row">
               <div class="col-lg-6 col-sm-12 ">
                  <h3>ENTRE EM CONTATO</h3>
                  <!-- nr23 -->
                  <p>Em caso de dúvidas,  entre em contato:</p>
				     <p>
                  <h6>Fone 1: <p>
                    (11) X.XXXX-XXXX(TIM)</h6></p>

                  </p>
                  <p>
                  <h6>Email: contato@sanguedomeusangue.com.br </h6>

                  </p>
                  <img src="img/coleta_sangue2.jpeg" alt="Generic placeholder image" class="foto" style="width:1500px; height:330px;">
               </div>


               <div class="col-lg-6  col-sm-12 ">
                   <!--<hr class="featurette-divider">-->
                  <h3>DATAS COMEMORATIVAS</h3>

                  <!-- nr23 -->
                  <p>Datas comemorativas de doação de sangue.</p>
				   <img class="" src="img/dia_doador.jpeg" style="width:1500px; height:350px;">
                  
				  <!--
				  <div class="quadrado">
                    14
                    <br>
                    JUN
                  </div>
                    <div class="calendario">
                  </div>

                  <div class="quadrado">
                    03
                    <br>
                    JUL
                  </div>
                  <div class="quadrado">
                    17
                    <br>
                    JUL
                  </div>
		-->
               </div>
            </div>

         </div>
         <!--MARKETING-->
         <!-- /.container -->
         <!-- FOOTER -->
         <footer>
            <div class="row" id="caixa">
               <div class="rodape col-sm-12 col-lg-5">
                  <h2 class="featurette-heading golden">Contato<span class="text-muted"></h2>
                  </p>
                  <h5>
                  Para saber mais sobre a Sangue do meu Sangue, e entre em contato conosco.
                  <h5>
                  </p>
                  <br>
                  <p>
                  <h5>Fone 1: <p>
                    (11) X.XXXX-XXXX(TIM)</h5></p>

                  <h5>Fone 2:<p>
                    (11) X.XXXX-XXXX (nextel)</h5></p>
                  <h5>ID: -</h5>
                  </p>
                  <p>
                  <h5>Email: contato@sanguedomeusangue.com.br </h5>

                  </p>

               </div>

               <div class="rodape col-sm-12 col-lg-5">
                  <h2 class="featurette-heading golden">Sobre Nós<span class="text-muted"></h2>
                  <p>
                  <h5> A Sangue do meu Sangue incentiva milhares de pessoas a contribuirem com as doações de sangue
				  em hospitais que possuem baixo estoque, através de palestras motivacionais e informativas,
				  juntamente com o instituições parceiras.
                  </h5>
                  </p>
                  <p>
                  <h5>
                  </h5>
                  </p>
               </div>
               <p class="float-right"><a href="#"><img src="img/topo.png" style="width:50px; height: 50px; position:absolute; float: right; margin: auto; right:10px; top:10px"></a></p>
            </div>
            <div class="copy"> &copy; 2018 Sangue do meu Sangue. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></div>
         </footer>
      </main>
   </body>
</html>
