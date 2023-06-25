<?php

use BLL\bllCliente;
use BLL\bllProduto;

include_once '../BLL/bllCliente.php';
include_once '../BLL/bllProduto.php';

$bllCli = new \BLL\bllCliente;
$bllPro = new \BLL\bllProduto;

$lstCliente = $bllCli->select();
$lstProduto = $bllPro->Select();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Pedido</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script type="text/javascript" src="../node_modules/jquery//dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/myStyle.css">
</head>

<body>
    <nav>
        <div class="nav-wrapper darken-1" style="background-color: #12111F">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="../VIEWS/lstCliente.php">Clientes</a></li>
                <li><a href="../VIEWS/lstItens.php">Produtos</a></li>
                <li><a href="../VIEWS/lstOds.php">Venda</a></li>
                <li><a href="../VIEWS/lstUsers.php">usuários</a></li>
            </ul>
            <a href="../VIEWS/menu.php" class="right brand-logo">
                <Img src="../VIEWS/assets/logo.jpeg" width="150" height="54">
            </a>
        </div>
    </nav>

    <div class="center orange" style="height: 4rem; justify-content: center">
        <h1 style="color: #fff">Gerar Pedido</h1>
    </div>

    <div class="container lighten-5 black-text col s12">
        <div class="row">
            <form action="recOds.php" method="POST" id="cadPedido" class="col s12" style="margin-top:2.5rem">
                <label for="cliente" class="black-text bold" style="font-size: 1.1rem; margin-left: 0.5rem">Cliente</label>
                <select class="form-select" id="cliente" name="nameCft" style="width: 58rem; margin-left: 0.5rem">
                    <?php foreach ($lstCliente as $cliente) { ?>
                        <option value="<?php echo $cliente->getDescr(); ?>"> <?php echo $cliente->getDescr(); ?></option>
                    <?php } ?>
                </select>
                
                <label for="prod" class="black-text bold" style="font-size: 1.1rem; margin-left: 0.5rem; margin-top: 1.5rem">Produto</label>
                <select class="form-select" id="prod" name="nameProd" style="width: 58rem; margin-left: 0.5rem" onchange="setValueProd()">
                    <?php foreach ($lstProduto as $item) { ?>
                        <option id="valueProd" value="<?php echo $item->getId() ?>" data-hidden-value="<?php echo $item->getPrVenda() ?>"> <?php echo $item->getDescr(); ?></option>
                    <?php } ?>
                </select>
                
                <div class="col s8" style="margin-top: 1.5rem">
                    <label for="prVenda" class="black-text bold" style="font-size: 1.1rem">Preço de venda</label>
                    <input id="prVenda" type="text" name="prVenda">
                </div>
                <div class="lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit" style="color: #fff; margin-right: 2rem">
                        Cadastrar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset" style="color: #fff; margin-right: 2rem">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstoperador2.php'" style="color: #fff">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>




</body>

</html>

<script>
    function setValueProd() {
        var selectElement = document.getElementById("prod")
        var selectedOption = selectElement.options[selectElement.selectedIndex]
        var hiddenValue = selectedOption.getAttribute("data-hidden-value")
        $("#prVenda").val(hiddenValue)
    }
</script>