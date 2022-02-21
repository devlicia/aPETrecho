<?php
session_start();
include_once "../banco/conexao.php";
//Verifica se o usuário clicou no botão 
$cadastrarPet = filter_input(INPUT_POST, 'cadastrarPet', FILTER_SANITIZE_STRING);
if($cadastrarPet) {

//Receber os dados do formulário//
$especie = filter_input(INPUT_POST, 'especie', FILTER_SANITIZE_STRING);
$tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$raca = filter_input(INPUT_POST, 'raca', FILTER_SANITIZE_STRING);
$info = filter_input(INPUT_POST, 'info', FILTER_SANITIZE_STRING);
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_STRING);
$imagem = $_FILES['imagem']['name'];

//Caminho da pasta
$folder ="../uploads/"; 
$path = $folder . $imagem ; 

//Inserir no banco
move_uploaded_file($_FILES['imagem']['tmp_name'], $path);
$res = "INSERT INTO postagem (especie, tamanho, idade, sexo, raca, info, local, imagem) VALUES (:especie, :tamanho,
:idade, :sexo, :raca, :info, :local, :imagem)";
$insert = $pdo->prepare($res);
$insert->bindParam(':especie', $especie);
$insert->bindParam(':tamanho', $tamanho);
$insert->bindParam(':idade', $idade);
$insert->bindParam(':sexo', $sexo);
$insert->bindParam(':raca', $raca);
$insert->bindParam(':info', $info);
$insert->bindParam(':local', $local);
$insert->bindParam(':imagem', $imagem);


if($insert->execute()) {
    header("Location: postagens.php");
}

}

?>