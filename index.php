<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-dark text-light">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">MyPhpCRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo Usuário</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=listar">Listar Usuários</a>
            </li>
            <li>
            <a class="nav-link" href="#">Contato</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-05">
        <?php
        include("config.php"); # referencia conexão BD
        switch(@$_REQUEST['page']){
            case "novo":
                include("novoUsuario.php");
                break;
            case "listar":
                include("listarUsuario.php");
                break;
            case "salvar":
                include("salvarUsuario.php");
                break;
            case "editar":
                include("editarUsuario.php");
                break;
            default:
                include __DIR__.'/includeHTML/home.html';
            }
        ?>

        </div>
    </div>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>