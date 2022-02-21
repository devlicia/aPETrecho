<?php
session_start();
include_once "../banco/conexao.php";
//Verifica se o usuário clicou no botão 
$cadastrarPromocao = filter_input(INPUT_POST, 'cadastrarPromocao', FILTER_SANITIZE_STRING);
if($cadastrarPromocao) {

//Receber os dados do formulário//
$produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
$oferta = filter_input(INPUT_POST, 'oferta', FILTER_SANITIZE_STRING);
$imagem = $_FILES['imagem']['name'];
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_STRING);

//Caminho da pasta
$folder ="../fotosPromocao/"; 
$path = $folder . $imagem ; 

//Inserir no banco
move_uploaded_file($_FILES['imagem']['tmp_name'], $path);
$res = "INSERT INTO promocao (produto, valor, oferta, imagem, local) VALUES (:produto, :valor, :oferta, :imagem, :local)";
$insert = $pdo->prepare($res);
$insert->bindParam(':produto', $produto);
$insert->bindParam(':valor', $valor);
$insert->bindParam(':oferta', $oferta);
$insert->bindParam(':imagem', $imagem);
$insert->bindParam(':local', $local);


if($insert->execute()) {
    header("Location: ../views/Feed.php");
}

}

?>