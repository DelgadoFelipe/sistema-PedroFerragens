<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar usuários</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
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

    <div class="center orange" style="height: 4rem; justify-content: center" >
        <h1 style="color: #fff">Cadastrar usuarios</h1>
    </div>

    <div class="container lighten-5 black-text col s12">
      <div class="row">
            <form action="recUsuario.php" method="POST" id="cadUsuario" class="col s12">
              <div class="input-field col s8">
                  <input id="user" type="text" name="user">
                  <label for="user" class="black-text bold" >Nome de Usuário</label>
              </div>
              <div class="input-field col s8">
                  <input id="pwd" type="text" name="pwd">
                  <label for="pwd" class="black-text bold" >Senha</label>
              </div>
                <div class="lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit" style="color: #fff; margin-right: 2rem">
                        Cadastrar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type = "reset" style="color: #fff; margin-right: 2rem">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstUser.php'" style="color: #fff">
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