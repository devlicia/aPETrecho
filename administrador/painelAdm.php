<?php

session_start();

if(!isset($_SESSION['logado'])){
      header("Location: Login.php");
}
if($_SESSION['logado']['nivel'] != "3"){
      header("Location: ../views/Login.php");
}

include_once "../banco/conexao.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Painel do Administrador </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/painelAdm.css">
    <link rel="stylesheet" href="../css/tabelaAdm.css">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/e9cda1e4b0.js" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h5> Painel do Administrador </h5>
            </div>

            <ul class="list-unstyled components">
                        <li>
                            <a href="#"> Verificar Denúncias </a>
                        </li>
                        
                        <li>
                            <a id="out" href="sairAdm.php"> Desconectar </a>
                        </li>
                    </ul>
               
        </nav>

        <!-- CONTEÚDO DA PÁGINA  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                   
                </div>
            </nav>

            <!-- TABELA -->
            <div class="container">
                    <div class="table-wrapper">
                    <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b> Usuários </b></h2>
					</div>
					<div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span> Cadastrar </span></a>
                        <a href="#" class="btn btn-primary"><i class="fas fa-filter"></i></a>
					</div>
                </div>
            </div>
            <!-- SELECIONAR REGISTROS -->
            <?php 
            $res = "SELECT * FROM usuarios"; 
            $res = $pdo->prepare($res);
            $res->execute();
            ?>
            <table class="table table-striped table-hover">
                <thead>
                    	<tr>
                        <th>Nome</th>
                        <th>CPF</th>
						<th>E-mail</th>
                        <th>Usuário</th>
                        <th>Nível</th>
                        <th>Ações</th>
                    	</tr>
                </thead>
                <tbody>
                <!-- EXIBIR REGISTROS -->
                <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row['nome'];?></td>
                        <td><?php echo $row['cpf'];?></td>
						<td><?php echo $row['email'];?></td>
                        <td><?php echo $row['usuario'];?></td>
                        <td><?php echo $row['nivel'];?></td>
                        <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Desativar">&#xE872;</i></a>
                        </td>
                    </tr>
                <?php } ?>
                   
                </tbody>
            </table>

    <!-- CADASTRAR -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="cadastrarAdm.php" method="POST">
					<div class="modal-header">				
                        <h4 class="modal-title"> Cadastro </h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <p style="font-size: 16px; text-align: center";> Você está cadastrando um usuário de nível Administrador. </p>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome</label>
							<input type="text" name="nome" class="form-control" required>
						</div>
						<div class="form-group">
							<label>CPF</label>
							<input type="text" name="cpf" class="form-control" required>
						</div>
						<div class="form-group">
							<label>E-mail</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Usuário</label>
							<input type="text" name="usuario" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
							<label>Senha</label>
							<input type="password" name="senha" class="form-control" required>
						</div>							
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" name="cadastrar" value="Cadastrar">
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
    </div>
    



    <!-- EDITAR -->
    <div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">

					<div class="modal-header">						
						<h4 class="modal-title">Editar Usuário</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>

					<div class="modal-body">					
						<div class="form-group">
                        <form action="" method="POST">
							<label>Nome</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>CPF</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>E-mail</label>
							<input type="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Usuário</label>
							<input type="text" class="form-control">
						</div>		

					</div>

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" name="editar" value="Editar">
					</div>

				</form>
			</div>
		</div>
	</div>


	<!-- DESATIVAR -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title"> Atenção! </h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p style="font-size: 20px; color: red;"><small> Você tem certeza de que deseja desativar este usuário?
                            O usuário não poderá acessar o sistema. </p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Confirmar">
					</div>
				</form>
			</div>
		</div>
	</div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>


</html>