<?php
session_start();
unset($_SESSION['logado']);

if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

    require '../banco/conexao.php';
    require 'UsuarioAuth.php';

    $u = new Usuario();

    $usuario = addslashes($_POST['usuario']);

    $senha = crypt(addslashes($_POST['senha']), $security_salt);

    $verifica = $pdo->query("SELECT * FROM usuarios WHERE usuario = '" . $usuario . "' AND senha = '" . $senha . "'");

    $user = $verifica->fetchAll(PDO::FETCH_ASSOC)[0];

    if ($user != null) {
        $rota = "";
        switch ($user['nivel']) {
            //Parceiro
            case 0:
                $rota = "Location: ../views/Feed.php";
                break;

            //ONG
            case 1:
                $rota = "Location: ../views/Feed.php";
                break;

            //Petshop
            case 2:
                $rota = "Location: ../views/Feed.php";
                break;

            //Administrador
            case 3:
                $rota = "Location: ../administrador/painelAdm.php";
                break;
                
            default:
                $rota = "Location: ../views/Login.php";
                break;
        }
        $_SESSION['logado'] = $user;

        header($rota);
    } else {
        header("Location: ../views/Login.php");
    }
} else {

    header("Location: ../views/Login.php");
}
