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
                    <?php if(!empty($usuarios)):?>

                        <!-- Tabela de Clientes -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover ">
                            <tr class='active'>
                                <th>Nome</th>
                                <th>Matrícula</th>
                                <th>Turma</th>
                                <th>Nível</th>
                                <th>Data/Hora</th>
                            </tr>
                            <?php foreach($usuarios as $usuario):?>
                            <tr>
                                <td><?=$usuario->nome?></td>
                                <td><?=$usuario->matricula?></td>
                                <td><?=$usuario->turma?></td>
                                <td><?=$usuario->nivel?></td>
                                <td style="width:16%">
                                    
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