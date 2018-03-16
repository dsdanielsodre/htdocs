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
               <h2 class="featurette-heading golden">Fale Conosco<span class="text-muted"></h2>
               <h4> Para saber mais sobre a DM Assessoria e Consultoria, nossos produtos e serviços que oferecemos, entre em contato conosco.
               </h4>
               <br>
               <form> <!--FORMS--->
                <div class="form-group"> <!-- NOME -->
                  <label for="exampleFormControlInput1">Nome</label>
                  <input type="nome" class="form-control" id="FormControlName" placeholder="Nome">
                </div>
                <div class="form-group"> <!--EMAIL -->
                    <label for="exampleFormControlInput1">Email</label>
                  <input type="email" class="form-control" id="FormControlEmail" placeholder="nome@email.com">
                </div>
                <div class="form-group"> <!-- TELEFONE -->
                    <label for="exampleFormControlInput1">Telefone</label>
                  <input type="phone" class="form-control" id="FormControlPhone" placeholder="(XX) XXXX-XXXX">
                </div>

                <div class="form-group"> <!-- SUA MENSAGEM -->
                  <label for="exampleFormControlTextarea1">Sua Mensagem</label>
                  <textarea class="form-control" id="FormControlTextarea" rows="3"></textarea>
                </div>

                <!-- <input type="button" name="botao-ok" value="Enviar">-->
                <p><a class="btn btn-green" href="#" role="button" style=" float: right;">Enviar &raquo;</a></p>

              </form>
              <br>
              <br>
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
