<?php
include_once 'C:\xampp\htdocs\pedroFerragens-main\BLL\bllCliente.php';
$id = $_GET['id'];

$bll = new  \BLL\bllCliente();
$cliente = $bll->SelectID($id);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


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
        <h1 style="color: #fff">Editar Cliente</h1>
    </div>

    <div class="container lighten-5 black-text col s12">
        <div class="row">
            <form action="recEditClient.php" method="POST" id="editCliente" class="col s12">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $cliente->getId(); ?></label>
                    </br> </br>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input id="nomeReal" type="text" name="descr" required value="<?php echo $cliente->getDescr() ?>">
                    <label for="nomeReal" class="black-text bold">Nome/Razão social</label>
                </div>
                <div class="input-field col s8">
                    <input id="fant" type="text" name="fant" value="<?php echo $cliente->getFant() ?>">
                    <label for="fant" class="black-text bold">Nome Fantasia/apelido</label>
                </div>
                <div class="input-field col s8">
                    <input id="cep" type="text" name="cep" value="<?php echo $cliente->getCep() ?>">
                    <label for="cep" class="black-text bold">CEP</label>
                </div>

                <div class="input-field col s8">
                    <input id="ender" type="text" name="ender" value="<?php echo $cliente->getEnder() ?>">
                    <label for="ender" class="black-text bold">Endereço</label>
                </div>
                <div class="input-field col s8">
                    <input id="bairro" type="text" name="bairro" value="<?php echo $cliente->getBairro() ?>">
                    <label for="bairro" class="black-text bold">Bairro</label>
                </div>

                <div class="input-field col s8">
                    <input id="cidade" type="text" name="cidade" value="<?php echo $cliente->getCidade() ?>">
                    <label for="cidade" class="black-text bold">Cidade</label>
                </div>
                <div class="input-field col s8">
                    <input id="tel" type="text" name="tel" value="<?php echo $cliente->getTelefone() ?>">
                    <label for="tel" class="black-text bold">Telefone/Celular</label>
                </div>
                <div class="input-field col s8">
                    <input id="cpf" type="text" name="cpf" required value="<?php echo $cliente->getCpf() ?>">
                    <label for="cpf" class="black-text bold">CPF/CNPJ</label>
                </div>

                <div class=" lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit" style="margin-right: 2.5rem">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" style="margin-right: 2.5rem" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstCliente.php'">
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