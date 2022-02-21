<?php 
include_once '../banco/conexao.php';

$cadastrar = filter_input(INPUT_POST, 'cadastrar', FILTER_SANITIZE_STRING);

if($cadastrar) { 
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = crypt(addslashes(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING)), $security_salt);

    //Inserir
    $res = "INSERT INTO usuarios (nome, cpf, email, usuario, senha, nivel) VALUES 
    (:nome, :cpf, :email, :usuario, :senha, :nivel)";

    $insert = $pdo->prepare($res);
    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':cpf', $cpf);
    $insert->bindParam(':email', $email);
    $insert->bindParam(':usuario', $usuario);
    $insert->bindParam(':senha', $senha);
    $insert->bindValue(':nivel', "3");

    if($insert->execute()){
        header("Location: painelAdm.php");
    }else{
        header("Location: painelAdm.php");
    }

    }else{
    header("Location: painelAdm.php");
    }

?>