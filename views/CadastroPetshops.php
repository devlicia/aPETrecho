<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <title>aPETrecho - Cadastro de Pet Shops</title>
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
                                  <h3 class="heading">CADASTRO PET SHOP</h3>
                                  <?php if(isset($_SESSION['msg'])) {
                                     echo $_SESSION['msg'];
                                     unset ($_SESSION['msg']);
                                  }
                                  ?>
                                  <hr style="width: 30%;margin-top: 0;">
                           </div>
                           
                            <form action="../banco/conexaoCadPet.php" method="POST" id="formulario">
                                  
                                  <div class="group">
                                   <div class="verifica_nome">
                                      <input type="text" name="nome" class="control" id="campo_nome" autocomplete="off" required>
                                      <label>Nome</label>
                                      <i><img src="../Imagens/error.png" id="icon_error_nome" title="Preencher Campo Obrigatório!!"></i>
                                   </div>
                                 </div>

                                  <div class="group">
                                   <div class="verifica_cpf">
                                      <input type="cpf" name="cpf" class="control" id="campo_cpf" autocomplete="off" required>
                                      <label>CNPJ</label>
                                      <i><img src="../Imagens/error.png" id="icon_error_cpf" title="Preencher Campo Obrigatório!!"></i>
                                   </div>
                                 </div>
                                                                  
                                 <div class="group">
                                   <div class="verifica_endereco">
                                      <input type="text" name="endereco" class="control" id="campo_endereco" autocomplete="off" required>
                                      <label>Endereço</label>
                                      <i><img src="../Imagens/error.png" id="icon_error_endereco" title="Preencher Campo Obrigatório!!"></i>
                                   </div>
                                 </div>
                                
                                  <div class="group">
                                   <div class="verifica_cidade">
                                      <input type="cidade" name="cidade" class="control" id="campo_cidade" autocomplete="off" required>
                                      <label>Cidade</label>
                                      <i><img src="../Imagens/error.png" id="icon_error_cidade" title="Preencher Campo Obrigatório!!"></i>
                                   </div>
                                 </div>
                                                                  
                                 <div class="group">
                                   <div class="verifica_estado">
                                      <input type="estado" name="estado" class="control" id="campo_estado" autocomplete="off" required>
                                      <label>Estado</label>
                                      <i><img src="../Imagens/error.png" id="icon_error_estado" title="Preencher Campo Obrigatório!!"></i>
                                   </div>
                                 </div>
                                 
                                 <div class="group">
                                   <div class="verifica_email">
                                      <input type="email" name="email" class="control" id="campo_email" autocomplete="off" required>
                                      <label>E-mail</label>
                                      <i><img src="../Imagens/error.png" id="icon_error_email" title="Preencher Campo Obrigatório!!"></i>
                                   </div>
                                 </div>
                                 
                                 <div class="group">
                                   <div class="verifica_telefone">
                                      <input type="telefone" name="telefone" class="control" id="campo_telefone" autocomplete="off" required>
                                      <label>Telefone</label>
                                      <i><img src="../Imagens/error.png" id="icon_error_telefone" title="Preencher Campo Obrigatório!!"></i>
                                   </div>
                                 </div>

                                 <div class="group">
                                   <div class="verifica_nome">
                                      <input type="text" name="site" class="control" id="campo_nome" autocomplete="off" required>
                                      <label> Site </label>
                                      
                                   </div>
                                 </div>
                                                                  
                                 <div class="group">
                                   <div class="verifica_usuario">
                                      <input type="text" name="usuario" class="control" id="campo_usuario" autocomplete="off" required>
                                      <label>Usuário</label>
                                      <i><img src="../Imagens/error.png" id="icon_error_usuario" title="Preencher Campo Obrigatório!!"></i>
                                   </div>
                                 </div>

                                 <div class="group">
                                   <div class="verifica_senha">
                                      <input type="password" name="senha" class="control" id="campo_senha" autocomplete="off" required>
                                      <label>Senha</label>
                                      <i><img src="../Imagens/error.png" id="icon_error_senha" title="Preencher Campo Obrigatório!!"></i>
                                   </div>
                                 </div>

                                 <div class="group m20">
                                    <input type="submit" name="SendCadPet" class="botao" value="Cadastrar &rarr;">
                                 </div>
                            </form>
                         </div>
                </div>                   
             
  </div>

<div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <div class="modal-body" style="text-align: center;border-radius: 20px;" id="quadro">
        <span id="mensagem" style="font-weight: bold;"></span>
      </div>
    </div>
  </div>
</div>

<div class="fundo">
    <footer class="rodape">&copy;aPETrecho 2020 - Todos os direitos reservados</footer>
  </div> 

</body>
   
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
   
<script type="text/javascript">

      
      $(document).ready(function() {
            $(".menu-icon").on("click", function(){
                  $("nav ul").toggleClass("showing");
            });
      });

      
        function mostrar(element,error){
          element.css('border-bottom','1px solid red');
          element.css('border-radius','5px');
          error.css('visibility','visible');  
       }

      
       function retirar(element,error){
           element.css('border','none');
           error.css('visibility','hidden'); 
       }


      $('.botao').click(function(){

        var nome = $('#campo_nome').val();
        var cpf = $('#campo_cpf').val();
        var endereco = $('#campo_endereco').val();
        var cidade = $('#campo_cidade').val();
        var estado = $('#campo_estado').val();
        var telefone = $('#campo_telefone').val();
        var email = $('#campo_email').val();
        var usuario = $('#campo_usuario').val();
        var senha = $('#campo_senha').val();

        var form =  $('#formulario').serialize();

        if(nome == ''){
          mostrar($('.verifica_nome'),$('#icon_error_nome'));
          $('#campo_nome').focus();
        }else{
          retirar($('.verifica_nome'),$('#icon_error_nome'));
        
        if(cpf == ''){
              mostrar($('.verifica_cpf'),$('#icon_error_cpf'));
              $('#campo_cpf').focus();
        }else{
              retirar($('.verifica_cpf'),$('#icon_error_cpf'));
            
        if(email == ''){
          mostrar($('.verifica_email'),$('#icon_error_email'));
          $('#campo_email').focus();
        }else{
          retirar($('.verifica_email'),$('#icon_error_email'));
        
        if(endereco == ''){
              mostrar($('.verifica_endereco'),$('#icon_error_endereco'));
              $('#campo_endereco').focus();
        }else{
              retirar($('.verifica_endereco'),$('#icon_error_endereco'));

        if(cidade == ''){
              mostrar($('.verifica_cidade'),$('#icon_error_cidade'));
              $('#campo_cidade').focus();
        }else{
              retirar($('.verifica_cidade'),$('#icon_error_cidade'));
        if(estado == ''){
              mostrar($('.verifica_estado'),$('#icon_error_estado'));
              $('#campo_estado').focus();
        }else{
              retirar($('.verifica_estado'),$('#icon_error_estado'));
        if(telefone == ''){
              mostrar($('.verifica_telefone'),$('#icon_error_telefone'));
              $('#campo_telefone').focus();
        }else{
              retirar($('.verifica_estado'),$('#icon_error_estado'));
        if(email == ''){
          mostrar($('.verifica_email'),$('#icon_error_email'));
          $('#campo_email').focus();
        }else{
          retirar($('.verifica_email'),$('#icon_error_email'));
        
        if(senha == ''){
              mostrar($('.verifica_senha'),$('#icon_error_senha'));
              $('#campo_senha').focus();
        }else{
              retirar($('.verifica_senha'),$('#icon_error_senha'));

        $.ajax({
                        url: '../Login/AutenticarLogin.php',
                        method: 'POST',
                        dataType: 'JSON',
                        data: form,
                        success: function(response){

                          if(response.status == false){

                               
                               $('#modalConfirm').modal('show');
                               $('#mensagem').text('USUÁRIO E/OU SENHA INCORRETOS!!');
                               $('.modal-body').css('background','#FF4000'); 

                               window.setTimeout(function(){
                                $('#modalConfirm').modal('hide');
                               },2000);     

                          }else{

                             if(response.tipoUser == 'Parceiro'){ 

                                 
                                 $('#modalConfirm').modal('show');
                                 $('#mensagem').text('LOGADO!!');
                                 $('.modal-body').css('background','#D0F5A9'); 

                                 window.setTimeout(function(){
                                    $('#modalConfirm').modal('hide');
                                 },2100);

                                 
                                 $('#formulario')[0].reset();

                                 
                                   window.location = '../views/PrincipalParceiro.php';

                             }else{

                              if(response.tipoUser == 'Administrador'){

                                
                                window.location = '../Telas/PrincipalAdministrador.php';

                              }else{

                                   
                                   $('#modalConfirm').modal('show');
                                   $('#mensagem').text('LOGADO!!');
                                   $('.modal-body').css('background','#D0F5A9'); 

                                   window.setTimeout(function(){
                                    $('#modalConfirm').modal('hide');
                                   },2100);

                                  //LIMPAR CAMPOS AUTOMATICAMENTE
                                  $('#formulario')[0].reset();

                                  //ONG LOGAR NA CONTA COM SUCESSO
                                  window.location = '../Telas/PrincipalOng.php';

                              }

                             } 
                             
                          }        

                       },error: function(e){
                               $('#exampleModal').modal('show');
                               $('#mensagem').text('*ERROR DE ENVIO*: '+e.responseText+'/n *CODIGO*: '+e.status);
                               $('.modal-body').css('background','#FA5858'); 
                        }
                 });
              }
           }
       });
  </script>
  <script type="text/javascript">
      
            $('#campo_nome').keyup(function(){

                  if($('#campo_nome').val() == ''){
                     mostrar($('.verifica_nome'),$('#icon_error_nome'));
                  }else{
                     retirar($('.verifica_nome'),$('#icon_error_nome'));
                  }
            });

             $('#campo_cpf').keyup(function(){

                  if($('#campo_cpf').val() == ''){
                     mostrar($('.verifica_cpf'),$('#icon_error_cpf'));
                  }else{
                     retirar($('.verifica_cpf'),$('#icon_error_cpf')); 
                  }
            });
             $('#campo_endereco').keyup(function(){

                  if($('#campo_endereco').val() == ''){
                     mostrar($('.verifica_endereco'),$('#icon_error_endereco'));
                  }else{
                     retirar($('.verifica_endereco'),$('#icon_error_endereco'));
                  }
            });

             $('#campo_cidade').keyup(function(){

                  if($('#campo_cidade').val() == ''){
                     mostrar($('.verifica_cidade'),$('#icon_error_cidade'));
                  }else{
                     retirar($('.verifica_cidade'),$('#icon_error_cidade')); 
                  }
            });
             $('#campo_estado').keyup(function(){

                  if($('#campo_estado').val() == ''){
                     mostrar($('.verifica_estado'),$('#icon_error_estado'));
                  }else{
                     retirar($('.verifica_estado'),$('#icon_error_estado'));
                  }
            });

             $('#campo_telefone').keyup(function(){

                  if($('#campo_telefone').val() == ''){
                     mostrar($('.verifica_telefone'),$('#icon_error_telefone'));
                  }else{
                     retirar($('.verifica_telefone'),$('#icon_error_telefone')); 
                  }
            });
             $('#campo_email').keyup(function(){

                  if($('#campo_email').val() == ''){
                     mostrar($('.verifica_email'),$('#icon_error_email'));
                  }else{
                     retirar($('.verifica_email'),$('#icon_error_email'));
                  }
            });

             
             $('#campo_usuario').keyup(function(){

                  if($('#campo_usuario').val() == ''){
                     mostrar($('.verifica_usuario'),$('#icon_error_usuario'));
                  }else{
                     retirar($('.verifica_usuario'),$('#icon_error_usuario'));
                  }
            });

             $('#campo_senha').keyup(function(){

                  if($('#campo_senha').val() == ''){
                     mostrar($('.verifica_senha'),$('#icon_error_senha'));
                  }else{
                     retirar($('.verifica_senha'),$('#icon_error_senha')); 
                  }
            });
      
  </script>
</html> 