<?php 
ob_start();
session_start();
    if(isset($_SESSION['usuariocsa']) && (isset($_SESSION['senhacsa']))){
        header("Location: home.php"); exit;
    }
    include("includes/conexao.php");

    $loginmsg = '';

    if(isset($_GET['acao'])){
        if(!isset($_POST['logar'])){
            $acao = $_GET['acao'];
            if($acao=='negada'){
                $loginmsg = '<div class="col-md-8 col-xs-8 col-md-offset-2  col-xs-offset-2">
                                <div class="alert alert-login alert-danger col-md-6 col-md-offset-3">
                                    <strong>Erro!</strong> Identifique-se para acessar o sistema.</a>
                                </div>
                            </div>';
            }
        }
    }

$conexao = conexao::getInstance();

    if(isset($_POST['logar'])){
        //RECUPERAR DADOS FORM
        $usuario = trim(strip_tags($_POST['usuario']));
        $senha = trim(strip_tags($_POST['senha']));

        //SELEÇÃO DE BD E REGISTROS
        $select = "SELECT * from admin WHERE BINARY usuario=:usuario AND BINARY senha=:senha"; //Selecione tudo da tabela usuarios onde campo=:variavel e campo=:variavel

        try{
            $result = $conexao->prepare($select);
            $result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $result->bindParam(':senha', $senha, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();
            if($count==1){
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
                $_SESSION['usuariocsa'] = $usuario;
                $_SESSION['senhacsa'] = $senha;

                    $loginmsg =  '<div class="col-md-8 col-xs-8  col-xs-offset-2">
                                    <div class="alert alert-login alert-success col-md-12">
                                        <strong>Sucesso!</strong> Você será redirecionado em breve.</a>
                                    </div>
                                 </div>';

                            header("Refresh: 2, home.php?acao=welcome"); //Redirecionamento para a página home após 2 segundos e ação "welcome" ativa mensagem direcionada
            }else{
                    $loginmsg = '<div class="col-md-8 col-xs-8  col-xs-offset-2">
                                    <div class="alert alert-login alert-danger col-md-12">
                                        <strong>Erro!</strong> Preencha os campos corretamente.</a>
                                    </div>
                                </div>';
                }

            }catch(PDOException $error){
                echo $error;
            }
    } //Ao clicar em Logar/entrar

    include("includes/head.php")
?>

    <body>

        <div class="container-login">

            <img src="img/logo_etec.png" alt="logo" class="img-responsive center-block" ><!--LOGO-->

            <form action="#" method="post" class="col-md-6 col-xs-8 col-md-offset-3 col-xs-offset-2"><!--login form-->
                
                <?php echo $loginmsg; ?>

                <div class="input-group login-form col-md-6 col-md-offset-3">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="matricula" type="text" class="form-control" name="usuario" placeholder="Digite seu RM">
                </div>

                <div class="input-group login-form col-md-6 col-md-offset-3">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="senha" type="password" class="form-control" name="senha" placeholder="Digite sua senha">
                </div>

                <div class="form-actions btn-login input-group col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3" style="text-align: center"><!--login button-->
                    <input type="submit" name="logar" value="Entrar" class="btn btn-primary btn-login btn-lg">
                </div><!--/login button-->

            </form><!--/login form-->

        </div><!--/container-->

        <footer class="footer"><!--footer-->
            <div class="container">
                <span class="text-muted">
                    Controle de Saída Antecipada | <a href="http://www.etecdeembu.com.br/">ETEC de Embu</a>
                </span>
            </div>
        </footer><!--/footer-->

    </body>

</html>