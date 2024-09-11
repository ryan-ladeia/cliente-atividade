<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
</head>
<body>

<?php
require_once('conexao.php');
$id = $_POST['id'];

$sql = "SELECT * FROM cliente WHERE id=:id";
$retorno = $conexao->prepare($sql);
$retorno->bindParam(':id', $id, PDO::PARAM_INT);
$retorno->execute();
$array_retorno = $retorno->fetch();

$nome = $array_retorno['nome'];
$nascimento = $array_retorno['nascimento'];
$telefone = $array_retorno['telefone'];
$endereco = $array_retorno['endereco'];
?>

<form method="POST" action="crudcliente.php">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $nome; ?>">

    <label for="nascimento">Data de Nascimento:</label>
    <input type="date" name="nascimento" value="<?php echo $nascimento; ?>">

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" value="<?php echo $telefone; ?>">

    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" value="<?php echo $endereco; ?>">

    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" name="update" value="Alterar">
</form>

</body>
</html>
