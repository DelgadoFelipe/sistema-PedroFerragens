<?php
session_start();
$token = $_SESSION["token"];
if ($token == "") {
    header("location: login.php");
}
?>


<?php
include_once 'C:\xampp\htdocs\pedroFerragens-main\BLL\bllProduto.php';
$id = $_GET['id'];

$bll = new  \BLL\bllProduto();
$item = $bll->SelectID($id);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>

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
        <button onclick="voltaLogin()" type="button" class="btn btn-outline-danger" style="margin-left: 55rem; background-color: transparent; text-align:center; justify-content: center; border: 1.4px solid yellow">
            <p style="line-height: 0px">Logoff</p>
        </button>
        
        <a href="menu.php" class="right brand-logo">
            <Img src="../VIEWS/assets/logo.jpeg" width="150" height="60">
        </a>
        </div>  
    </nav>

    <div class="center orange" style="height: 6rem; margin-top: -2.8rem">
        <h1 style="color: #fff">Editar Produto</h1>
    </div>

    <div class="container lighten-5 black-text col s12">
        <div class="row">
            <form action="recEditProduto.php" method="POST" id="editProduto" class="col s12">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $item->getId(); ?></label>
                    </br> </br>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input id="descr" type="text" name="descr" required value="<?php echo $item->getDescr() ?>">
                    <label for="descr" class="black-text bold">Descrição</label>
                </div>
                <div class="input-field col s8">
                    <input id="qtdDisp" type="number" name="qtdDisp" required value="<?php echo $item->getQtdDisp() ?>">
                    <label for="qtdDisp" class="black-text bold">Quantidade disponível</label>
                </div>
                <div class="input-field col s8">
                    <input id="prVenda" type="number" name="prVenda" required value="<?php echo $item->getPrVenda() ?>">
                    <label for="prVenda" class="black-text bold">Preço de Venda</label>
                </div>

                <div class=" lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit" style="margin-right: 2.5rem">
                        Gravar <i class="material-icons">save</i>
                    </button>

                    <button class="waves-effect waves-light btn blue"  type="button" onclick="JavaScript:location.href='lstItens.php'">
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
    function voltaLogin() {
        window.location.href = "login.php"
    }
</script>