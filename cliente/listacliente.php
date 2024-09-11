<?php
require_once('conexao.php');

$retorno = $conexao->prepare('SELECT * FROM cliente');
$retorno->execute();
?>       
<table> 
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Telefone</th>
            <th>Endereço</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($retorno->fetchAll() as $value) { ?>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['nome']; ?></td>
            <td><?php echo $value['nascimento']; ?></td>
            <td><?php echo $value['telefone']; ?></td>
            <td><?php echo $value['endereco']; ?></td>

            <td>
                <form method="POST" action="altcliente.php">
                    <input name="id" type="hidden" value="<?php echo $value['id']; ?>"/>
                    <button name="alterar" type="submit">Alterar</button>
                </form>
            </td>

            <td>
                <form method="GET" action="crudcliente.php">
                    <input name="id" type="hidden" value="<?php echo $value['id']; ?>"/>
                    <button name="excluir" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<button><a href="../index.php">Voltar</a></button>
