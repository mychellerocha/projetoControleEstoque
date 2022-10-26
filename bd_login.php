<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$conexao = mysqli_connect("127.0.0.1", "root", null, "estoque", 3306);

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha';";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0)
{
	session_start();
	$_SESSION['usuario'] = $_POST['usuario'];
	$_SESSION['senha'] = $_POST['senha'];
	echo '<script type="text/javascript"> window.open("./index.php", "_top")</script>';

}
else
{
	$pagina = 'login.php?msg=erro_login';
	// Redireciona para a página destino.
	header('Location: ' . $pagina);
}
	
?>