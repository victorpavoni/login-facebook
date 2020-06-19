<!DOCTYPE html>
<html>
	<head>
		<title>Facebook - entre ou cadastre-se</title>
		<meta charset="utf-8">
		<meta name="author" content="EliteX">
		<meta name="description" content="Facebook tela de login">
		<meta name="keywords" content="facebook,login,tela,cadastrar">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximun-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet"> 
	</head>
	<body>
		<div class="header">
			<div class="center">
				<div class="header-title">
					<a href="#">facebook</a>
				</div>	
				<form method="post" class="form-login">
					<div class="login-email-tel">
						<span>Email ou telefone</span>
						<input type="text" name="email_tel" autofocus>
					</div> <!-- login-email-tel -->
					<div class="login-senha">
						<span>Senha</span>
						<input type="text" name="senha">
					</div> <!-- login-senha -->
					<div class="login-submit">
						<input type="submit" name="login_submit" value="Entrar">
					</div> <!-- login-submit -->
					<a href="#" class="forget">Esqueceu a conta?</a>
				</form> <!-- form-login -->
			</div> <!-- center -->
		<div class="clear"></div> <!-- clear -->
		</div> <!-- header -->
		<div class="main">
				<div class="clear"></div><!-- clear -->
			
			<div class="center">
				<div class="network">
					<p>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
					<div class="img-network">
						<img src="images/face_img.png">
					</div> <!-- img-network -->
				</div> <!-- network -->
				<div class="abrir-conta">
					<h2>Abra uma conta</h2>
					<p>É rápido e fácil.</p>
					<form method="post" class="form-cadastro">
						<div class="form-input">
							<div class="input-split">
								<input type="text" name="nome" placeholder="Nome">
								<input type="text" name="sobrenome" placeholder="Sobrenome">
							</div> <!-- input-split -->
							<div class="input-full">
								<input type="text" name="email_cel" placeholder="Celular ou email">
								<input type="text" name="nova_senha" placeholder="Nova senha" class="last">
							</div> <!-- input-full -->
							<div class="data-nascimento">
								<span style="color:#90949c;font-weight:bold;margin-bottom:5px;display:block">Data de nascimento</span>
								<div class="input-full">
									<select name="nascimento-dia" class="nascimento" style="margin-right: -5px">
										<?php for($i = 1; $i < 31; $i++){ ?>
										<option value="<?php echo $i; ?>"><?php echo $i;?></option>
										<?php } ?>
									</select> <!-- dia -->
									<select name="nascimento-mes" class="nascimento" style="margin-right: -6px">
										<!-- Aplicar php -->
										<option value="0">Janeiro</option>
									</select> <!-- mes -->
									<select name="nascimento-ano" class="nascimento" style="margin-right: -4px">
										<?php for($i = 1905; $i <= 2020; $i++){ ?>
										<option value="<?php echo $i; ?>"><?php echo $i;?></option>
										<?php } ?>
									</select> <!-- ano -->
								</div><!-- input-full -->	
							</div><!-- data-nascimento -->
							<div class="genero">
								<span style="color:#90949c;font-weight:bold;margin-bottom:5px;margin-top:15px;display:block">Gênero</span>
								<div class="input-radio">
									<input type="radio" name="genero" id="fem" value="0">
									<label for="fem">Feminino</label>
									<input type="radio" name="genero" id="mas" value="1">
									<label for="mas">Masculino</label>
								</div> <!-- input-radio -->
							</div><!-- genero -->
							<div class="info">
								<p>
									Ao clicar em Cadastre-se, você concorda com nossos <a href="">Termos</a>, <a href="">Política de Dados</a> e <a href="">Política de Cookies</a>. Você pode receber notificações por SMS e pode cancelar isso quando quiser.
								</p>
							</div>
							<div class="submit-login">
								<input type="submit" name="submit" value="Cadastre-se">
							</div> <!-- submit-login -->
							<div class="criar_pag">
								<p><a href="">Criar uma Página</a> para uma celebridade, banda ou empresa.</p>
							</div><!-- criar_pag -->
						</div>
					</form> <!-- form-cadastro -->
				</div> <!-- abrir-conta -->
			</div> <!-- center -->
			<div class="clear"></div> <!-- clear -->
		</div> <!-- main -->
		<div class="footer">
			<div class="center">
				<ul class="first">
					<li style="color: #737373;">Português (Brasil)</li>
					<li><a href="">English (US)</a></li>
					<li><a href="">Italiano</a></li>
					<li><a href="">Español</a></li>
					<li><a href="">Français (France)</a></li>
					<li><a href="">العربية</a></li>
					<li><a href="">Deutsch</a></li>
					<li><a href="">हिन्दी</a></li>
					<li><a href="">中文(简体)</a></li>
					<li><a href="">日本語</a></li>
				</ul>
				<div class="tags">
					<ul>
						<li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                   	    <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
					</ul>
				</div>
				<div class="tm">
					<p style="color: #737373; font-size: 11px">Facebook &copy; 2020</p>
				</div><!-- tm -->
			</div><!-- center -->
		</div><!-- footer -->
	</body>
</html>