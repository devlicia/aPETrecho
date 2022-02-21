<?php session_start();
include_once '../banco/conexao.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e9cda1e4b0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/pagUsuario.css">
    <title> Página do Usuário </title>
</head>
<body>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
          <img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
          <a href="#"><p class="small" style="text-align: center;"> Alterar Foto </a></p>
				</div>

				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Bem-vindo, Usuário!
					</div>
					<div class="profile-usertitle-job">
						Nível de Acesso
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				

				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="fas fa-home"></i>
							Página Inicial </a>
						</li>
						<li>
							<a href="#">
							<i class="fas fa-edit"></i>
							Gerenciar Promoções </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="fas fa-sign-out-alt"></i>
							Desconectar </a>
						</li>
						
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>

		<div class="col-md-9">
            <div class="profile-content">
            <h3 class="heading"> Seu Perfil </h3>
                                  <p> Estes são os dados que você cadastrou.
                                  Caso queira atualizar alguma informação, preencha o campo desejado abaixo. </p>
                                
                                <?php if(isset($_SESSION['msg'])) {
                                     echo $_SESSION['msg'];
                                     unset ($_SESSION['msg']);
                                }

                                $res = "SELECT * FROM usuarios WHERE nivel = 2";
                                $res = $pdo->prepare($res);
                                $res->execute();
                                $row_res = $res->fetch(PDO::FETCH_ASSOC);

                                ?>

                                <hr>
                                    
                                <form action="conexaoEditar.php" method="POST" id="formulario">
                                    <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="nome" style="width: 25%;" class="form-control" id="campo_nome" value="<?php 
                                      if(isset($row_res['nome'])) { 
                                        echo $row_res['nome']; 
                                        } 
                                        ?>">
                                    </div>

                                    <div class="form-group">
                                    <label>CNPJ</label>
                                    <input type="cpf" name="cpf" style="width: 25%;" class="form-control" id="campo_cpf" value="<?php 
                                      if(isset($row_res['cpf'])) { 
                                        echo $row_res['cpf']; 
                                        } 
                                        ?>">
                                    </div>


                                    <div class="form-group">
                                    <label>Endereço</label>
                                    <input type="text" name="endereco" style="width: 25%;" class="form-control" id="campo_endereco" value="<?php 
                                      if(isset($row_res['endereco'])) { 
                                        echo $row_res['endereco']; 
                                        } 
                                        ?>">
                                    </div>
                                 
                                
                                    <div class="form-group">
                                    <label>Cidade</label>
                                    <input type="cidade" name="cidade" style="width: 25%;" class="form-control" id="campo_cidade" value="<?php 
                                      if(isset($row_res['cidade'])) { 
                                        echo $row_res['cidade']; 
                                        } 
                                        ?>">
                                    </div>
                                 
                                                                  
                                    <div class="form-group">
                                    <label>Estado</label>
                                    <input type="estado" name="estado" style="width: 25%;" class="form-control" id="campo_estado" value="<?php 
                                      if(isset($row_res['estado'])) { 
                                        echo $row_res['estado']; 
                                        } 
                                        ?>">
                                    </div>
                                 

                                    <div class="form-group">
                                    <label> Telefone </label>
                                    <input type="text" name="telefone" style="width: 25%;" class="form-control" id="campo_email" value="<?php 
                                      if(isset($row_res['telefone'])) { 
                                        echo $row_res['telefone']; 
                                        } 
                                        ?>">
                                    </div>
                                 
                                 
                                    <div class="form-group">
                                    <label>E-mail</label> 
                                    <input type="email" name="email" style="width: 25%;" class="form-control" id="campo_email" value="<?php 
                                      if(isset($row_res['email'])) { 
                                        echo $row_res['email']; 
                                        } 
                                        ?>">
                                    </div>

                                    <div class="form-group">
                                    <label>Site</label> 
                                    <input type="text" name="site" style="width: 25%;" class="form-control" value="<?php 
                                      if(isset($row_res['site'])) { 
                                        echo $row_res['site']; 
                                        } 
                                        ?>">
                                    </div>
                                
                                                                  
                                    <div class="form-group">
                                    <label>Usuário</label>
                                    <input type="text" name="usuario" style="width: 25%;" class="form-control" id="campo_usuario" value="<?php 
                                      if(isset($row_res['usuario'])) { 
                                        echo $row_res['usuario']; 
                                        } 
                                        ?>">
                                    </div>
                                 

                                    <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" name="senha" style="width: 25%;" class="form-control" id="campo_senha" value="<?php 
                                      if(isset($row_res['senha'])) { 
                                        echo $row_res['senha']; 
                                        } 
                                        ?>">
                                    </div>
                                
                                    <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="editarPerfil" value="Salvar Alterações"></button>
                                    </div>

                                    <hr>
                                    <br>
                                    <a href="#"><p class="small" style="text-align: center;"> Desativar minha conta </p></a>
                                </form>


                         </div>
                </div>                   
             


</body>
</html>