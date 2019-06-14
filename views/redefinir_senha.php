<div class="container">
    <div class="login">
        <?php if(!empty($erro)): ?>
        <div class="erro"><?php echo $erro; die(); ?></div>
        <?php endif; ?>
        <?php if(!empty($aviso)): ?>
        <div class="sucesso"><?php echo $aviso; ?><br><br>
            <a href="<?php echo BASE_URL; ?>">Fazer login</a>
        </div>
        <?php endif; ?>
        <h2>Redefinição de Senha</h2>
        <form method="post">
            <div class="form-control">
                <input type="password" name="novaSenha" placeholder="Insira a nova senha" required>
            </div>
            <div class="form-control">
                <input type="submit" value="Redefinir" name="acao">
            </div>
        </form>
    </div>
</div>