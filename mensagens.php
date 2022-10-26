<?php
// Recupera a mensagem
$msg = $_GET['msg'];

if (isset($msg))
{
	// Sucesso
	//--------
	if ($msg == 'sucesso_delete')
	{
		echo '<div class="w3-panel w3-pale-green w3-leftbar w3-border-green w3-border w3-card-4 w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Sucesso!</h3><p>A operação de exclusão foi realizada com sucesso.</p></div>';
	}
	if ($msg == 'sucesso_insert')
	{
		echo '<div class="w3-panel w3-pale-green w3-leftbar w3-border-green w3-border w3-card-4 w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Sucesso!</h3><p>A operação de inserção foi realizada com sucesso.</p></div>';
	}
	if ($msg == 'sucesso_update')
	{
		echo '<div class="w3-panel w3-pale-green w3-leftbar w3-border-green w3-border w3-card-4 w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Sucesso!</h3><p>A operação de atualização foi realizada com sucesso.</p></div>';
	}

	// Erros
	// -----
	if ($msg == 'erro_delete')
	{
		echo '<div class="w3-panel w3-pale-red w3-leftbar w3-border-red w3-border w3-card-4 w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Erro!</h3><p>A operação de exclusão não foi realizada com sucesso.</p></div>';
	}
	if ($msg == 'erro_insert')
	{
		echo '<div class="w3-panel w3-pale-red w3-leftbar w3-border-red w3-border w3-card-4 w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Erro!</h3><p>A operação de inserção não foi realizada com sucesso.</p></div>';
	}
	if ($msg == 'erro_update')
	{
		echo '<div class="w3-panel w3-pale-red w3-leftbar w3-border-red w3-border w3-card-4 w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Erro!</h3><p>A operação de atualização não foi realizada com sucesso.</p></div>';
	}
	if ($msg == 'erro_upload')
	{
		echo '<div class="w3-panel w3-pale-red w3-leftbar w3-border-red w3-border w3-card-4 w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Erro!</h3><p>A operação de upload não foi realizada com sucesso.</p></div>';
	}
	if ($msg == 'erro_login')
	{
		echo '<div class="w3-panel w3-pale-red w3-leftbar w3-border-red w3-border w3-card-4 w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Erro!</h3><p>Problemas na autenticação do usuário!<br>Por favor, entre em contato o desenvolvedor do sistema.</p></div>';
	}
}
?>