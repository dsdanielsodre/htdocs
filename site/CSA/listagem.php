<?php 
    require "includes/conexao.php";
    include("includes/head.php")
?>
    <body>
        
        <?php include("includes/navbar.php");?>
        <?php include ("includes/action_usuario.php");?>
        
        <div class="main register-form col-md-12">

            <ul class="list-group">
                <li class="list-group-item">
                    <fieldset>
                        <form action="" method="get" id='form-contato' class="form-horizontal col-md-12 col-lg-12">
                            <div class='col-lg-6 col-md-7 col-sm-9 col-lg-offset-2 col-xs-12'>
                                <input type="text" class="form-control" id="search" name="search" placeholder="Infome o Nome/Matrícula">
                            </div>
                            <button type="submit" class="btn btn-primary col-lg-offset-0 col-xs-offset-2">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;
                            </button>
                            <a href='listagem.php' class="btn btn-primary">Ver Todos</a>
                        </form>
                    </fieldset>
                </li>

                <li class="list-group-item">
                    <?php if(!empty($usuarios)):?>

                        <!-- Tabela de Clientes -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover ">
                            <tr class='active'>
                                <th>Nome</th>
                                <th>Matrícula</th>
                                <th>Turma</th>
                                <th>Nível</th>
                                <th>Opções</th>
                            </tr>
                            <?php foreach($usuarios as $usuario):?>
                            <tr>
                                <td><?=$usuario->nome?></td>
                                <td><?=$usuario->matricula?></td>
                                <td><?=$usuario->turma?></td>
                                <td><?=$usuario->nivel?></td>
                                <td style="width:16%">
                               
                                <button id="myBtn=<?=$usuario->nome?>" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                  <span class="glyphicon glyphicon-eye-open"></span>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"><?=$usuario->nome?></h4>
                                      </div>
                                      <div class="modal-body">
                                        ...
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <a href="editar.php?matricula=<?=$usuario->matricula?>" class="btn btn-primary text-center" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="listagem.php?delete=<?=$usuario->matricula?>" class="btn btn-danger text-center" role="button"><span class="glyphicon glyphicon-remove"></span></a>
                                    
                            </tr>	
                            <?php endforeach;?>
                        </table>
                        </div>
                    
                        <!-- cole aqui a paginação -->
                    
                        <?php else: ?>

                        <!-- Mensagem caso não exista clientes ou não encontrado  -->
                        <h5 class="text-center text-default">Não há registros cadastrados ou não correspondem à pesquisa!</h5>

                    <?php endif; ?>
                    
                </li>

            </ul>

        </div>
        
    </body>
    
</html>