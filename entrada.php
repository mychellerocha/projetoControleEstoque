<?php
require("valida_sessao.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sistema Estoque</title>

    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/solid.min.css">
    <link rel="stylesheet" href="font-awesome/css/regular.min.css">
    <link rel="stylesheet" href="font-awesome/css/svg-with-js.min.css">
    <link rel="stylesheet" href="font-awesome/css/v4-shims.min.css">
    <link rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.maskMoney.min.js" type="text/javascript"></script>

    <script>
        $(function(){
            $('#preco').maskMoney({
              prefix:'R$ ',
              allowNegative: true,
              thousands:'.', decimal:',',
              affixesStay: true});
        })
    </script>
    
</head>

<body>
<div class="container">
    <form class="form" method="POST" action="bd_entrada.php">
        <h1>Cadastrar produto</h1>
        <ol class="breadcrumb">
            <li><a href="index.php">Voltar</a></li>
            <li class="active">Entrada</li>
        </ol>
        <fieldset>
            <legend><h2>Dados</h2></legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <!--<label>Código</label>-->
                        <input class="form-control" type="hidden" name="CODIGO">
                    </div>

                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" name="DESCRICAO" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Preço</label>
                        <input type="text" class="form-control" id="preco" name="PRECO">
                    </div>
                    <div class="form-group">
                        <label>Quantidade</label>
                        <input type="number" min="1" step="1" name="QUANTIDADE" class="form-control">
                    </div>
                </div><br>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Categoria</label>
                        <select name="CATEGORIA" class="form-control">
                            <option value=""></option>
                            <option value="CAMISA">CAMISA</option>
                            <option value="CALÇA">CALÇA</option>
                            <option value="VESTIDO">VESTIDO</option>
                            <option value="CALCADO">CALÇADO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Observação</label>
                        <textarea class="form-control" name="OBS" rows="2"></textarea>
                    </div>
                    <button type="submit" value="cadastrar" class="btn btn-block btn-success">Cadastrar</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
</body>
</html>