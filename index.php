<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Biblioteca</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categoria
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=categoria-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=categoria-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=livro-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=livro-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Atendentes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=atendentes-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=atendentes-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuários
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=usuarios-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=usuarios-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Emprestimo
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=emprestimo-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=emprestimo-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="conteiner mt">
        <div class="row">
            <div class="col">
                <?php
                    switch (@$_REQUEST['page']){
                        //Categoria
                        case 'categoria-listar':
                            include('categoria-listar.php');
                            break;

                        case 'categoria-cadastrar':
                            include('categoria-cadastrar.php');
                            break;

                        case 'categoria-editar':
                            include('categoria-editar.php');
                            break;

                        case 'categoria-salvar':
                            include('categoria-salvar.php');
                            break;

                            //Livro
                        case 'livro-listar':
                            include('livro-listar.php');
                            break;

                        case 'livro-cadastrar':
                            include('livro-cadastrar.php');
                            break;

                        case 'livro-editar':
                            include('livro-editar.php');
                            break;

                        case 'livro-salvar':
                            include('livro-salvar.php');
                            break;

                             //Atendentes
                        case 'atendentes-listar':
                            include('atendentes-listar.php');
                            break;

                        case 'atendentes-cadastrar':
                            include('atendentes-cadastrar.php');
                            break;

                        case 'atendentes-editar':
                            include('atendentes-editar.php');
                            break;

                        case 'atendentes-salvar':
                            include('atendentes-salvar.php');
                            break;

                             //Usuarios
                        case 'usuarios-listar':
                            include('usuarios-listar.php');
                            break;

                        case 'usuarios-cadastrar':
                            include('usuarios-cadastrar.php');
                            break;

                        case 'usuarios-editar':
                            include('usuarios-editar.php');
                            break;

                        case 'usuarios-salvar':
                            include('usuarios-salvar.php');
                            break;

                             //Emprestimo
                        case 'emprestimo-listar':
                            include('emprestimo-listar.php');
                            break;

                        case 'emprestimo-cadastrar':
                            include('emprestimo-cadastrar.php');
                            break;

                        case 'emprestimo-editar':
                            include('emprestimo-editar.php');
                            break;

                        case 'emprestimo-salvar':
                            include('emprestimo-salvar.php');
                            break;



                            default:
                              include("home.php");
                        }
                ?>
            </div>
        </div>         
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
