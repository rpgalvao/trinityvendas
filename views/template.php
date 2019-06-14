<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Contatos Congresso</title>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
		<link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/Trinity.ico">
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="menu">
				<img src="<?php echo BASE_URL; ?>assets/images/Logo_trinity.png" alt="">
				<h2>Sistema de Prospecção de Clientes</h2>
				<nav class="desktop">
					<ul>
						<a href="<?php echo BASE_URL; ?>"><li>Home</li></a>
						<a href="<?php echo BASE_URL; ?>cadastro"><li>Cadastrar Cliente</li></a>
						<?php $u = new Usuarios();
							if($u->verificarAdmin()): ?>
						<a href="<?php echo BASE_URL; ?>admin"><li>ADMIN</li></a>
						<?php endif; ?>
						<a href="<?php echo BASE_URL; ?>login/trocarSenha"><li>Trocar Senha</li></a>
						<a href="<?php echo BASE_URL; ?>login/sair"><li>Sair</li></a>
					</ul>
				</nav><!--desktop-->
				<nav class="mobile">
					<h2><i class="fa fa-bars" aria-hidden="true"></i></h2>
					<ul>
						<a href="<?php echo BASE_URL; ?>"><li>Home</li></a>
						<a href="<?php echo BASE_URL; ?>cadastro"><li>Cadastrar Cliente</li></a>
						<?php $u = new Usuarios();
							if($u->verificarAdmin()): ?>
						<a href="<?php echo BASE_URL; ?>admin"><li>ADMIN</li></a>
						<?php endif; ?>
						<a href="<?php echo BASE_URL; ?>login/trocarSenha"><li>Trocar Senha</li></a>
						<a href="<?php echo BASE_URL; ?>login/sair"><li>Sair</li></a>
					</ul>
				</nav><!--mobile-->
				<div class="clear"></div>
			</div><!--menu-->
			<hr>
			<p>
				<?php $this->loadViewInTemplate($viewName, $viewData); ?>
			</p>
		</div><!--container-->
	</body>
</html>