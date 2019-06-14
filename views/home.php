<h2 class="welcome">Olá! Seja bem vindo <strong><?php echo $_SESSION['nome']; ?></strong>!</h2>
<div class="clientes">
	<h2><i class="fa fa-address-book-o" aria-hidden="true"></i> Meus Clientes Contactados</h2>
	<table class="dados_clientes">
		<tr>
			<th>Laboratório</th>
			<th>Nome</th>
			<th>Cidade</th>
			<th>Estado</th>
		</tr>
		<?php foreach($clientes as $cliente): ?>
			<tr>
				<td><a href="<?php echo BASE_URL; ?>home/cliente/<?php echo $cliente['id']; ?>"><?php echo $cliente['instituicao']; ?></a></td>
				<td><?php echo $cliente['nome']; ?></td>
				<td><?php echo $cliente['cidade']; ?></td>
				<td><?php echo $cliente['estado']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div><!--clientes-->