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
                    <li><a href="../usuario/edtUsuario.php">PERFIL</a></li>
                    <li><a href="../postagens/formulario.php"> CADASTRAR PUBLICAÇÃO </a></li>
                    <li><a href="../usuario/publicacoes.php"> MINHAS PUBLICAÇÕES </a></li>
                    <li><a href="../usuario/Sair.php">SAIR</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <?php
    include "../banco/conexao.php";
    $res = "SELECT * FROM postagem";
    $res = $pdo->prepare($res);
    $res->execute();
    ?>


    <div id="postagens">
        <div class="foto">
            <?php while ($row = $res->fetch(PDO::FETCH_ASSOC)) { ?>
                <img src="../uploads/<?php echo $row['imagem']; ?>" width=auto height="200" href="#addInfoModal" data-toggle="modal" style="cursor: pointer;">
                <hr>
        </div>




        <div id="addInfoModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"> Dados do Animal </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <table>
                            <tbody>
                                
                                <tr>

                                    <td class="h6"><strong> Localização: </strong></td>
                                    <td><?php echo $row['local']; ?> </td>

                                </tr>

                                <tr>
                                    <td class="h6"><strong> Espécie: </strong></td>
                                    <td><?php echo $row['especie']; ?> </td>
                                </tr>

                                <tr>
                                    <td class="h6"><strong> Sexo: </strong></td>
                                    <td><?php echo $row['sexo']; ?> </td>

                                </tr>

                                <tr>
                                    <td class="h6"><strong> Idade: </strong></td>
                                    <td><?php echo $row['idade']; ?> </td>

                                </tr>

                                <tr>
                                    <td class="h6"><strong>Tamanho:</strong></td>
                                    <td><?php echo $row['tamanho']; ?> </td>

                                </tr>

                                <tr>
                                    <td class="h6"><strong> Raça: </strong></td>
                                    <td><?php echo $row['raca']; ?> </td>

                                </tr>

                                <tr>
                                    <td class="h6"><strong> Informações Adicionais: </strong></td>
                                    <td><?php echo $row['info']; ?> </td>
                                </tr>
                            



                            </tbody>
                        </table>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</div>
</div>



</body>

</html>