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
        <!--MARKETING-->
         <div class="container marketing">
           <!--CONTEUDO SECUNDARIO -->
            <div class="conteudo-secundario">
               <h2 class="featurette-heading golden">Extintores de Incêndio<span class="text-muted"></h2>
                  <h4>A DM Assessoria e Consultoria são especializadas em venda e manutenção de
                    diversos tipos de extintores; como extintores portáteis, sobre roda e estacionário.</h4>
                       <h3 style="text-align:center"><img src="img/extintores_tipos.jpg" alt="Tipos de Extintores de Incêndio">
                      <br>
                      <img src="img/extintores_incendio.jpg" alt="Extintores de Incêndio"></h3>
            </div>
         </div>
         <!--/MARKETING-->
         <!--/CONTEUDO SECUNDARIO -->

         <!-- FOOTER -->
         <?php
            include "footer2.php";
            ?>
        <!-- /FOOTER -->

      </main>
   </body>
</html>
