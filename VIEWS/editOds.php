<?php
use BLL\bllCliente;
use BLL\bllProduto;

include_once '../BLL/bllCliente.php';
include_once '../BLL/bllProduto.php';
include_once 'C:\xampp\htdocs\pedroFerragens-main\BLL\bllOds.php';
$id = $_GET['id'];

$bllCli = new \BLL\bllCliente;
$bllPro = new \BLL\bllProduto;
$bll = new  \BLL\bllOds();
$ods = $bll->SelectID($id);
$lstCliente = $bllCli->select();
$lstProduto = $bllPro->Select();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pedido</title>

    <script type="text/javascript" src="../node_modules/jquery//dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <Img src="../VIEWS/assets/logo.jpeg" width="150" height="60">
        </a>
        </div>  
    </nav>

    <div class="center orange" style="height: 6rem; margin-top: -2.8rem">
        <h1 style="color: #fff">Editar Pedido</h1>
    </div>

    <div class="container lighten-5 black-text col s12">
        <div class="row">
            <form action="recEditPedido.php" method="POST" id="editPedido" class="col s12">
                <div class="input-field ">
                    <label for="id" class="black-text bold">ID: <?php echo $ods->getId(); ?></label>
                    </br> </br>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>

                <label for="cliente" class="black-text bold" style="font-size: 1.1rem; margin-left: 0.5rem; margin-top: 0.5rem">Cliente</label>
                <select class="form-select" id="cliente" name="nameCft" style="width: 58rem; margin-left: 0.5rem">
                    <?php foreach ($lstCliente as $cliente) { ?>
                        <option value="<?php echo $cliente->getDescr(); ?>"> <?php echo $cliente->getDescr(); ?></option>
                    <?php } ?>
                </select>

                <label for="prod" class="black-text bold" style="font-size: 1.1rem; margin-left: 0.5rem; margin-top: 1.5rem">Produto</label>
                <select class="form-select" id="prod" name="idProd" style="width: 58rem; margin-left: 0.5rem" onchange="setValueProd()">
                    <?php foreach ($lstProduto as $item) { ?>
                        <option id="valueProd" value="<?php echo $item->getId() ?>" data-hidden-value="<?php echo $item->getPrVenda() ?>"> <?php echo $item->getDescr(); ?></option>
                    <?php } ?>
                </select>

                <div class="input-field col s8">
                    <input id="prVenda" type="text" name="prVenda" value="<?php echo $item->getPrVenda() ?>">
                    <label for="prVenda" class="black-text bold">Preço de Venda</label>
                </div>

                <div class=" lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit" style="margin-right: 2.5rem">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" style="margin-right: 2.5rem" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstItens.php'">
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