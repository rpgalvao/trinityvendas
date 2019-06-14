<div class="clientes">
<div class="select">
    <p>Buscar por vendedor</p>
    <form method="POST">
        <select name="vendedor">
            <option value="">Todos os vendedores</option>
            <?php foreach ($vends as $vend): ?>
                <option value="<?php echo $vend['id']; ?>"><?php echo $vend['nome'] ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="acao" value="Buscar">
    </form>
</div><!--select-->
<table class="dados_clientes" style="padding-top: 10px;">
    <tr>
        <th>Laboratório</th>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Vendedor</th>
    </tr>
    <?php foreach($clientes as $cliente): ?>
        <tr>
            <td><a href="<?php echo BASE_URL; ?>admin/cliente/<?php echo $cliente['id']; ?>"><?php echo $cliente['instituicao']; ?></a></td>
            <td><?php echo $cliente['nome']; ?></td>
            <td><?php echo $cliente['cidade']; ?></td>
            <td><?php echo $cliente['estado']; ?></td>
            <td><?php echo $cliente['username']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</div><!--clientes-->