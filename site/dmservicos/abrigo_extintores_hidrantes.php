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
               <h2 class="featurette-heading golden">Abrigo de Extintores e Hidrantes<span class="text-muted"></h2>
               <h4>
               </h4>

               <h3 style="text-align:center">
               <img src="img/abrigo1.png" alt="Abrigo de Extintores">
               <br>
               <img src="img/abrigo2.jpg" alt="Abrigo de Extintores">
               <img src="img/abrigo3.jpg" alt="Abrigo de Extintores"></h3>
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
