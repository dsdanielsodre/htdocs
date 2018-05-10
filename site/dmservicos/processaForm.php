<?php

  $para= "grupodmservicos@grupodmservicos.com.br";
  $assunto= $_REQUEST['assunto'];

  $nome= $_REQUEST['nome'];
  $email= $_REQUEST['email'];
  $mensagem= $_REQUEST['mensagem'];

      $corpo= "<strong> Mensagem de usuário</strong><br><br>";
      $corpo .= "<strong> Nome:</strong> $nome";
      $corpo .= "<br><br><strong> Email:</strong> $email";
      $corpo .= "<br><br><strong> Mensagem: </strong><br><br> $mensagem";

      $header="Content-type: text/html; charset= utf-8 \n";
      $header .= "From: $email reply-to: $email \n";


  @mail($para,$assunto,$corpo,$header);

  header("location:index.php?msg=enviado");


 ?>
