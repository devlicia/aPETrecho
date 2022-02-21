<?php 

class Usuario {
    public function login($usuario, $senha){
        global $pdo;
      
        $senha = crypt($senha,$security_salt);

        // VERIFICAR OUTRAS TABELAS //
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("usuario", $usuario);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['idUser'] = $dado['id'];

            return true;
        
        }else{
            return false;
        }
    
        
    }
}

