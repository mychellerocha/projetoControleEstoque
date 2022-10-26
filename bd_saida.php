<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Edição</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
    require("valida_sessao.php");
    $cod = $_POST['CODIGO'];
    $descricao = $_POST['DESCRICAO'];
    $valor = $_POST['VALOR'];
    $qtd = $_POST['QUANTIDADE'];
    $motivo = $_POST['MOTIVO'];
    $obs = $_POST['OBS'];

    $conexao = mysqli_connect('127.0.0.1','root',null,'estoque',3306);

    $sql = "UPDATE produtos SET qtd = '$qtd', descricao = '$descricao', motivo = '$motivo', valor = '$valor', obs = '$obs' WHERE cod = $cod";

    if (mysqli_query($conexao,$sql)) 
    {
        $pagina = 'estoque.php?msg=sucesso_update';
    }
    else
    {
        $pagina = 'estoque.php?msg=erro_update';
    }
    mysqli_close($conexao);
    header('Location: ' . $pagina);
?>
</body>
</html>