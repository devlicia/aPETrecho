<?php
session_start();

if(!isset($_SESSION['logado'])){
      header("Location: Login.php");
}
if(!($_SESSION['logado']['nivel'] >= "0" && $_SESSION['logado']['nivel'] <= "2")){
      header("Location: Login.php");
}
require '../banco/conexao.php';


?>

<!DOCTYPE html>
<html>

<head>
      <title>aPETrecho - Feed </title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style_quem.css">
</head>

<body>

      <header>
            <nav class="black">
                  <div class="menu-icon">
                        <i class="fa fa-bars fa-2x"></i>
                  </div>

                  <div class="logo">
                        <a href="Feed.php"> <img src="../Imagens/logo.png"></a>
                  </div>

                  <div class="menu">
                        <ul>
                              <li><a href="../usuario/EdtUsuario.php">PERFIL</a></li>
                              <li><a href="../postagens/postagens.php"> PUBLICAÇÕES </a></li>
                              <li><a href="../petshop/cadastrarPromocao.php"> PROMOÇÕES </a></li>
                              <li><a href="../usuario/Sair.php">SAIR</a></li>
                        </ul>
                  </div>
            </nav>

            <div class="img1">
                  <div class="ptext">
                        <p id="paragrafo">BEM-VINDO</p>
                  </div>
            </div>

      </header>
            
</body>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

 <script type="text/javascript">

     
      $(document).ready(function(){

            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
            
      });

     
  </script>

</html>