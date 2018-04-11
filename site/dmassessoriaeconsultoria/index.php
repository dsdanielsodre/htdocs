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
         <div class="container marketing">
            <div class="row"  id="">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel"  style="text-align:center">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide" src="img/slide1.png" alt="Treinamento">
                           <div class="container">
                              <div class="carousel-caption text-left"  id="down">
                                 <h1></h1>
                                 <p></p>
                                 <p><a class="btn btn-lg btn-primary" href="contato.html" role="button">Agende seu Treinamento</a></p>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide" src="img/slide2.png" alt="Second slide">
                           <div class="container">
                              <div class="carousel-caption">
                                 <h1></h1>
                                 <p></p>
                                 <p><a class="btn btn-lg btn-primary" href="#" role="button">Ler Mais</a></p>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="img/slide3.png" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption text-right">
                                 <h3>Venda e Recarga de extintores,

                                 <p>mangueiras e equipamentos.</h3></p>
                                 <p><a class="btn btn-lg btn-primary" href="#" role="button">Saiba mais</a></p>
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

                  <img class="rounded-circle" src="img/shopping.png" alt="Generic placeholder image">
                  <h3>NOSSOS
                     <p> PRODUTOS</h3></p>
                  <!-- PRODUTOS -->
                  <p>
                  <h6>Trabalhamos com uma vasta linha de produtos de prevenção e combate a incêndio: Extintores, Mangueiras,
                     Placas de Sinalização, Caixas de Hidrante, suporte para extintores e diversos tipos de acessórios.
                  </h6>
                  </p>
                  <p><a class="btn btn-secondary" href="extintores.php" role="button">VER PRODUTOS &raquo;</a></p>
               </div>
               <!-- /.col-lg-4 -->
               <div class="col-lg-3">
                  <img class="rounded-circle" src="img/config.png" alt="Generic placeholder image">
                  <h3>SERVIÇOS DE ENGENHARIA</h3>
                  <!-- MANUTENÇÕES -->
                  <p>
                  <h6>A DM Assessoria e Consultoria juntamente com grupo Prevesp
                     trabalham em conjunto com engenheiros extremamente experientes.
                  </h6>
                  </p>
                  <p><a class="btn btn-secondary disabled" href="manutencoes.html" role="button">LEIA MAIS &raquo;</a></p>
               </div>
               <!-- /.col-lg-4 -->
               <div class="col-lg-3">
                  <img class="rounded-circle" src="img/student.png" alt="Generic placeholder image">
                  <h3>CURSOS E TREINAMENTOS</h3>
                  <!-- nr23 -->
                  <p>
                  <h6>Oferecemos assessoria e consultorias, treinamentos, capacitação e desenvolvimento técnico, dentre eles:
                     Curso de Primeiros Socorros, Brigada de Incêndio, Plano de Abandono, Treinamento de CIPA,
                     Treinamento no uso de EPI.
                  </h6>
                  </p>
                  <p><a class="btn btn-secondary" href="brigada.php" role="button">SAIBA MAIS &raquo;</a></p>
               </div>
               <div class="col-lg-3">
                  <img class="rounded-circle" src="img/fire.png" alt="Generic placeholder image">
                  <h3>RECARGA E MANUTENÇÃO</h3>
                  <!-- nr23 -->
                  <p>
                  <h6>Recarga e Manutenção de Extintores Contra Incêndio. Extintores de incêndio não
                     devem ser encarados apenas como uma obrigatoriedade dos órgãos oficiais, mas sim
                     como um equipamento que preserva vidas e patrimônio.
                  </h6>
                  </p>
                  <p><a class="btn btn-secondary" href="manutecao_extintores_incendio.php" role="button">LEIA MAIS &raquo;</a></p>
               </div>
               <!-- /.row -->
               <!-- START THE FEATURETTES -->
            </div>
            <hr class="featurette-divider">
            <div class="row">
               <div class="col-lg-6 col-sm-12 ">
                  <h3>ENTRE EM CONTATO</h3>
                  <!-- nr23 -->
                  <p>Temos uma equipe de profissionais preparados para melhor identificar sua necessidade, entre em contato e solicite uma visita. (011) 957938458.</p>
                  <img src="img/recarga.jpg" alt="Generic placeholder image" class="foto" >
               </div>


               <div class="col-lg-6  col-sm-12 hidden-lg">



                   <hr class="featurette-divider ">


                  <h3>INFORMATIVOS</h3>

                  <!-- nr23 -->
                  <p>NR 23 Inspeção de extintores de incêndio.</p>
                  <div class="quadrado">
                    03
                    <br>
                    JUL
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

               </div>
            </div>
            <div class="col-lg-12" style="margin:0px;">
               <div class="localizacao">
                  <hr class="featurette-divider">
                  <h2 class="featurette-heading">LOCALIZAÇÃO<span class="text-muted"></h2>
                  <div id="map"></div>
                  Bacio de Filicia, 341 - SAO PAULO - SP | CEP: 04914-060
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
                  Para saber mais sobre a DM Assessoria e Consultoria, nossos produtos e serviços que
                  oferecemos, entre em contato conosco.
                  <h5>
                  </p>
                  <br>
                  <p>
                  <h5>Fone 1: <p>
                     +55 (011) 9.5793-8458 (TIM)</h5></p>

                  <h5>Fone 2:<p>
                    +55 (011) 9.4611-1673 (nextel)</h5></p>
                  <h5>ID: -</h5>
                  </p>
                  <p>
                  <h5>Email: damiao@assessoriaeconsultoria.com.br </h5>

                  </p>

               </div>

               <div class="rodape col-sm-12 col-lg-5">
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
