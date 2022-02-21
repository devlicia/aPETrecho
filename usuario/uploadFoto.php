<?php
session_start();
include_once "../banco/conexao.php";



//Verifica se o usuário clicou no botão 
$enviarFoto = filter_input(INPUT_POST, 'enviarFoto', FILTER_SANITIZE_STRING);
if($enviarFoto) {
//Receber os dados do formulário//
$imagem = $_FILES['imagem']['name'];
//Caminho da pasta
$folder ="../avatar/"; 
$path = $folder . $imagem ; 


//Inserir no banco
move_uploaded_file($_FILES['imagem']['tmp_name'], $path);
$res = "UPDATE usuarios SET imagem=:imagem WHERE id = " . $_SESSION['logado']['id'];
$update = $pdo->prepare($res);
$update->bindParam(':imagem', $imagem);


if($update->execute()) {
    $_SESSION['msg'] = " <p style='color:green; text-align: center;'> Sua foto foi carregada com sucesso. </p>";
    header("Location: EdtUsuario.php");
    exit;
}

}

?>