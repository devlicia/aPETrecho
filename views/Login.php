<?php
session_start();

if (isset($_SESSION['logado'])) {
	switch ($_SESSION['logado']['nivel']) {
		case 0:
			$rota = "Location: ../views/Feed.php";
			break;
		case 1:
			$rota = "Location: ../views/Feed.php";
			break;
		case 2:
			$rota = "Location: ../views/Feed.php";
			break;
		case 3:
			$rota = "Location: ../administrador/painelAdm.php";
			break;
		default:
			$rota = "Location: ../views/Login.php";
			break;
	}
	header($rota);
}
?>
 
<!DOCTYPE html>
<html>

<head>
	<title>Bem-vindo ao aPETrecho!</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style_login.css">
</head>

<body>
	<header>
		<nav class="black">
			<div class="menu-icon">
				<i class="fa fa-bars fa-2x"></i>
			</div>

			<div class="logo">
				<a href="../views/Index.php"> <img src="../Imagens/logo.png"></a>
			</div>

			<div class="menu">
				<ul>
					<li><a href="../views/Index.php">HOME</a></li>
					<li><a href="../views/quem-somos.php">QUEM SOMOS</a></li>
					<li><a href="../views/Cadastros.php">Cadastre-se</a></li>
					<li><a href="../views/Login.php">LOGIN</a></li>
				</ul>
			</div>
		</nav>


	</header>

	<div>
		<div id="img01"></div>
	</div>
	<div class="tela">
		<div class="form">
			<div class="form-section">

				<div class="group_title">
					<h3 class="heading">LOGIN</h3>
					<hr style="width: 30%;margin-top: 0;">
				</div>

				<form id="formulario" method="POST" action="../controller/Auth.php">

					<div class="group">
						<div class="verifica_email">
							<input type="text" name="usuario" class="control" id="campo_usuario" autocomplete="off" required>
							<label>Usuário</label>

						</div>
					</div>

					<div class="group">
						<div class="verifica_senha">
							<input type="password" name="senha" class="control" id="campo_senha" autocomplete="off" required>
							<label>Senha</label>

						</div>
					</div>
					<div class="group m20">
						<input type="submit" name="btn" class="botao" value="Login &rarr;">
					</div>
				</form>
			</div>
		</div>

	</div>

	<div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="border-radius: 20px;">
				<div class="modal-body" style="text-align: center;border-radius: 20px;" id="quadro">
					<span id="mensagem" style="font-weight: bold;"></span>
				</div>
			</div>
		</div>
	</div>


	<div class="fundo">
		<footer class="rodape">&copy;aPETrecho 2020 - Todos os direitos reservados</footer>
	</div>

</body>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".menu-icon").on("click", function() {
			$("nav ul").toggleClass("showing");
		});
	});


	function mostrar(element, error) {
		element.css('border-bottom', '1px solid red');
		element.css('border-radius', '5px');
		error.css('visibility', 'visible');
	}


	function retirar(element, error) {
		element.css('border', 'none');
		error.css('visibility', 'hidden');
	}


	$('.botao').click(function() {

		var usuario = $('#campo_usuario').val();
		var senha = $('#campo_senha').val();

		var form = $('#formulario').serialize();

		if (usuario == '') {
			mostrar($('.verifica_usuario'), $('#icon_error_usuario'));
			$('#campo_usuario').focus();
		} else {
			retirar($('.verifica_usuario'), $('#icon_error_usuario'));
			if (senha == '') {
				mostrar($('.verifica_senha'), $('#icon_error_senha'));
				$('#campo_senha').focus();
			} else {
				retirar($('.verifica_senha'), $('#icon_error_senha'));

				$.ajax({
					url: '../Login/AutenticarLogin.php',
					method: 'POST',
					dataType: 'JSON',
					data: form,
					success: function(response) {

						if (response.status == false) {

							//SE HOUVER ERRO AO LOGAR
							$('#modalConfirm').modal('show');
							$('#mensagem').text('USUARIO E/OU SENHA INCORRETOS!!');
							$('.modal-body').css('background', '#FF4000');

							window.setTimeout(function() {
								$('#modalConfirm').modal('hide');
							}, 2000);

						} else {

							if (response.tipoUser == 'Anunciante') {


								$('#modalConfirm').modal('show');
								$('#mensagem').text('LOGADO!!');
								$('.modal-body').css('background', '#D0F5A9');

								window.setTimeout(function() {
									$('#modalConfirm').modal('hide');
								}, 2100);


								$('#formulario')[0].reset();


								window.location = '../Telas/PrincipalAnunc.php';

							} else {

								if (response.tipoUser == 'Administrador') {


									window.location = '../Telas/AcessoAdministrador.php';

								} else {


									$('#modalConfirm').modal('show');
									$('#mensagem').text('LOGADO!!');
									$('.modal-body').css('background', '#D0F5A9');

									window.setTimeout(function() {
										$('#modalConfirm').modal('hide');
									}, 2100);


									$('#formulario')[0].reset();


									window.location = '../Telas/PrincipalDesen.php';

								}

							}

						}

					},
					error: function(e) {
						$('#exampleModal').modal('show');
						$('#mensagem').text('*ERROR DE ENVIO*: ' + e.responseText + '/n *CODIGO*: ' + e.status);
						$('.modal-body').css('background', '#FA5858');
					}
				});
			}
		}
	});
</script>
<script type="text/javascript">
	$('#campo_usuario').keyup(function() {

		if ($('#campo_usuario').val() == '') {
			mostrar($('.verifica_usuario'), $('#icon_error_usuario'));
		} else {
			retirar($('.verifica_usuario'), $('#icon_error_usuario'));
		}
	});

	$('#campo_senha').keyup(function() {

		if ($('#campo_senha').val() == '') {
			mostrar($('.verifica_senha'), $('#icon_error_senha'));
		} else {
			retirar($('.verifica_senha'), $('#icon_error_senha'));
		}
	});
</script>

</html>