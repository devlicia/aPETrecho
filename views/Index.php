<?php

//Restringir usuario quando tiver logado//

?>

<!DOCTYPE html>
<html>

<head>
  <title>Bem-vindo ao aPETrecho!</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style_index.css">
</head>

<body>
  <div>
    <header>

      <nav>
        <div class="menu-icon">
          <i class="fa fa-bars fa-2x"></i>
        </div>

        <div class="logo">
          <a href="#"> <img src="../Imagens/logo.png"></a>
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

      <div class="img1">
        <div class="ptext">
          <a href="Cadastro.php"><span class="border">ADOTE UM AMIGO</span></a>
          <p id="paragrafo">Faça o seu cadastro <BR>e conheça amigos que seguem o perfil que você procura!
          </p>
        </div>
      </div>

      <section class="section section-light">
        <h2>COMO PODEMOS AJUDAR VOCÊ?</h2>
        <p>
          Aqui você pode buscar um amigo para adotar e acompanhá-lo em sua vida ou ajudar a encontrar um dono e um novo lar para um pet.
        </p>
      </section>

      <div class="img2">
        <div class="ptext">
          <a href="#"><span class="border">COMO FUNCIONA</span></a>
        </div>
      </div>

      <section class="section section-light">
        <h2>COMO BUSCAR ANIMAIS PARA ADOTAR</h2>
        <p>
          Para encontrar um pet inscrito, acesse a área ADOTE UM AMIGO e escolha entre as opções disponíveis de espécie, sexo, raça, idade. Clicando em "Buscar" aparecerá uma lista com todas as ONGs. Se gostar de algum basta informar que se interessou pelo animal, clicando no botão disponível ao lado das informações do animal, preencha a mensagem e envie para o responsável.
        </p>
      </section>

      <div class="img3">
        <div class="ptext">
          <a href="Cadastro.php"><span class="border">CADASTRE SUA PETSHOP</span></a>
        </div>
      </div>

      <section class="section section-light">
        <h2>OPTE POR SER UM DE NOSSOS PARCEIROS</h2>
        <p>
          Seja um parceiro, agregue valor ao seu negócio. Integre nossa rede de comunicação para ajudar os peludinhos a terem uma vida feliz, com um lar de verdade e receba todos os benefícios sendo um de nossos parceiros.
          Veja como a publicidade de seu negócio apresentará melhores resultados.
        </p>
      </section>

      <div class="img1">
        <div class="ptext">
          <a href="../views/quem-somos.php"><span class="border">NOS CONHEÇA UM POUCO MAIS</span></a>
        </div>

      </div>

      <div class="fundo">
        <footer class="rodape">&copy; aPETrecho 2020 - Todos os direitos reservados </footer>
      </div>

    </header>
</body>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $(".menu-icon").on("click", function() {
      $("nav ul").toggleClass("showing");
    });

  });


  $(window).on("scroll", function() {
    if ($(this).scrollTop()) {
      $('nav').addClass('black');
    } else {
      $('nav').removeClass('black');
    }
  });
</script>

</html>