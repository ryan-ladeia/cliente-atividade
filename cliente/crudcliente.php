<?php
require_once('conexao.php');

if (isset($_GET['cadastrar'])) {
    $nome = $_GET["nomecliente"];
    $nascimento = $_GET["nascimento"];
    $telefone = $_GET["telefone"];
    $endereco = $_GET["endereco"];

    $sql = "INSERT INTO cliente (nome, nascimento, telefone, endereco) 
            VALUES ('$nome', '$nascimento', '$telefone', '$endereco')";

    $sqlcombanco = $conexao->prepare($sql);

    if ($sqlcombanco->execute()) {
        echo "<script>alert('Cliente cadastrado com sucesso!');</script>";
        
        ?>
        <a href="listacliente.php">Ver lista de clientes</a>
        <?php
      
    } else {
        echo "<script>alert('Erro ao cadastrar cliente.');</script>";
    }
}

if (isset($_POST['update'])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $nascimento = $_POST["nascimento"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    $sql = "UPDATE cliente SET nome=:nome, nascimento=:nascimento, telefone=:telefone, endereco=:endereco WHERE id=:id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':nascimento', $nascimento, PDO::PARAM_STR);
    $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "Cliente atualizado com sucesso!";
        ?>
        <a href="listacliente.php">Ver lista de clientes</a>
        <?php
        
    }
}

if (isset($_GET['excluir'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM cliente WHERE id={$id}";
    $stmt = $conexao->prepare($sql);

    if ($stmt->execute()) {
        echo "Cliente excluído com sucesso!";
        ?>
        <a href="listacliente.php">Ver lista de clientes</a>
        <?php
        
    }
}
?>
