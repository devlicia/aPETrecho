<?php 
session_start();
if(!isset($_SESSION['logado'])){
    header("Location: Login.php");
}
if($_SESSION['logado']['nivel'] != "2"){
    header("Location: ../views/Login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar Promoção </title>
    <link rel="stylesheet" href="../css/formulario.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/e9cda1e4b0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_Postagens.css">
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
                              <li><a href="../usuario/edtUsuario.php">PERFIL</a></li>
                              <li><a href="#"> MINHAS PROMOÇÕES </a></li>
                              <li><a href="../usuario/Sair.php">SAIR</a></li>
                        </ul>
                  </div>
            </nav>
    </header>

<!-- INÍCIO DO FORMULÁRIO -->
<div class="container">
<h6 style="color: black;"> Para cadastrar uma promoção ou oferta, é necessário preencher todas as informações a seguir. </h6>
<hr>


<div class="form-group">
<form action="uploadPromocao.php" method="POST" enctype="multipart/form-data">

<!-- PRODUTO -->
<div class="form-group">
<div class="form-group">
    <label for="produto" class="control-label" style="font-size: 15px; font-weight: bold;"> Produto </label> 
    <input id="produto" name="produto" type="text" style="width: 15%;" class="form-control" required="required"> 
  </div> 
</div> 

<!-- VALOR -->
<div class="form-group">
<div class="form-group">
    <label for="valor" class="control-label" style="font-size: 15px; font-weight: bold;"> Valor do Produto </label> 
    <input id="valor" name="valor" type="text" style="width: 15%;" class="form-control" required="required"> 
    <p class="small"> Valor original do produto. </p>
  </div> 
</div> 


<!-- OFERTA -->
<div class="form-group">
<div class="form-group">
    <label for="oferta" class="control-label" style="font-size: 15px; font-weight: bold;"> Valor da Oferta </label> 
    <input id="oferta" name="oferta" type="text" style="width: 15%;" class="form-control" required="required"> 
    <p class="small"> Valor do produto com o desconto. </p>
  </div> 
</div> 

<!--- FOTO ---->
<div class="form-group">
    <input type="file" name="imagem" id="imagem"> 
    <p class="small"> Selecione uma foto do produto a ser ofertado, em boa qualidade. </p>
</div>


<div class="form-group">
    <label for="local" class="control-label" style="font-size: 15px; font-weight: bold;">Localização</label> 
    <select id="local" name="local" style="width: 15%;" class="select form-control" required="required">
      <option value="" disabled selected>Selecione...</option>
      <option value="Icó - CE">Icó - CE </option>
      <option value="Cedro - CE">Cedro - CE</option>
    </select>
</div> 



<!-- BOTÃO -->
<div class="form-group">
<input type="submit" name="cadastrarPromocao" value="Salvar" class="btn btn-success">
</div>

<div class="form-group">
<input type="reset" name="cancelar" value="Cancelar" class="btn btn-danger">
</div>
</form>

</body>
</html>