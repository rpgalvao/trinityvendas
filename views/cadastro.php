<div class="container">
	<div class="cadastro_form">
		<?php if(!empty($erro)): ?>
			<div class="erro">
				<?php echo $erro; ?>
			</div>
		<?php endif; ?>
		<h3>Cadastro de Clientes</h3>

		<form method="POST">
			<input type="text" name="nome" placeholder="Nome do Cliente" required><br>
			<input type="text" name="email" placeholder="E-mail do Cliente"><br>
			<input type="text" name="telefone" placeholder="Telefone" class="telefone"><br>
			<input type="text" name="cidade" placeholder="Cidade"><br>
			<input type="text" name="estado" placeholder="Estado"><br>
			<input type="text" name="instituicao" placeholder="Nome da Instituição" required><br>
			<select name="interesse">
				<option value="Premier Hb9210">HbA1c</option>
				<option value="GeneSys">Ultra² GeneSys</option>
				<option value="Premier Resolution">Premier Resolution</option>
				<option value="TriStat">Tri-stat2</option>
				<option value="Autoimunidade">Autoimunidade</option>
			</select><br>
			<textarea name="obs" placeholder="Observações"></textarea><br>
			<input type="submit" name="acao" value="Cadastrar">
		</form>
	</div><!--cadastro_form-->
</div><!--container-->