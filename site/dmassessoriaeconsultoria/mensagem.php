<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
       include 'links.php';
       include 'metas.php';
       include 'scripts.php';
       ?>
    <meta charset="utf-8">
    <title>Enviando..</title>
  </head>
  <body>


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bd_dm";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    mysqli_select_db($conn, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   /*
   echo "Connected successfully"; */

    ?>

   <?php
   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $mensagem = $_POST["mensagem"];
   $sql = mysqli_query ($conn, "INSERT INTO contato(nome, email, mensagem) VALUES('$nome', '$email','$mensagem')");
   $result = mysqli_query($conn,$sql);


   ?>




</body>
</html>
