<div class="container">
    <div class="cadastro_form">
<h3>Trocar a senha</h3>

        <?php if($erro): ?>
            <div class="erro">
                <h3><?php echo $erro; ?></h3>
            </div><!--erro-->
        <?php endif; ?>

<form method="post">
    <input type="password" name="senha1" placeholder="Digite a nova senha">
    <input type="password" name="senha2" placeholder="Confirme a sua senha">
    <input type="submit" name="acao" value="Trocar Senha">
</form>
        </div><!--cadastro_form-->
</div><!--container-->