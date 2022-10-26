<?php
require("valida_sessao.php");

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha']; 

$conexao = mysqli_connect('127.0.0.1','root',null,'estoque',3306);

if(!$conexao)
{
	die('Erro ao conectar com o banco de dados!');
}


$sql = "INSERT INTO usuarios VALUES (null, '$nome', '$matricula', '$usuario', '$email', '$senha')";
if(mysqli_query($conexao,$sql)) 
{
	$pagina = 'index.php?msg=sucesso_insert';
} 
else {
	$pagina = 'estoque.php?msg=erro_insert';
}
header('Location: ' . $pagina);


?>