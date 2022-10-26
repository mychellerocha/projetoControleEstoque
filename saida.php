<?php
require("valida_sessao.php");
error_reporting(0); // para ocultar erro de variável indefinida

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar Estoque</title>
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/solid.min.css">
    <link rel="stylesheet" href="font-awesome/css/regular.min.css">
    <link rel="stylesheet" href="font-awesome/css/svg-with-js.min.css">
    <link rel="stylesheet" href="font-awesome/css/v4-shims.min.css">
</head>
<body>
     
<?php
    $cod = $_GET['cod'];
    $qtd = $_GET['qtd'];
    $descricao = $_GET['descricao'];
    $motivo = $_GET['motivo'];
    $valor = $_GET['valor'];
    $obs = $_GET['obs'];
?>
<section class="formulario">
    <div class="container">
        <div class="container">
            <form class="form" method="POST" action="bd_saida.php">
                <h1>Atualizar produto do estoque</h1>
                <ol class="breadcrumb">
                    <li><a href="estoque.php">Voltar</a></li>
                    <li class="active">Editar</li>
                </ol>
                <fieldset>
                    <legend><h2>Dados</h2></legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Código</label>
                                <input readonly class="form-control" type="text" name="CODIGO" value="<?php echo $cod ?>">
                            </div>
                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" name="DESCRICAO" class="form-control" value="<?php echo $descricao ?>" required>
                            </div>
                            <div class="form-group">
                                <label>valor</label>
                                <input type="number" class="form-control" name="VALOR" value="<?php echo $valor ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Quantidade</label>
                                <input type="number" name="QUANTIDADE" class="form-control" value="<?php echo $qtd ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Motivo</label>
                                <select name="MOTIVO" class="form-control" required>
                                    <option value=""></option>
                                    <option value="ESPECIFICAR">ESPECIFICAR</option>
                                    <option value="CHAMADO">CHAMADO</option>
                                    <option value="DEVOLUCAO">DEVOLUCAO</option>
                                    <option value="EMPRESTIMO">EMPRESTIMO</option>
                                    <option value="NOTA FISCAL">NOTA FISCAL</option>
                                    <option value="TRANSFERENCIA">TRANSFERENCIA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Observacão</label>
                                <textarea name="OBS" rows="2" class="form-control" required><?php echo $obs ?></textarea>
                            </div>
                            <?php include 'mensagens.php'; ?>
                            <button type="submit" class="btn btn-block btn-success">Atualizar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>
</body>
</html>