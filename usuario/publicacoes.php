<?php

session_start();
if(!isset($_SESSION['logado'])){
    header("Location: Login.php");
}
if($_SESSION['logado']['nivel'] != "1"){
    header("Location: ../views/Login.php");
}

include_once "../banco/conexao.php";
$res = "SELECT * FROM postagem";
$res = $pdo->prepare($res);
$res->execute();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bem-vindo ao aPETrecho!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="signin.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6a7ff48011.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                    <li><a href="../postagens/postagens.php">VOLTAR</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="postagens">
        <?php while ($row = $res->fetch(PDO::FETCH_ASSOC)) { ?>

            <div>
                <img src="../uploads/<?php echo $row['imagem']; ?>" width=auto height="200">
                <br>
                <label class="postag"> Localização: <?php echo $row['local']; ?></label><br>
                <label class="postag">Espécie: <?php echo $row['especie']; ?></label><br>
                <label class="postag">Sexo: <?php echo $row['sexo']; ?></label><br>
                <label class="postag">Idade: <?php echo $row['idade']; ?> </label><br>
                <label class="postag">Tamanho: <?php echo $row['tamanho']; ?></label><br>
                <label class="postag">Raça: <?php echo $row['raca']; ?></label><br>
                <label class="postag">Informações: <?php echo $row['info']; ?></label><br>
                <br>

                <a href="#addEditarModal" class="btn btn-primary" data-toggle="modal"><span> Editar</span></a>
                <a href="#addExcluirModal" class="btn btn-danger" data-toggle="modal"><span> Excluir</span></a>

                <hr>
            </div>

            
    </div>
<?php } ?>

</body>