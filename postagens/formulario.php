<?php 
session_start();
if(!isset($_SESSION['logado'])){
    header("Location: Login.php");
}
if($_SESSION['logado']['nivel'] != "1"){
    header("Location: ../views/Login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulário de Adoção </title>
    <link rel="stylesheet" href="../css/formulario.css">
    <!-- BOOTSTRAP -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
                              <li><a href="../postagens/postagens.php"> PUBLICAÇÕES </a></li>
                              <li><a href="../usuario/Sair.php">SAIR</a></li>
                        </ul>
                  </div>
            </nav>
    </header>

<!-- INÍCIO DO FORMULÁRIO -->
<div class="container">
<h4> Para registrar um animal para a adoção, é necessário preencher todas as informações a seguir. </h4>
<hr>


<div class="form-group">
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="especie" class="control-label">Espécie</label> 
    <select id="especie" name="especie" style="width: 15%;" required="required" class="select form-control">
        <option value="" disabled selected> Selecione...</option>
        <option value="Gato">Gato</option>
        <option value="Cachorro">Cachorro</option>
    </select>
</div> 


<!-- TAMANHO -->
<div class="form-group">
    <label for="tamanho" class="control-label">Tamanho</label> 
    <select id="tamanho" name="tamanho" style="width: 15%;" required="required" class="select form-control">
      <option value="" disabled selected>Selecione...</option>
      <option value="Grande">Grande</option>
      <option value="Médio">Médio</option>
      <option value="Pequeno">Pequeno</option>
    </select>
</div> 



<!-- IDADE -->
<div class="form-group">
<div class="form-group">
    <label for="idade" class="control-label">Idade</label> 
    <input id="idade" name="idade" type="text" style="width: 15%;" class="form-control" aria-describedby="idadeHelpBlock" required="required"> 
    <span id="idadeHelpBlock" class="help-block">Em meses ou anos.</span>
  </div> 
</div> 


<!-- SEXO -->
<div class="form-group">
<label for="sexo" class="control-label">Sexo</label> 
  <select id="sexo" name="sexo" style="width: 15%;" class="select form-control" required="required">
      <option value="" disabled selected>Selecione...</option>
      <option value="Macho">Macho</option>
      <option value="Fêmea">Fêmea</option>
    </select>
</div>


<hr>
<h4> Finalizando... </h4>
<div class="form-group">
    <label for="breed" class="control-label">Raça</label> 
    <input id="raca" name="raca" type="text" style="width: 15%;" class="form-control" aria-describedby="breedHelpBlock" required="required"> 
    <span id="breedHelpBlock" class="help-block">O animal a ser registrado é de raça? Se sim, especifique qual. Caso contrário, digite apenas "SRD" (Sem Raça Definida).</span>
</div> 

<div class="form-group">
<label for="info" class="control-label">Informações Adicionais</label> 
<textarea id="info" name="info" cols="40" rows="3" style="width: 15%;" class="form-control" required="required" aria-describedby="infoHelpBlock"></textarea> 
<span id="infoHelpBlock" class="help-block">Descreva o comportamento do animal, a sua história, e outros detalhes que desejar. Inclua também o histórico veterinário (se é castrado, vermifugado, etc).</span>
</div> 

<div class="form-group">
    <label for="local" class="control-label">Localização</label> 
    <select id="local" name="local" style="width: 15%;" class="select form-control" required="required">
      <option value="" disabled selected>Selecione...</option>
      <option value="Icó - CE">Icó - CE </option>
      <option value="Cedro - CE">Cedro - CE</option>
    </select>
</div> 


<!--- FOTO ---->
<div class="form-group">
    <input type="file" name="imagem" id="imagem"> 
    <p class="small"> Para finalizar, selecione uma foto, em boa qualidade. </p>
</div>


<!-- BOTÃO -->
<div class="form-group">
<input type="submit" name="cadastrarPet" value="Salvar">
</div>

<div class="form-group">
<input type="reset" name="cancelar" value="Cancelar">
</div>
</form>

</body>
</html>