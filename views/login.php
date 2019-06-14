<div class="container">
	<div class="login">
		<img src="<?php echo BASE_URL; ?>assets/images/Logo_trinity.png" alt="Logo da Trinity">
		<h2><i class="fa fa-sign-in" aria-hidden="true"></i> Login</h2>
		<?php if(!empty($erro)): ?>
			<div class="erro"><?php echo $erro; ?></div>
		<?php endif; ?>
		<form method="POST">
			<div class="form-control">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<input type="email" name="email" placeholder="E-mail" required>
			</div><!--form-control-->
			<div class="form-control">
				<i class="fa fa-unlock" aria-hidden="true"></i>
				<input type="password" name="senha" placeholder="Senha" required>
			</div><!--form-control-->
			<div class="form-control">
				<input type="submit" name="acao" value="Login">
				<label>Lembrar-me</label>
				<input type="checkbox" name="lembrar">
			</div><!--form-control-->
			<div class="clear"></div>
			<div class="esqueci">
				<a href="<?php echo BASE_URL; ?>login/esqueci">Esqueci minha senha</a>
			</div>
		</form>
	</div><!--login-->
</div><!--container-->