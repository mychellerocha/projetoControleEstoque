<?php
require("valida_sessao.php");

$cod = $_POST['CODIGO'];
$descricao = $_POST['DESCRICAO'];
$valor = $_POST['PRECO'];
$qtd = $_POST['QUANTIDADE'];
$motivo = $_POST['CATEGORIA'];
$obs = $_POST['OBS'];

$conexao = mysqli_connect("127.0.0.1", "root", null, "estoque", 3306);

$sql = "INSERT INTO produtos VALUES ('$cod', '$qtd', '$descricao', '$motivo', '$valor', '$obs', null);";

if(mysqli_query($conexao,$sql)) 
{
	$pagina = 'estoque.php?msg=sucesso_insert';
} 
else {
	$pagina = 'estoque.php?msg=erro_insert';
}
header('Location: ' . $pagina);
mysqli_close($conexao);
?>