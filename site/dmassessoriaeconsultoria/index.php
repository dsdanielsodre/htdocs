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
      <title>DM Assessoria e Consultoria</title>
   </head>
   <body>
      <?php
         include "menu.php";

         ?>
      <main role="main">
         <div class="container marketing" id="marketing">
        <div class="row"  id="">
           <div class="col-md-12">
              <div id="myCarousel" class="carousel slide" data-ride="carousel"  style="text-align:center; margin-top:20px;">
                 <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                 </ol>
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                      <a href="brigada.php">
                       <img class="first-slide" src="img/slide1.png" alt="Treinamento">
                     </a>
                       <div class="container">
                          <div class="carousel-caption text-left"  id="down">
                             <h1></h1>
                             <p></p>
                             <p><a class="d-none d-md-inline d-lg-inline btn btn-lg btn-primary" href="brigada.php" role="button">Agende seu Treinamento</a></p>
                          </div>
                       </div>
                    </div>
                    <div class="carousel-item">
                      <a href="teste_hidrostatico_empatacao.php">
                      <img class="second-slide" src="img/slide2.png" alt="Second slide">
                       </a>
                       <div class="container">
                          <div class="carousel-caption">
                             <h1></h1>
                             <p></p>
                             <p><a class="d-none d-md-inline d-lg-inline btn btn-lg btn-primary" href="teste_hidrostatico_empatacao.php" role="button">Ler Mais</a></p>

                          </div>
                       </div>
                    </div>
                    <div class="carousel-item">
                        <a href="extintores.php">
                       <img class="third-slide" src="img/slide3.png" alt="Third slide">
                      </a>
                       <div class="container">
                          <div class="carousel-caption text-right">
                             <h3 class="d-none d-md-inline d-lg-inline">Venda e Recarga de extintores,

                             <p>mangueiras e equipamentos.</h3></p>
                             <p><a class="d-none d-md-inline d-lg-inline btn btn-lg btn-primary" style="margin:230px;" href="extintores.php" role="button">Saiba mais</a></p>
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
      </div>
         <div class="container marketing">


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

               <div class="espaco col-lg-3">

                  <img class="rounded-circle" src="img/shopping.png" alt="Generic placeholder image">
                  <h3>NOSSOS
                     <p> PRODUTOS</h3></p>
                  <!-- PRODUTOS -->
                  <p>


                  <div class="box">

                  Trabalhamos com uma vasta linha de produtos de prevenção e combate a incêndio: Extintores, Mangueiras,
                     Placas de Sinalização, Caixas de Hidrante, suporte para extintores e diversos tipos de acessórios.

                  </div>
                  </p>

                  <p><a class="btn btn-secondary" href="extintores.php" role="button">VER PRODUTOS &rsaquo;</a></p>

               </div>
               <!-- /.col-lg-4 -->
               <div class="espaco col-lg-3">
                  <img class="rounded-circle" src="img/config.png" alt="Generic placeholder image">
                  <h3>SERVIÇOS DE ENGENHARIA</h3>
                  <!-- MANUTENÇÕES -->
                  <p>
                    <div class="box">
                      A DM Assessoria e Consultoria juntamente com grupo Prevesp
                     trabalham em conjunto com engenheiros extremamente experientes.

                </div>
                  </p>
                  <p><a class="btn btn-secondary disabled" href="manutencoes.html" role="button">LEIA MAIS &rsaquo;</a></p>

               </div>
               <!-- /.col-lg-4 -->
               <div class="espaco col-lg-3">
                  <img class="rounded-circle" src="img/student.png" alt="Generic placeholder image">
                  <h3>CURSOS E TREINAMENTOS</h3>
                  <!-- nr23 -->
                  <p>
                    <div class="box">
                      Oferecemos assessoria e consultorias, treinamentos, capacitação e desenvolvimento técnico, dentre eles:
                     Curso de Primeiros Socorros, Brigada de Incêndio, Plano de Abandono, Treinamento de CIPA,
                     Treinamento no uso de EPI.
                       </div>

                  </p>
                  <p><a class="btn btn-secondary" href="brigada.php" role="button">SAIBA MAIS &rsaquo;</a></p>
               </div>
               <div class="espaco col-lg-3">
                  <img class="rounded-circle" src="img/fire.png" alt="Generic placeholder image">
                  <h3>RECARGA E MANUTENÇÃO</h3>
                  <!-- nr23 -->
                  <p>
                    <div class="box">
                    Recarga e Manutenção de Extintores Contra Incêndio. Extintores de incêndio não
                     devem ser encarados apenas como uma obrigatoriedade dos órgãos oficiais, mas sim
                     como um equipamento que preserva vidas e patrimônio.

                    </div>
                  </p>
                  <p><a class="btn btn-secondary" href="manutecao_extintores_incendio.php" role="button">LEIA MAIS &rsaquo;</a></p>
               </div>
               <!-- /.row -->
               <!-- START THE FEATURETTES -->
            </div>
            <hr class="featurette-divider">
            <div class="row">
               <div class="col-lg-6 col-sm-12 ">
                  <h3>ENTRE EM CONTATO</h3>
                  <!-- nr23 -->
                  <p>Temos uma equipe de profissionais preparados para melhor identificar sua necessidade, entre em contato e solicite uma visita. (11) 9.5793-8458.</p>
                  <img src="img/recarga.jpg" alt="Generic placeholder image" class="foto" >
               </div>

                <div class="col-lg-6 col-sm-6 ">

                  <h3>INFORMATIVOS</h3>

                  <!-- nr23 -->
                  <p>NR 23 Inspeção de extintores de incêndio.</p>
                  <br>
                  <div class="quadrado">
                    <h3>03</h3>

                    <h5 style="color:#fff;">JUL</h5>
                  </div>
                    <div class="calendario">
                      <a class="titulo" href="prevenção.html" role="button">PREVENEÇÃO DE INCÊNDIO</a><br>
                      Uma das principais providências que a Comissão Interna de...  </div>

                       <br><br><br> <br> <br>
                  <div class="quadrado">
                    <h3>03</h3>

                    <h5 style="color:#fff;">JUL</h5>
                  </div>
                  <div class="calendario">
                  <a class="titulo" href="contato.html" role="button">TIPOS DE EXTINTORES DE INCÊNDIO</a> <br>
                    Os extintores de incêndio são normalmente a melhor ferramenta...
            </div>

              </div>


            </div>
            <div class="col-lg-12" style="margin:0px; margin-bottom: 10px;">
               <div class="localizacao">
                  <hr class="featurette-divider">
                  <h2 class="featurette-heading">LOCALIZAÇÃO<span class="text-muted"></h2>
                  <div id="map"></div>
                  <a href="https://goo.gl/maps/eLF7vj7qzUE2" target="_blank">Bacio de Filicia, 341 - SAO PAULO - SP</a>
                   | CEP: 04914-060
               </div>

            </div>
         </div>
         <!--MARKETING-->
         <!-- /.container -->
         <!-- FOOTER -->
         <footer>
            <div class="row" id="caixa">
               <div class="rodape col-sm-12 col-lg-6">
                  <h2 class="featurette-heading golden">Contato<span class="text-muted"></h2>
                  </p>
                  <h5>
                  Para saber mais sobre a DM Assessoria e Consultoria, nossos produtos e serviços que
                  oferecemos, entre em contato conosco.
                  <h5>
                  </p>
                  <br>
                  <p>
                  <h5>Fone 1: <p>
                    (11) 9.5793-8458 (TIM)</h5></p>

                  <h5>Fone 2:<p>
                    (11) 9.4611-1673 (nextel)</h5></p>
                  <h5>ID: -</h5>
                  </p>
                  <p>
                  <h5>Email: </h5>
                  <h5 style="font-size:19px;">damiao@assessoriaeconsultoria.com.br </h5>

                  </p>

               </div>

               <div class="rodape col-sm-12 col-lg-6">
                  <h2 class="featurette-heading golden">Sobre Nós<span class="text-muted"></h2>
                  <p>
                  <h5> Na DM Assessoria e Consultoria, nos dedicamos em fornecer a nossos clientes um serviço cordial.
                     Nós valorizamos seu negócio. Tornamos nossa missão o fornecimento de produtos e
                     serviços confiáveis em nossa abordagem voltada ao cliente.
                  </h5>
                  </p>
                  <p>
                  <h5>Nossa equipe cortês e profissional dispõe de uma variedade de serviços
                     para atender suas necessidades.
                  </h5>
                  </p>
               </div>
               <p class="float-right"><a href="#"><img src="img/topo.png" style="width:50px; height: 50px; position:absolute; float: right; margin: auto; right:10px; top:10px"></a></p>
            </div>
            <div class="copy"> &copy; 2018 DM Assessoria e Consultoria. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></div>
         </footer>
      </main>
   </body>
</html>
