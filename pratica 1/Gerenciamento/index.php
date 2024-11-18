
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="id-block-center">
    <h1>Login</h1>
    <label class="felipe" for="nome"><b>Nome</b></label>
    <input class="fabio" type="text"  name="name" required>

    <label class="felipe" for="phone"><b>Telefone</b></label>
    <input class="fabio type="tel" id="telefone" class="input-padrao" required placeholder="(xx) xxxxx-xxxx">

    <label class="felipe" for="email"><b>Email</b></label>
    <input class="fabio" type="email" id="email" pattern=".+@example\.com" required />


    <button class="felipe"  id="buttom-maldito" type="submit">Entrar</button>
   
    </div>
</body>
</html>