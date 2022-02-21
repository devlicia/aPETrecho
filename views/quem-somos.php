 
<!DOCTYPE html>
<html>
<head>
      <title>aPETrecho - Faça Sua Parte!</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style_quem.css">
</head>
<body>
      <div>
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
                                    <li><a href="../views/Cadastros.php">Cadastre-se</a></li>
                                    <li><a href="../views/Login.php">LOGIN</a></li>                                                         
                              </ul>
                        </div>
                   </nav>


  <div class="img1">
    <div class="ptext">
        <p id="paragrafo">Faça a sua parte
      </p>
    </div>
  </div>

  <section class="section section-light">
    <div>
      <h2>Você sabia que no Brasil há mais de 30 milhões de animais abandonados nas ruas?</h2>
        <p>
        O aPETrecho é um aplicativo de fácil manuseio que promove a adoção e tem como objetivo facilitar a comunicação entre o doador e quem deseja adotar um pet. Ajude esta causa. Não compre um pet, adote!  
        </p>
      <br>
      <h2>Crie uma conta</h2>
        <p>
        Se você possui uma ONG, um abrigo ou uma associação sem fins lucrativos, utilize desta ferramenta para promover a adoção dos seus animais tutelados. Pet Shops também podem realizar o cadastro para divulgar seus serviços e promoções. Clique em "Cadastre-se" e preencha os seus dados para apoiar essa causa.
        </p>
      <br>
      <h2>Localize a ONG mais próxima</h2>
        <p>
        Saiba quais são as ONGs, os abrigos e as associações sem fins lucrativos da sua cidade, ou região, e entre em contato para dar início ao processo de adoção.  
        </p>  
        <br>
      <h2>Parcerias para pet shops para fomentar seu negócio!</h2>
        <p>
        Parcerias para pet shops visam trazer maior visibilidade para sua loja e/ou clínica veterinária, podendo trazer novos clientes e, até mesmo, engajar sua marca socialmente.
        </p>
        <br>
      <h2>O que isso significa?</h2>
        <p>Que além de você ter um negócio lucrativo, seus clientes saberão que está fazendo algo pelo “bem maior”, como auxiliar a comunidade, promover feiras de adoção, trazer informações para os donos dos pets, entre outras ações.  
        </p> 
  </section>

  <div class="fundo">
    <footer class="rodape">&copy; aPETrecho 2020 - Todos os direitos reservados</footer>
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