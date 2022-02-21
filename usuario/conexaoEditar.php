<?php
session_start();
include_once '../banco/conexao.php';


$editar = filter_input(INPUT_POST, 'editar', FILTER_SANITIZE_STRING);

if ($editar) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = crypt(addslashes(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING)),$security_salt);


    //Editar
    $res = "UPDATE usuarios SET nome=:nome, cpf=:cpf, endereco=:endereco, cidade=:cidade, estado=:estado, 
    telefone=:telefone, email=:email, usuario=:usuario, senha=:senha WHERE id = " . $_SESSION['logado']['id'];

    $update = $pdo->prepare($res);
    $update->bindParam(':nome', $nome);
    $update->bindParam(':cpf', $cpf);
    $update->bindParam(':endereco', $endereco);
    $update->bindParam(':cidade', $cidade);
    $update->bindParam(':estado', $estado);
    $update->bindParam(':telefone', $telefone);
    $update->bindParam(':email', $email);
    $update->bindParam(':usuario', $usuario);
    $update->bindParam(':senha', $senha);

    
    if ($update->execute()) {
        $_SESSION['msg'] = " <p style='color:green; text-align: center;'> Seus dados foram atualizados com sucesso. </p>";
        header("Location: edtUsuario.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red; text-align: center;'> Falha na atualização dos dados. </p>";
        header("Location: edtUsuario.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red; text-align: center;'> Falha na atualização dos dados. </p>";
    header("Location: edtUsuario.php");
}
