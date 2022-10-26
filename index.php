<?php
$conexao = mysqli_connect('127.0.0.1','root',null,'estoque',3306);
if(!$conexao)
{
    die('Erro ao se conectar! Tente novamente.');
}
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);
require("valida_sessao.php");
error_reporting(0); // para ocultar erro de variável indefinida 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Controle de Estoque</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/solid.min.css">
    <link rel="stylesheet" href="font-awesome/css/regular.min.css">
    <link rel="stylesheet" href="font-awesome/css/svg-with-js.min.css">
    <link rel="stylesheet" href="font-awesome/css/v4-shims.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="mensagens.css">
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed navabar-left" data-toggle="collapse" data-target="#barra-nav">
                <span class="sr-only">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </span>
            </button>
            <a href="#" class="navbar-brand">Controle de Estoque</a>
        </div>
    </div> 
</nav> 
 
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active"><i class="fas fa-boxes fa-2x"></i>
                    <a href="cadastro.php" class="list-group-item">Novo Usuário</a>
                    <a href="entrada.php" class="list-group-item">Novo Produto</a>
                    <a href="estoque.php" class="list-group-item">Consultar Estoque</a>
                    <a href="sair.php" class="list-group-item">Sair</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <div class="box-titulo">
                <h2></i>Controle de Estoque</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-6 col-md-6">
                    <div class="well">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        <h4>Saldo</h4>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-6 col-md-6">
                    <div class="well">
                        <i class="fas fa-clipboard"></i>
                        <h4>Itens estoque</h4>
                    </div>
                </div>
            </div>
<?php include 'mensagens.php'; ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fas fa-check-square"></i> Movimentações
                </div>
                <div class="table-responsive">
                    <?php
                    if(mysqli_num_rows($resultado) > 0)
                    {
                        echo '<table class="table table-striped table-condensed">';
                            echo '<thead>';
                                echo '<tr>';
                                    echo '<th>Código</th>';
                                    echo '<th>Quantidade</th>';
                                    echo '<th>Descrição</th>';
                                    echo '<th>Motivo</th>';
                                    echo '<th>Valor</th>';
                                    echo '<th>Obs</th>';
                                    echo '<th>Data</th>';
                                    echo '<th>Ações</th>';
                                echo '</tr>';
                            echo '</thead>;';

                        while($prod = mysqli_fetch_row($resultado)) 
                        {
                            echo '<tr>';
                                echo '<td>' . $prod[0] . '</td>';
                                echo '<td>' . $prod[1] . '</td>';
                                echo '<td>' . $prod[2] . '</td>';
                                echo '<td>' . $prod[3] . '</td>';
                                echo '<td>' . 'R$ ' . $prod[4] . '</td>';
                                echo '<td>' . $prod[5] . '</td>';
                                echo '<td>' . $prod[6] . '</td>';
                                echo "<td><a href='saida.php?cod=" . $prod[0] . "&qtd=" . $prod[1] . "&descricao=" . $prod[2] . "&motivo=" . $prod[3] . "&valor=" . $prod[4] . "&obs=" . $prod[5]."'>Editar</a></td>";
                                echo "<td><a href='apagar.php?cod=" . $prod[0] . "'><center>Apagar</center></a></td>";   
                            echo '</tr>';
                        }

                        echo '</table>';
                    }
                    ?>
                </div> 
            </div>
        </div>
    </div>
</main>

</body>

</html>