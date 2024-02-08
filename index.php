<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyPhpCRUD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .custom-div {
            background-color: rgba(9, 82, 100, 0.9);
            padding: 10px;
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease; /* Transição suave da cor da fonte */
        }

        .custom-div:hover {
            color: #212529 !important;
        }
    </style>
  </head>


  <body class="bg-dark text-white">
    <nav class="navbar navbar-expand-lg p-4" style="background-color: rgb(9, 82, 100);">
    <div class="container-fluid">

        <a class="navbar-brand text-white custom-div" href="index.php" style="font-family: 'Comfortaa', sans-serif">MyPhpCRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active text-white fw-bold custom-div" style="font-family: 'Comfortaa', sans-serif" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white custom-div" style="font-family: 'Comfortaa', sans-serif" href="?page=novo">Novo Usuário</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white custom-div" style="font-family: 'Comfortaa', sans-serif" href="?page=listar">Listar Usuários</a>
                </li>
                <li>
                <a class="nav-link text-white custom-div" style="font-family: 'Comfortaa', sans-serif" href="#">Contato</a>
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