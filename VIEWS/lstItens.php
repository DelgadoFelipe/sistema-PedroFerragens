<?php

use BLL\bllProduto;

include_once '../BLL/bllProduto.php';
$bll = new \BLL\bllProduto;
$lstItem = $bll->Select();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/myStyle.css">
    <title>Lista de Produtos</title>
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
    <h1>Lista de Produtos</h1>

    <table class="striped indigo lighten-3">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Quantidade disponível</th>
            <th>Preço de venda</th>
        </tr>
        <?php
        foreach ($lstItem as $item) {
        ?>
            <tr>
                <td><?php echo $item->getId(); ?></td>
                <td><?php echo $item->getDescr(); ?></td>
                <td><?php echo $item->getQtdDisp(); ?></td>
                <td><?php echo $item->getPrVenda(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='editProduto.php?id=' +
                        <?php echo $item->getId(); ?>">
                        <i class="material-icons">edit</i>
                    </a>
                </td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:location.href='delProduto.php?id=' +
                        <?php echo $item->getId(); ?>">
                        <i class="material-icons">delete</i>
                    </a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
    <div class="lighten-3 center col s12" style="margin-top: 2rem">
        <button class="waves-effect waves-light btn green" onclick="JavaScript:location.href='insProduto.php'" style="color: #fff; margin: auto">
            Adicionar Novo <i class="material-icons">save</i>
        </button>
    </div>

</body>

</html>