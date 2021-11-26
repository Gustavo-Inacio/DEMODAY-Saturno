<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Saturno</title>
	<meta charset="UTF-8">
	<meta  http-equiv = " X-UA-Compatible " content = " IE = edge ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/Logo final transparente 160 x 160 px.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--===============================================================================================-->
</head>
<body style="background-color: #ffffff;">
	<div class="limiter">
		<div class="container-login100">
			<!-- IMAGEM --><div class="login100-more" style="background-image: url('images/Logo\ Final\ com\ fundo.png');"></div> 

			<!-- <div class="logopng" style="background-image: url('images/Logo\ final\ transparente\ 160\ x\ 160\ px.png');"></div>  -->
			<div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-50">
				<form class="login100-form validate-form" method="POST" action="../../logic/entrar.php">
					<span class="login100-form-title p-b-50 ">
						Cronos
					</span>

					<?php if(isset($_GET['status']) && $_GET['status'] == 0){?>
						<div class="alert alert-danger" role="alert">
							Dados incorretos! Tente novamente
						</div>
					<?php } ?>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<!-- PLACEHOLDER -->
						<font class="txt_placeholder" style="vertical-align: inherit;"> Informe seu e-mail</font>
						<input class="input100" type="text" name="email" placeholder="E-mail...">
						<span class="focus-input100"></span>
					</div>
<!-- 
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<font class="txt_placeholder" style="vertical-align: inherit;"> Informe o nome do usuário</font>
						<input class="input100" type="text" name="username" placeholder="Nome do usuário...">
						<span class="focus-input100"></span>
					</div> -->

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<font class="txt_placeholder" style="vertical-align: inherit;"> Informe sua senha</font>
						<input class="input100" type="text" name="pass" placeholder="Senha...">
						<span class="focus-input100"></span>
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<font class="txt_placeholder" style="vertical-align: inherit;">Por favor, repita sua senha</font>
						<input class="input100" type="text" name="repeat-pass" placeholder="Repita a senha...">
						<span class="focus-input100"></span>
					</div> -->

					<div class="flex-m w-full p-b-45">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Eu concordo com os 
									<a href="#" class="txt2 hov1">
										Termos do Usuário
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn me-auto ms-auto">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Entrar
							</button>
						</div>

						<!-- <a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							PPP
							<i class="fa fa-long-arrow-right m-l-5"></i> -->
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>