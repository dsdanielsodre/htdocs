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

        <script>

                 $(document).ready(function(){
                     $("#myBtn").click(function(){
                        $.post("mensagem.php",{
                           nome:$("#FormControlName"),
                           email: $("#FormControlEmail"),
                           mensagem: $("#FormControlTextarea")
                        });

                      $("#myModal").modal();
                   });
                  });

          </script>

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
               <h2 class="featurette-heading golden">Fale Conosco<span class="text-muted"></h2>
               <h4> Para saber mais sobre a Grupo DM Serviços, nossos produtos e serviços que oferecemos, entre em contato conosco.
               </h4>
               <br>

               <form name="contato" method="post" action="processa.php" id="teste"> <!--FORMS--->
                <div class="form-group"> <!-- NOME -->
                  <label for="exampleFormControlInput1">Nome</label>
                  <input name="nome" type="text" class="form-control" id="FormControlName" placeholder="Nome">
                </div>
                <div class="form-group"> <!--EMAIL -->
                    <label for="exampleFormControlInput1">Email</label>
                  <input name="email" type="email" class="form-control" id="FormControlEmail" placeholder="nome@email.com">
                </div><!-- TELEFONE -->
              <!--  <div class="form-group">
                    <label for="exampleFormControlInput1">Telefone</label>
                  <input type="phone" class="form-control" id="FormControlPhone" placeholder="(XX) XXXX-XXXX">
                </div> -->

                <div class="form-group"> <!-- SUA MENSAGEM -->
                  <label for="exampleFormControlTextarea1">Mensagem</label>

                  <textarea name="mensagem" rows="4" cols="50" class="form-control" id="FormControlTextarea" rows="3"></textarea>
                </div>

                <!-- <input type="button" name="botao-ok" value="Enviar">-->
                <p>
                  <a >
                    <input class="btn btn-success"  value="Enviar" role="button" style=" float: right; " id="myBtn">
                    <!--		<input type="submit" value="Enviar"><br><br> -->
                  </a>
                </p>

              </form>
              <br>
              <br>
              <br>

              <?php
              /*
                if(isset($_POST["submit"])){
                  // Checking For Blank Fields..
                  if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
                    echo "Por favor, preencha tudo! Nós precisamos saber quem é, e o motivo de entrar em contato conosco!";
                  } else {
                    // Check if the "Sender's Email" input field is filled out
                    $email=$_POST['vemail'];
                    // Sanitize E-mail Address
                    $email =filter_var($email, FILTER_SANITIZE_EMAIL);
                    // Validate E-mail Address
                    $email= filter_var($email, FILTER_VALIDATE_EMAIL);
                    $emailConfirmed=$_POST['vemail'];
                    if (!$email){
                      echo "Não esqueça de colocar seu endereço de email!";
                    } else {
                      $subject = $_POST['sub'];
                      $message = $_POST['msg'];
                      $headers =  'From:' . $emailConfirmed . "\r\n"; // Sender's Email
                      $headers .= 'Cc:' . $emailConfirmed . "\r\n"; // Carbon copy to Sender
                      // Message lines should not exceed 70 characters (PHP rule), so wrap it
                      $message = wordwrap($message, 70);
                      // Send Mail By PHP Mail Function
                      mail("dsdanielsodre.@gmail.com", $subject, $message, $headers);
                      echo "<script>$('#thankyouModal').modal('show')</script>";
                  };
                }
              }
              */
              ?>



<!--
              <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
                      </div>
                      <div class="modal-body">
                          <p>Thanks for getting in touch!</p>
                      </div>
                  </div>
              </div>
          </div> -->



<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
 <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">
     <div class="modal-header">
       <h4 class="modal-title">Mensagem</h4>
       <button type="button" class="close" data-dismiss="modal">&times;</button>

     </div>
     <div class="modal-body">
       <p>Cadastro efetuado com sucesso.</p>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
     </div>
   </div>


<br>
<br>
</div>
</div>
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
