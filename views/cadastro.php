<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Controle Financeiro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/animsition/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/select2/select2.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/cadastro.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Bem Vindo!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Digite seu nome!">
					<span class="label-input100">Nome</span>
					<input class="input100" type="text" name="name" placeholder="Digite seu nome">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Digite um email válido: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Digite seu email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Mínimo 4 caracteres!">
					<span class="label-input100">Senha</span>
					<input class="input100" type="password" name="email" placeholder="Digite sua senha">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Mínimo 4 caracteres!">
					<input class="input100" type="password" name="email" placeholder="Confirme sua senha">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Cadastrar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="<?php echo BASE_URL; ?>assets/js/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo BASE_URL; ?>assets/js/animsition/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo BASE_URL; ?>assets/js/bootstrap/popper.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/bootstrap/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo BASE_URL; ?>assets/js/select2/select2.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/cadastro.js"></script>
</body>
</html>
