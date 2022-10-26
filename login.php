<?php error_reporting(0); ?> <!-- para ocultar erro de variável indefinida -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/solid.min.css">
    <link rel="stylesheet" href="font-awesome/css/regular.min.css">
    <link rel="stylesheet" href="font-awesome/css/svg-with-js.min.css">
    <link rel="stylesheet" href="font-awesome/css/v4-shims.min.css">
    <link rel="stylesheet" href="w3.css">
</head>

<body>
    <form action=bd_login.php method="post">
        <img src="img/" class="img-responsive" alt="">
        <h1>Login</h1>
        <fieldset>
            <div class="form-group">
                <label for="">Usuário</label>
                <input type="text" name="usuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>
            <div class="w3-container">
                <?php include 'mensagens.php'; ?>
            </div>
        </fieldset>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>