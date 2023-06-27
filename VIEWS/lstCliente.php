<?php
session_start();
$token = $_SESSION["token"];
if ($token == "") {
    header("location: login.php");
}
?>

<?php

use BLL\bllCliente;

include_once '../BLL/bllCliente.php';
$bll = new \BLL\bllCliente;
$lstCliente = $bll->Select();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/myStyle.css">
    <title>Lista de Clientes</title>
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
        <button onclick="voltaLogin()" type="button" class="btn btn-outline-danger" style="margin-left: 55rem; background-color: transparent; text-align:center; justify-content: center; border: 1.4px solid yellow">
            <p style="line-height: 0px">Logoff</p>
        </button>
        
        <a href="menu.php" class="right brand-logo">
            <Img src="../VIEWS/assets/logo.jpeg" width="150" height="60">
        </a>
        </div>  
    </nav>
    <h1 style="width: 100%; text-align:center">Lista de Clientes</h1>

    <table class="striped indigo lighten-3">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nome Fantasia</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Cep</th>
            <th>Telefone</th>
            <th>Cpf/Cnpj</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        foreach ($lstCliente as $cliente) {
        ?>
            <tr>
                <td><?php echo $cliente->getId(); ?></td>
                <td><?php echo $cliente->getDescr(); ?></td>
                <td><?php echo $cliente->getFant(); ?></td>
                <td><?php echo $cliente->getEnder(); ?></td>
                <td><?php echo $cliente->getBairro(); ?></td>
                <td><?php echo $cliente->getCidade(); ?></td>
                <td><?php echo $cliente->getCep(); ?></td>
                <td><?php echo $cliente->getTelefone(); ?></td>
                <td><?php echo $cliente->getCpf(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='editCliente.php?id=' +
                        <?php echo $cliente->getId(); ?>">
                        <i class="material-icons">edit</i>
                    </a>
                </td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:location.href='delCliente.php?id=' +
                        <?php echo $cliente->getId(); ?>">
                        <i class="material-icons">delete</i>
                    </a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
    <div class="lighten-3 center col s12" style="margin-top: 2rem">
        <button class="waves-effect waves-light btn green" onclick="JavaScript:location.href='insCliente.php'" style="color: #fff; margin: auto">
            Adicionar Novo <i class="material-icons">save</i>
        </button>
    </div>

</body>

</html>

<script>
    function voltaLogin() {
        window.location.href = "login.php"
    }
</script>