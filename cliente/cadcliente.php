<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>
<body>
  <form method="GET" action="crudcliente.php">
    <label for="nome">Nome:</label>
    <input type="text" name="nomecliente" placeholder="Digite o nome do cliente" required>

    <label for="nascimento">Data de Nascimento:</label>
    <input type="date" name="nascimento" required>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" placeholder="Digite o telefone" required>

    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" placeholder="Digite o endereço" required>

    <input type="submit" name="cadastrar" value="Cadastrar">
  </form>

  <button class="button"><a href="../index.php">Voltar</a></button>
</body>
</html>
