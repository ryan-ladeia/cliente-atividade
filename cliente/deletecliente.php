<?php
   include_once("conexao.php");

    $id = $_POST['id'];

    $sql = "DELETE FROM cliente WHERE id = :id";
    $sqlcombanco = $conexao->prepare($sql);
    $sqlcombanco->bindParam(':id', $id, PDO::PARAM_INT);

    if ($sqlcombanco->execute()) {
        echo "<h3>Cliente exluido</h3>";
    } else {
        echo "<h3>Erro!</h3> Não foi possível excluir.";
        ?>
        <a href="listacliente.php">Ver lista de clientes</a>
        <?php
    }
    ?>
    