<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
      <title>aPETrecho - Cadastro de ONG</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style_cadParceiro.css">
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
                                    <li><a href="../views/CadastroParceiro.php">PARCEIRO PET</a></li>
                                    <li><a href="../views/CadastroOngs.php">ONGS</a></li>
                                    <li><a href="../views/CadastroPetshops.php">PETSHOPS</a></li>
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
                                  <h3 class="heading">CADASTRO ONGs</h3>
                                  <?php if(isset($_SESSION['msg'])) {
                                     echo $_SESSION['msg'];
                                     unset ($_SESSION['msg']);
                                  }
                                  ?>
                                  <hr style="width: 30%;margin-top: 0;">
                           </div>
                           
                            <form action="../banco/conexaoCadONG.php" method="POST" id="formulario">
                                  
                                  <div class="group">
                                   <div class="verifica_nome">
                                      <input type="text" name="nome" class="control" id="campo_nome" required>
                                      <label>Nome</label>
                                      
                                   </div>
                                 </div>

                                  <div class="group">
                                   <div class="verifica_cpf">
                                      <input type="cpf" name="cpf" class="control" id="campo_cpf" required>
                                      <label>CNPJ</label>
                                      
                                   </div>
                                 </div>
                                                                  
                                 <div class="group">
                                   <div class="verifica_endereco">
                                      <input type="text" name="endereco" class="control" id="campo_endereco" required>
                                      <label>Endereço</label>
                                      
                                   </div>
                                 </div>
                                
                                  <div class="group">
                                   <div class="verifica_cidade">
                                      <input type="cidade" name="cidade" class="control" id="campo_cidade" required>
                                      <label>Cidade</label>
                                      
                                   </div>
                                 </div>
                                                                  
                                 <div class="group">
                                   <div class="verifica_estado">
                                      <input type="estado" name="estado" class="control" id="campo_estado" required>
                                      <label>Estado</label>
                                      
                                   </div>
                                 </div>

                                 <div class="group">
                                   <div class="verifica_telefone">
                                      <input type="telefone" name="telefone" class="control" id="campo_telefone" required>
                                      <label>Telefone</label>
                                      
                                   </div>
                                 </div>

                                 <div class="group">
                                   <div class="verifica_email">
                                      <input type="email" name="email" class="control" id="campo_email" required>
                                      <label>E-mail</label>
                                     
                                   </div>
                                 </div>

                                 <div class="group">
                                   <div class="verifica_nome">
                                      <input type="text" name="site" class="control" id="campo_nome" required>
                                      <label> Site </label>
                                      
                                   </div>
                                 </div>

                                                                  
                                 <div class="group">
                                   <div class="verifica_usuario">
                                      <input type="text" name="usuario" class="control" id="campo_usuario" required>
                                      <label>Usuário</label>
                                      
                                   </div>
                                 </div>

                                 <div class="group">
                                   <div class="verifica_senha">
                                      <input type="password" name="senha" class="control" id="campo_senha" required>
                                      <label>Senha</label>

                                      
                                   </div>
                                 </div>

                                 <div class="group m20">
                                    <input type="submit" name="SendCadForm" class="botao" value="Cadastrar &rarr;">
                                 </div>
                            </form>
                         </div>
                </div>                     
  </div>

</html> 