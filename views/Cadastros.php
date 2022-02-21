<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
   <title>aPETrecho - Cadastros </title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="../css/style_cadParceiro.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
   <header>
      <nav class="black">
         <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
         </div>

         <div class="logo">
            <a href="../views/Index.php"> <img src="../Imagens/logo.png"></a>
         </div>

         <div class="menu">
            <ul>
               <li><a href="../views/Index.php">HOME</a></li>
               <li><a href="../views/quem-somos.php">QUEM SOMOS</a></li>
               <li><a href="../views/Cadastros.php">CADASTRE-SE</a></li>
               <li><a href="../views/Login.php">LOGIN</a></li>
            </ul>
         </div>
      </nav>

   </header>
   <div>
      <div id="img01"></div>
   </div>
   <div class="tela">
      <div class="form">
         <div class="form-section">
            <div class="group_title">
               <h3 class="heading"> Selecione o seu tipo de usuário:</h3>
               <hr style="width: 30%;margin-top: 0;">
            </div>
            <div class="group m20">
               <a href="#addCadastroModal1" class="botao" data-toggle="modal"> Parceiro </a>
            </div>
            <div class="group m20">
               <a href="#addCadastroModal2" class="botao" data-toggle="modal"> Petshop </a>
            </div>
            <div class="group m20">
               <a href="#addCadastroModal3" class="botao" data-toggle="modal"> ONG ou Abrigo </a>
            </div>
            <hr>
            <p> Já possui uma conta? <a href="Login.php"> Entre agora. </a></p>
         </div>



         <div id="addCadastroModal1" class="modal fade">
            <div class="modal-dialog">
               <div class="modal-content">
                  <form action="../banco/conexaoCadParceiro.php" method="POST" id="formulario">
                     <div class="modal-header">
                        <h4 class="modal-title"> Cadastro - Parceiro Pet </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     </div>
                     <p style="font-size: 16px; text-align: center" ;> Você está se cadastrando como um usuário Parceiro. </p>
                     <div class="modal-body">

                        <div class="form-group">
                           <label>Nome</label>
                           <input type="text" name="nome" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>CPF</label>
                           <input type="text" name="cpf" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Endereço</label>
                           <input type="text" name="endereco" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Cidade</label>
                           <input type="text" name="cidade" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Estado</label>
                           <input type="text" name="estado" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Telefone</label>
                           <input type="text" name="telefone" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>E-mail</label>
                           <input type="email" name="email" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Usuário</label>
                           <input type="text" name="usuario" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Senha</label>
                           <input type="password" name="senha" class="form-control" autocomplete="off" required>
                           <p class="small text"> Sua senha deve ter entre 6 a 12 caracteres e não deve conter suas informações pessoais. </p>
                        </div>
                     </div>

                     <input type="hidden" name="imagem" id="imagem">

                     <div class="modal-footer">
                        <input type="submit" class="botao btn btn-success" name="SendCadPcr" value="Cadastrar">
                        <input type="button" class="botao btn btn-default" data-dismiss="modal" value="Cancelar">
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <div id="addCadastroModal2" class="modal fade">
            <div class="modal-dialog">
               <div class="modal-content">
                  <form action="../banco/conexaoCadPet.php" method="POST" id="formulario">
                     <div class="modal-header">
                        <h4 class="modal-title"> Cadastro de Petshop </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     </div>
                     <p style="font-size: 16px; text-align: center" ;> Você está se cadastrando como um usuário Petshop. </p>
                     <div class="modal-body">

                        <div class="form-group">
                           <label>Nome</label>
                           <input type="text" name="nome" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>CNPJ</label>
                           <input type="text" name="cpf" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Endereço</label>
                           <input type="text" name="endereco" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Cidade</label>
                           <input type="text" name="cidade" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Estado</label>
                           <input type="text" name="estado" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Telefone</label>
                           <input type="text" name="telefone" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>E-mail</label>
                           <input type="email" name="email" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Usuário</label>
                           <input type="text" name="usuario" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Senha</label>
                           <input type="password" name="senha" class="form-control" autocomplete="off" required>
                           <p class="small text"> Sua senha deve ter entre 6 a 12 caracteres e não deve conter suas informações pessoais. </p>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <input type="submit" class="botao btn btn-success" name="SendCadPcr" value="Cadastrar">
                        <input type="button" class="botao btn btn-default" data-dismiss="modal" value="Cancelar">
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <div id="addCadastroModal3" class="modal fade">
            <div class="modal-dialog">
               <div class="modal-content">
                  <form action="../banco/conexaoCadONG.php" method="POST">
                     <div class="modal-header">
                        <h4 class="modal-title"> Cadastro - ONGs </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     </div>
                     <p style="font-size: 16px; text-align: center" ;> Você está se cadastrando como um usuário ONG ou Abrigo. </p>
                     <div class="modal-body">

                        <div class="form-group">
                           <label>Nome</label>
                           <input type="text" name="nome" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>CNPJ</label>
                           <input type="text" name="cpf" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Endereço</label>
                           <input type="text" name="endereco" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Cidade</label>
                           <input type="text" name="cidade" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Estado</label>
                           <input type="text" name="estado" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Telefone</label>
                           <input type="text" name="telefone" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>E-mail</label>
                           <input type="email" name="email" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Usuário</label>
                           <input type="text" name="usuario" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                           <label>Senha</label>
                           <input type="password" name="senha" class="form-control" autocomplete="off" required>
                           <p class="small text"> Sua senha deve ter entre 6 a 12 caracteres e não deve conter suas informações pessoais. </p>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <input type="submit" class="botao btn btn-success" name="SendCadPcr" value="Cadastrar">
                        <input type="button" class="botao btn btn-default" data-dismiss="modal" value="Cancelar">
                     </div>
                  </form>
               </div>
            </div>
         </div>




         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>







      </div>
   </div>
   </div>

</html>