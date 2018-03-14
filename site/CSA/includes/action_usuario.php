<?php 
    if(isset($_POST['liberar'])){
        $barcode = $_POST['barcode'];
        
    }

?>

<?php 

    $conexao = conexao::getInstance();

    if(isset($_POST['inserir'])){
        $matricula = $_POST['matricula'];
        $nome = trim(strip_tags($_POST['nome']));
        $turma = trim(strip_tags($_POST['turma']));
        $email = trim(strip_tags($_POST['email']));
        $senha = trim(strip_tags($_POST['senha']));
        $nivel = trim(strip_tags($_POST['nivel']));

        $insert = "INSERT into tab_usuarios (matricula, nome, turma, email, senha, nivel) VALUES (:matricula, :nome, :turma, :email, :senha, :nivel)";

        try{
            $result = $conexao->prepare($insert);
            $result->bindParam(':matricula', $matricula, PDO::PARAM_STR);
            $result->bindParam(':nome', $nome, PDO::PARAM_STR);
            $result->bindParam(':turma', $turma, PDO::PARAM_STR);
            $result->bindParam(':email', $email, PDO::PARAM_STR);
            $result->bindParam(':senha', $senha, PDO::PARAM_STR);
            $result->bindParam(':nivel', $nivel, PDO::PARAM_STR);
            $result->execute();
            $count = $result->rowCount();

            if($count>0){
                echo '<div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <span class="glyphicon glyphicon-ok"></span> <strong>Usuário cadastrado com sucesso!</strong>
                    </div>';
                
                echo "<meta http-equiv=refresh content='1;URL=cadastro.php'>";//refresh da pagina

            }else{
                echo '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <span class="glyphicon glyphicon-remove"></span> <strong>Não foi possivel cadastrar o usuário</strong>
                    </div>';
                
                echo "<meta http-equiv=refresh content='1;URL=cadastro.php'>";//refresh da pagina
                
                }

            }catch(PDOException $e){
                echo $e;
            }
    }
?>

<?php 
    
    //exclusão de usuário
    $conexao = conexao::getInstance();

    if(isset($_GET['delete'])){
        $matricula = $_GET['delete'];

        $del = "DELETE from tab_usuarios WHERE matricula=:matricula";

        try{
            $result = $conexao->prepare($del);
            $result->bindParam(':matricula',$matricula, PDO::PARAM_INT);				
            $result->execute();
            $count = $result->rowCount();
            if($count>0){
                
            echo '<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="glyphicon glyphicon-ok"></span> <strong>Usuário deletado com sucesso!</strong>
                </div>';

                echo "<meta http-equiv=refresh content='1;URL=listagem.php'>";//refresh da pagina
                
            }else{
            echo '<div class="alert alert-msgstatus alert-danger alert-dismissable col-md-6 col-xs-6 col-6 col-md-offset-3  col-xs-offset-3 col-offset-3">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Houve um erro ao deletar o cadastro.</strong>
                </div>';	

                echo "<meta http-equiv=refresh content='1;URL=listagem.php'>";//refresh da pagina
            }

        }catch (PDOWException $erro){ echo $erro;}
    }

?>

<?php

    // Recebe o termo de pesquisa se existir
    $search = (isset($_GET['search'])) ? $_GET['search'] : '';

    // Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
    if (empty($search)):


        $conexao = conexao::getInstance();
        $sql = "SELECT * FROM tab_usuarios ORDER BY nome ASC "; //LIMIT $inicio, $quantidade
        $stm = $conexao->prepare($sql);
        $stm->execute();
        $usuarios = $stm->fetchAll(PDO::FETCH_OBJ);

    else:

        // Executa uma consulta baseada no termo de pesquisa passado como parâmetro
        $conexao = conexao::getInstance();
        $sql = 'SELECT * FROM tab_usuarios WHERE nome LIKE :nome OR matricula LIKE :matricula OR turma LIKE :turma ORDER BY nome ASC ';
        $stm = $conexao->prepare($sql);
        $stm->bindValue(':nome', '%'.$search.'%');
        $stm->bindValue(':matricula', $search.'%');
        $stm->bindValue(':turma', $search.'%');
        $stm->execute();
        $usuarios = $stm->fetchAll(PDO::FETCH_OBJ);

    endif;

  ?>

    




