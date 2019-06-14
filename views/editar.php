<div class="container">
    <div class="cadastro_form">
        <?php if(!empty($sucesso)): ?>
            <div class="sucesso">
                <?php echo $sucesso; ?><br>
            </div>
        <?php endif; ?>
        <h3>Atualização de Clientes</h3>

        <form method="POST">
            <input type="text" name="nome" value="<?php echo $info['nome']; ?>" placeholder="Nome do Cliente" required><br>
            <input type="text" name="email" value="<?php echo $info['email']; ?>" placeholder="E-mail do Cliente"><br>
            <input type="text" name="telefone" value="<?php echo $info['telefone']; ?>" placeholder="Telefone" class="telefone"><br>
            <input type="text" name="cidade" value="<?php echo $info['cidade']; ?>" placeholder="Cidade"><br>
            <input type="text" name="estado" value="<?php echo $info['estado']; ?>" placeholder="Estado"><br>
            <input type="text" name="instituicao" value="<?php echo $info['instituicao']; ?>" placeholder="Nome da Instituição"><br>
            <select name="interesse">
                <option <?php if($info['interesse'] == 'Premier Hb9210') echo 'selected'; ?> value="Premier Hb9210">HbA1c</option>
                <option <?php if($info['interesse'] == 'GeneSys') echo 'selected'; ?> value="GeneSys">Ultra² GeneSys</option>
                <option <?php if($info['interesse'] == 'Premier Resolution') echo 'selected'; ?> value="Premier Resolution">Premier Resolution</option>
                <option <?php if($info['interesse'] == 'TriStat') echo 'selected'; ?> value="TriStat">Tri-stat2</option>
                <option <?php if($info['interesse'] == 'Autoimunidade') echo 'selected'; ?> value="Autoimunidade">Autoimunidade</option>
            </select><br>
            <textarea name="obs" placeholder="Observações"><?php echo $info['observacao']; ?></textarea><br>
            <input type="submit" name="acao" value="Atualizar">
        </form>
    </div><!--cadastro_form-->
</div><!--container-->