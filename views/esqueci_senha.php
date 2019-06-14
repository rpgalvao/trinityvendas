<div class="container">
    <div class="login">
        <?php if(!empty($info)){
            echo $info;
            die();
        } ?>
        <h2>Insira o e-mail cadastrado</h2>
        <?php if(!empty($erro)): ?>
            <div class="erro"><?php echo $erro; ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="form-control">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="form-control">
                <input type="submit" name="acao" value="Enviar">
                <a href="<?php echo BASE_URL; ?>">Voltar</a>
            </div>
        </form>
    </div><!--login-->
</div><!--container-->