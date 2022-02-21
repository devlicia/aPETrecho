<?php 
include_once '../banco/conexao.php';

$SendCadPcr = filter_input(INPUT_POST, 'SendCadPcr', FILTER_SANITIZE_STRING);

if($SendCadPcr) { 
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = crypt(addslashes(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING)), $security_salt);
    $imagem = '../avatar/default.png';

    //Inserir
    $res = "INSERT INTO usuarios (nome, cpf, endereco, cidade, estado, telefone, email, usuario, senha, imagem, nivel) VALUES 
    (:nome, :cpf, :endereco,
    :cidade, :estado, :telefone, :email, :usuario, :senha, :imagem, :nivel)";

    $insert = $pdo->prepare($res);
    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':cpf', $cpf);
    $insert->bindParam(':endereco', $endereco);
    $insert->bindParam(':cidade', $cidade);
    $insert->bindParam(':estado', $estado);
    $insert->bindParam(':telefone', $telefone);
    $insert->bindParam(':email', $email);
    $insert->bindParam(':usuario', $usuario);
    $insert->bindParam(':senha', $senha);
    $insert->bindParam(':imagem', $imagem);
    $insert->bindValue(':nivel', "0");
  

    if($insert->execute()){
        $_SESSION['msg'] = "<p style='color:green;'> Cadastro realizado com sucesso. </p>";
        header("Location: ../views/Cadastros.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'> Falha no cadastro. </p>";
        header("Location: ../views/Cadastros.php");
    }

}else{
    $_SESSION['msg'] = "<p style='color:red;'> Falha no cadastro. </p>";
    header("Location: ../views/Cadastros.php");
}

?>