<?php 
    require "includes/conexao.php";
    include("includes/head.php")
?>
    <body>

        <?php include("includes/navbar.php");?>
        <?php include("includes/action_usuario.php");?>

        <div class="container-seach">

            <img src="img/logo_etec.png" class="img-responsive center-block">

            <form method="post" class="col-md-6 col-xs-8 col-md-offset-3 col-xs-offset-2">

                <input type="text" class="form-control" name="barcode" placeholder="Use o leitor para liberar o acesso" autofocus>
                
                <a id="view" name="view" class="btn btn-default text-center" value="1" role="button" data-toggle="modal" data-target="#myModal"></a>
                                    
                                    <div id="myModal" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Saída liberada</h3>
                                          </div>
                                          <div class="modal-body">
                                            <p>Nome: xxxxx</p>
                                            <p>Matrícula: xxxxx</p>
                                            <p>Curso: xxxxx</p>
                                            <p>Turma: xxxxx</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>

                                      </div>
                                    </div>
    
                
                
            </form>

        </div>

    </body>

</html>