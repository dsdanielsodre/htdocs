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
      <title>Grupo DM Serviços</title>
   </head>
   <body>
      <?php
         include "menu.php";

         ?>
      <main role="main">
        <!--MARKETING-->
         <div class="container marketing">
           <div class="row">
           <!--CONTEUDO SECUNDARIO -->
            <div class="conteudo-secundario">
               <h2 class="featurette-heading golden"> Peças e Acessórios para extintores de Incêndio<span class="text-muted"></h2>
               <h4>A troca de peças se faz necessária devido ao desgaste físico das mesmas.
               </h4>

               <h3 style="text-align: center">
                      <img src="img/valvula2.jpg" alt="Valvula CO2" style="width: 500px; height: 500px;" >
                      <br>
                      <br>
                <img src="img/pecas.png" alt="Peças e Acessórios">


               </h3>
               <br>
            </div>
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
