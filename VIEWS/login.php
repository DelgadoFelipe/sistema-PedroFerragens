
<?php

include_once 'C:\xampp\htdocs\pedroFerragens-main\VIEWS\verificaLogin.php';

use VIEW\ViewLogin;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (ViewLogin::login($_POST)) {
        header("location: menu.php");
    } else {
        echo "<div class='alert alert-warning' role='alert'>Login Invalido</div>";
    }
} else {
    session_start();
    $_SESSION["token"] = "";
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedro Ferragens Brasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="my-5" style="text-align: center">
            <h2 >LOGIN</h2>
        </div>
        <form action="login.php" method="POST" style="margin: auto; width: 50%; text-align:center">
            <div class="mb-3">
                <label for="login" class="form-label" style="margin: auto;">Usuário</label>
                <input type="text" class="form-control" style="width: 45%; margin: auto; margin-top: 0.8rem" id="login" name="user">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label" style="margin: auto">Senha</label>
                <input type="password" class="form-control" id="senha" name="pwd" style="width: 45%; margin: auto; margin-top: 0.8rem">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>