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
               <h2 class="featurette-heading golden">Teste Hidrostático e Empatação de Mangueira<span class="text-muted"></h2>
               <h4>Toda mangueira de incêndio deve ser inspecionada e ensaiada hidrostaticamente por obrigatoriedade antes de ser colocada em uso (para mangueiras novas pode ser aceito o certificado de ensaio hidrostático do fabricante).
                 <br>Item 4.2.2 NBR 12779:2004 – Deve-se realizar a inspeção e manutenção em toda a mangueira em uso conforme tabela 1 abaixo.

               </h4>

              <br> <img src="img/tabela_inspecao_manutencao.png" alt="tabela de Inspeção e Manutenção" style=""> <br> <br>
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
