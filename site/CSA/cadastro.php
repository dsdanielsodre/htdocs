<?php 
    require "includes/conexao.php";
    include("includes/head.php")
?>
    <body>

        <?php include("includes/navbar.php");?>

        <div class="main register-form col-md-12">
        
        <form method="post" id='form-cadastro' enctype='multipart/form-data'>
            
         <?php include("includes/action_usuario.php")?>

            <ul class="list-group">
            <li class="list-group-item active">CADASTRO</li>
                <li class="list-group-item">
                    
                        
                        <div class="row">
                          <div class="">
                            <div class="thumbnail col-md-3">
                              <img src="fotos/padrao.jpg" height="190" width="150" id="foto-cliente">
                              <div class="caption">
                                  <div class="form-actions btn-login input-group col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3" style="text-align: center">
                                      <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} arquivos selecionados" multiple />
					               <label class="btn btn-sm btn-default col-md-12 col-xs-12" for="file-2"><span> Selecione uma foto&hellip;</span></label>
                                   <label class="btn btn-sm btn-default col-md-12 col-xs-12 bio" for="file-2"> Cadastrar Biometria <span class="glyphicon glyphicon-hand-up"></span></label>
                                </div>
                              </div>
                            </div>
                          </div>
                    
                    <div class="form-group col-md-2">
                        <label>Nível de Cadastro</label>
                        <select class="form-control" name="nivel" id="nivel">
                            <option>Aluno</option>
                            <option>Professor</option>
                            <option>Administrador</option>
                        </select>
                    </div>
                        
                        
                        <div class="form-group col-md-3">
                            <label for="formGroupExampleInput">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome" required>
                        </div>
                            
                        <div class="form-group  col-md-2">
                            <label for="formGroupExampleInput">Registro de Matrícula:</label>
                            <input type="text" class="form-control" name="matricula" id="matricula" required>
                        </div>
                            
                             <div class="form-group col-md-1">
                        <label>Genero</label>
                        <select class="form-control" name="turma" id="turma" >
                            
                            <option></option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                            <option>Outros</option>
  
                        </select>
                    </div>
                            
                        <div class="form-group col-md-1">
                        <label>Curso</label>
                        <select class="form-control" name="curso" onChange="select('cursos',this.value)">
                            
                            <option></option>
                            <option value="TAT" >Administração - Tarde</option>
                            <option>Administração - Noite</option>
                            <option>Contabilidade - Tarde</option>
                            <option>Contabilidade - Noite</option>
                            <option>Eletroeletrônica</option>
                            <option>Ensino Médio</option>
                            <option>Informática</option>
                            <option>Logística</option>
                            <option>Redes de Computadores</option>
                            
                            </select>
                            </div>
                        
                        <div class="form-group col-md-1">
                        <label>Turma</label>
                        <select class="form-control" name="turma" >
                            
                            <option></option>
                            
                            <!--<option></option>
                            
                                <option>1TAT</option>
                                <option>2TAT</option>
                                <option>3TAT</option>

                                <option>1TAN</option>
                                <option>2TAN</option>
                                <option>3TAN</option>
                            
                                <option>1TCT</option>
                                <option>2TCT</option>
                                <option>3TCT</option>
                            
                                <option>1TCN</option>
                                <option>2TCN</option>
                                <option>3TCN</option>

                                <option>1TEN</option>
                                <option>2TEN</option>
                                <option>3TEN</option>
                                <option>4TEN</option>
                            
                                <option>1A</option>
                                <option>1B</option>
                                <option>2A</option>
                                <option>2B</option>
                                <option>3A</option>
                                <option>3B</option>
                            
                                <option>1TIN</option>
                                <option>2TIN</option>
                                <option>3TIN</option>
                            
                                <option>1TLN</option>
                                <option>2TLN</option>
                                <option>3TLN</option>
                            
                                <option>1TRT</option>
                                <option>2TRT</option>
                                <option>3TRT</option>-->
                            
                        </select>
                    </div>
 
                        <div class="form-group  col-md-2">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>

                        <div class="form-group  col-md-1">
                            <label for="formGroupExampleInput">Senha:</label>
                            <input type="password" class="form-control" name="senha" id="senha" required>
                        </div>

                        <div class="form-actions btn-login input-group">
                           <br/><br/><br/><br/><br/><br/><br/><input type="submit" name="inserir" id="inserir" value="Salvar Usuário" class="btn btn-primary">
                        </div>

                    </form>

                </li>

            </ul>

        </div>
<script src="js/custom-file-input.js"></script>
    </body>

</html>