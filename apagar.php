<?php
require("valida_sessao.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
    $conexao = mysqli_connect('127.0.0.1','root',null,'estoque',3306);
    $cod = $_GET['cod'];
    if(!$conexao) 
    {
        die('Erro ao se conectar! Tente novamente.');
    }

    $sql = "DELETE FROM produtos WHERE cod = $cod";

    if(mysqli_query($conexao,$sql)) 
    {
        $pagina = 'estoque.php?msg=sucesso_delete';
    }
    else 
    {
        $pagina = 'estoque.php?msg=erro_delete';
    }
    header('Location: ' . $pagina);
    mysqli_close($conexao);
?>
<br><br><a href="estoque.php"><button type="button">Clique aqui para acessar a lista de produtos</button></a>
</body>
</html>