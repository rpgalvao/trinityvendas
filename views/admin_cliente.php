<div class="clientes">
    <h2 class="client_h2">Página do cliente</h2>


    <table class="client_info" border="1">
        <tr>
            <th>Nome do Cliente</th>
            <td><?php echo $info_cliente['nome']; ?></td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td><?php echo $info_cliente['email']; ?></td>
        </tr>
        <tr>
            <th>Cidade</th>
            <td><?php echo $info_cliente['cidade']; ?></td>
        </tr>
        <tr>
            <th>Estado</th>
            <td><?php echo $info_cliente['estado']; ?></td>
        </tr>
        <tr>
            <th>Instituição</th>
            <td><?php echo $info_cliente['instituicao']; ?></td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td><?php echo $info_cliente['telefone']; ?></td>
        </tr>
        <tr>
            <th>Interesse</th>
            <td><?php echo $info_cliente['interesse']; ?></td>
        </tr>
        <tr>
            <th>Vendedor</th>
            <td><?php echo $info_cliente['username']; ?></td>
        </tr>
        <tr>
            <th>Observação</th>
            <td><?php echo $info_cliente['observacao']; ?></td>
        </tr>
    </table>
    <div class="opcoes">
        <a href="<?php echo BASE_URL; ?>home/excluir/<?php echo $info_cliente['id']; ?>">Excluir</a>
        <a href="<?php echo BASE_URL; ?>/admin">Voltar</a>
    </div><!--opcoes-->
</div><!--clientes-->