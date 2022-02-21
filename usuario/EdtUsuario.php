<?php 
      include_once '../banco/conexao.php';
      session_start();
      if(!isset($_SESSION['logado'])){
            header("Location: ../views/Login.php");
      }
      if(!($_SESSION['logado']['nivel'] >= "0" && $_SESSION['logado']['nivel'] <= "2")){
            header("Location: ../views/Login.php");
      }
?>

<!DOCTYPE html>
<html>
<head>
      <title>aPETrecho - Editar Usuário </title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e9cda1e4b0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style_edtUsuario.css">
</head>
<body>
      <header>
            <nav class="black">
                  <div class="menu-icon">
                        <i class="fa fa-bars fa-2x"></i>
                  </div>
                  <div class="logo">
                        <a href="../views/Feed.php"> <img src="../Imagens/logo.png"></a>
                  </div>
                  <div class="menu">
                        <ul>
                               <li><a href="../views/Feed.php">FEED</a></li>
                               <li><a href="../postagens/postagens.php"> PUBLICAÇÕES</a></li>
                              <li><a href="../usuario/Sair.php">SAIR</a></li>
                        </ul>
                  </div>
            </nav>
      </header>
                              
      <div class="tela">
            <div class="form">
                  <div class="form-section">
                        <div class="group_title">
                              <h3 class="heading">EDITAR PERFIL</h3>
                              <hr style="width: 30%;margin-top: 0;">
                              
                        </div>


            <div class="perfil-foto">
            <?php
            include_once "../banco/conexao.php";
            $res = "SELECT * FROM usuarios WHERE id = " . $_SESSION['logado']['id'];
            $res = $pdo->prepare($res);
            $res->execute();
            ?>

            <?php while ($row = $res->fetch(PDO::FETCH_ASSOC)) { ?>
            <!-- O modal está no final do código -->
            <img src="../avatar/<?php echo $row['imagem']; ?>" width="auto" height="150" style="border-radius: 50%; cursor: pointer;" href="#addFotoModal" data-toggle="modal" style="cursor: pointer;">
       
            

                  <div>
                        <label>Bem-vindo, <?php echo $row['nome']; ?></label>
                  </div>
                  
            </div>
            
                              <form action="conexaoEditar.php" method="POST" id="formulario">
                                    <div class="group">
                                          
                                    <?php 
                                if(isset($_SESSION['msg'])) {
                                     echo $_SESSION['msg'];
                                     unset ($_SESSION['msg']);
                                }
                                ?>

                              
                                    <label>Nome</label>
                                    <input type="text" name="nome" style="width: 100%;" class="form-control" id="campo_nome" value="<?php 
                                      if(isset($row['nome'])) { 
                                        echo $row['nome']; 
                                        } 
                                        ?>">
                                    </div>

                                    <div class="group">
                                    <label>CPF</label>
                                    <input type="cpf" name="cpf" style="width: 100%;" class="form-control" id="campo_cpf" value="<?php 
                                      if(isset($row['cpf'])) { 
                                        echo $row['cpf']; 
                                        } 
                                        ?>">
                                    </div>


                                    <div class="form-group">
                                    <label>Endereço</label>
                                    <input type="text" name="endereco" style="width: 100%;" class="form-control" id="campo_endereco" value="<?php 
                                      if(isset($row['endereco'])) { 
                                        echo $row['endereco']; 
                                        } 
                                        ?>">
                                    </div>
                                 
                                
                                    <div class="form-group">
                                    <label>Cidade</label>
                                    <input type="cidade" name="cidade" style="width: 100%;" class="form-control" id="campo_cidade" value="<?php 
                                      if(isset($row['cidade'])) { 
                                        echo $row['cidade']; 
                                        } 
                                        ?>">
                                    </div>
                                 
                                                                  
                                    <div class="form-group">
                                    <label>Estado</label>
                                    <input type="estado" name="estado" style="width: 100%;" class="form-control" id="campo_estado" value="<?php 
                                      if(isset($row['estado'])) { 
                                        echo $row['estado']; 
                                        } 
                                        ?>">
                                    </div>
                                 

                                    <div class="form-group">
                                    <label> Telefone </label>
                                    <input type="text" name="telefone" style="width: 100%;" class="form-control" id="campo_telefone" value="<?php 
                                      if(isset($row['telefone'])) { 
                                        echo $row['telefone']; 
                                        } 
                                        ?>">
                                    </div>
                                 
                                 
                                    <div class="form-group">
                                    <label>E-mail</label> 
                                    <input type="email" name="email" style="width: 100%;" class="form-control" id="campo_email" value="<?php 
                                      if(isset($row['email'])) { 
                                        echo $row['email']; 
                                        } 
                                        ?>">
                                    </div>

                                                                  
                                    <div class="form-group">
                                    <label>Usuário</label>
                                    <input type="text" name="usuario" style="width: 100%;" class="form-control" id="campo_usuario" value="<?php 
                                      if(isset($row['usuario'])) { 
                                        echo $row['usuario']; 
                                        } 
                                        ?>">
                                    </div>
                                 

                                    <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" name="senha" style="width: 100%;" class="form-control" id="campo_senha" value="<?php 
                                      if(isset($row['senha'])) { 
                                        echo $row['senha']; 
                                        } 
                                        ?>">
                                    </div>

                                    <div class="form-group">
                                    <label>Confirme a sua senha </label>
                                    <input type="password" name="senha" style="width: 100%;" class="form-control" id="campo_senha" value="<?php 
                                      if(isset($row['senha'])) { 
                                        echo $row['senha']; 
                                        } 
                                        ?>">
                                    </div>

                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <?php } ?>
                                
                                    <div class="m20">
                                    <input type="submit" id="botao" class="btn btn-primary" name="editar" value="Salvar Alterações"></button>
                                    </div>

                                    <hr>
                                    <br>
                                    <a href="#"><p class="small" style="text-align: center;"> Desativar minha conta </p></a>
                                </form>
                         </div>
                </div>
          </div>
    </div>
</body>

<!-- MODAL FOTO -->
<div id="addFotoModal" class="modal fade">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Alterar Foto </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                  <div class="modal-body">
                  <!--- FOTO ---->
                  <div class="form-group">
                  <form action="uploadFoto.php" method="POST" enctype="multipart/form-data">
                  <h6 style="text-align: center;"> Selecione uma foto. </h6>
                  <input type="file" name="imagem" id="imagem">
                  <br>
                  <br>
                  
                  <input type="submit" name="enviarFoto" value="Enviar" class="btn btn-success"> 
                  </div>                
                 
                  </form>
         
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
         
            </div>
		</div>
            </div>
            </div>

</html>
