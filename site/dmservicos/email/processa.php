<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];

        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "dsdanielsodre@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "dsdanielsodre@hotmail.com");
        $content = new SendGrid\Content("text/html", "<br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);

        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";

        ?>
        
    </body>
</html>
