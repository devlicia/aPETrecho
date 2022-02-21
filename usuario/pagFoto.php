<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--- FOTO ---->
    <div class="form-group">
    <form action="uploadFoto.php" method="POST" enctype="multipart/form-data">
    <p class="small"> Selecione uma foto. </p>
    <input type="file" name="imagem" id="imagem">
    <input type="submit" name="enviarFoto" value="Enviar">
    </div>
    </form>

</body>
</html>