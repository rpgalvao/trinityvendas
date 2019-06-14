<div class="container">
    <div class="delete">
        <form method="POST">
            <h4>Você deseja realmente excluir esse registro?</h4>
            <table class="client_info" border="1">
                <tr>
                    <th>Nome do Cliente</th>
                    <td><?php echo $form['nome']; ?></td>
                </tr>
                <tr>
                    <th>Instituição</th>
                    <td><?php echo $form['instituicao']; ?></td>
                </tr>
                <tr>
                    <th>Interesse</th>
                    <td><?php echo $form['interesse']; ?></td>
                </tr>
            </table>
            <div class="del_button">
                <input type="submit" name="del" value="SIM">
                <a href="<?php echo BASE_URL; ?>home">NÃO</a>
            </div><!--del_button-->
        </form>
    </div><!--delete-->
</div><!--container-->