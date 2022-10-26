<?php
require("valida_sessao.php");
error_reporting(0); // para ocultar erro de variável indefinida

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sistema estoque</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/solid.min.css">
    <link rel="stylesheet" href="font-awesome/css/regular.min.css">
    <link rel="stylesheet" href="font-awesome/css/svg-with-js.min.css">
    <link rel="stylesheet" href="font-awesome/css/v4-shims.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="mensagens.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <style>
        .container header {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        button {
            width: 160px;
            height: 35px;
            background: #34cd79;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            border: none;
            outline: none;
        }
        a{
            color: white;
        }
        #botao{
            color: black;
        }
    </style>
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
    
            <a href="index.php" class="navbar-brand">Controle de Estoque</a>
        </div>
      
        <div class="collapse navbar-collapse" id="barra-nav">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><i class="fa fa-arrow-left"></i> Voltar</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php
    $conexao = mysqli_connect('127.0.0.1','root',null,'estoque',3306);
    if(!$conexao)
    {
        die('Erro ao se conectar! Tente novamente.');
    }
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);

?>

<section class="">
    <div class="container"><br><br>
        <?php include 'mensagens.php'; ?>

        <fieldset><h2>Meu estoque</h2></fieldset>
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fas fa-clipboard-list"></i> Movimentações
            </div>
            <div class="table-responsive">
                <?php
                if(mysqli_num_rows($resultado) > 0)
                {
                    echo '<table class="table table-striped table-condensed">';
                        echo '<thead>';
                            echo '<tr>';
                                echo '<th >Código</th>';
                                echo '<th>Quantidade</th>';
                                echo '<th>Descrição</th>';
                                echo '<th>Motivo</th>';
                                echo '<th>Valor</th>';
                                echo '<th>Obs</th>';
                                echo '<th>Data</th>';
                                echo '<th>Ações</th>';
                            echo '</tr>';
                        echo '</thead>';
                        while($prod = mysqli_fetch_row($resultado)) 
                        {
                            echo '<tr>';
                                echo '<td>' . $prod[0] . '</td>';
                                echo '<td>' . $prod[1] . '</td>';
                                echo '<td>' . $prod[2] . '</td>';
                                echo '<td>' . $prod[3] . '</td>';
                                echo '<td>' . $prod[4] . '</td>';
                                echo '<td>' . $prod[5] . '</td>';
                                echo '<td>' . $prod[6] . '</td>';
                                echo "<td><a href='saida.php?cod=" . $prod[0] . "&qtd=" . $prod[1] . "&descricao=" . $prod[2] . "&motivo=" . $prod[3] . "&valor=" . $prod[4] . "&obs=" . $prod[5]."' id='botao'>Editar</a></td>";
                                echo "<td><a href='apagar.php?cod=" . $prod[0] . "' id='botao'><center>Apagar</center></a></td>";   
                            echo '</tr>';
                        }
                    echo '</table>';
                }
                ?>
            </div>
        </div>
        <button><a href="entrada.php">Cadastrar novo item</a></button>
    </div>
</section>
</body>
</html>