<?php


  $para= "dsdanielsodre@gmail.com";
  $assunto= "Contato pelo Site";

  $nome= $_REQUEST['nome'];
  $email= $_REQUEST['email'];
  $mensagem= $_REQUEST['mensagem'];

      $corpo= "<strong> Mensagem de Contato</strong><br><br>";
      $corpo .= "<strong> Nome:</strong> $nome";
      $corpo .= "<br<strong> Email:</strong> $email";
      $corpo .= "<br<strong> Mensagem: </strong><br><br> $mensagem";

      $header="Content-type: text/html; charset= utf-8 \n";
      $header .= "From: $email reply-to: $email \n";


  mail($para,$assunto,$corpo,$header);

  header("location:msg.php?msg=enviado");

 ?>
