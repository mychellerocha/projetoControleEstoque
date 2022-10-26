<?php
require("valida_sessao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="Estoque/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="Estoque/font-awesome/css/solid.min.css">
    <link rel="stylesheet" href="Estoque/font-awesome/css/regular.min.css">
    <link rel="stylesheet" href="Estoque/font-awesome/css/svg-with-js.min.css">
    <link rel="stylesheet" href="Estoque/font-awesome/css/v4-shims.min.css">
</head>

<body>
    <div class="collapse navbar-collapse" id="barra-nav">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"> ← Voltar</a></li>
        </ul>
    </div>
    <form action="cadastrar.php" method="post">
        <img src="img/" class="img-responsive" alt="">
        <h1>Novo Usuário</h1>
        <fieldset>
            <div class="form-group">
                <label for="">*Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">*Matrícula:</label>
                <input type="text" name="matricula" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">*Usuário:</label>
                <input type="text" name="usuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">*E-mail:</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">*Senha:</label>
                <input type="password" name="senha" class="form-control" required>
            </div>
        </fieldset>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>