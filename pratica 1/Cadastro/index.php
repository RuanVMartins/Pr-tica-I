<?php
include "../db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nome = $_POST['name'];
    $telefone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO Cliente (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="post" action="index.php">
    Nome: <input type="text" name="name" required>
    Telefone: <input type="tel" name="phone" required placeholder="(xx) xxxxx-xxxx">
    Email: <input type="email" name="email" required>
    <input type="submit" value="Adicionar">
</form>

<a href="read.php">Ver registros.</a>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <div id="id-block-center">
    <h1>Cadastro</h1>
    <form method="post" action="index.php">
        <label class="felipe" for="nome"><b>Nome</b></label>
        <input class="fabio" type="text" name="name" required>

        <label class="felipe" for="phone"><b>Telefone</b></label>
        <input class="fabio" type="tel" name="phone" required placeholder="(xx) xxxxx-xxxx">

        <label class="felipe" for="email"><b>Email</b></label>
        <input class="fabio" type="email" name="email" required>

        <button class="felipe" type="submit">Cadastrar</button>
    </form>
    </div>
</body>
</html>