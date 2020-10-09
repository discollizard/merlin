<!DOCTYPE html>
<html>
  <head>
    <meta charset="iso-8859-1">
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <title> Merlin </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
  </head>

  <body>

    <header style="width: 100%">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" width="30" height="30" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Merlin<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadlivros.php">Cadastrar Livro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="romances.php" tabindex="-1">Romances</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="biografias.php" tabindex="-1">Biografias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="terror.php" tabindex="-1">Terror</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fantasia.php" tabindex="-1">Fantasia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tecnicos.php" tabindex="-1">Livros Técnicos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="poesias.php" tabindex="-1">Livros de Poesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ficcaocientifica.php" tabindex="-1">Ficção Científica</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="buscalivros.php" method="get" name="frmPesquisar">
            <input class="form-control mr-sm-2" name="frmPesquisar" type="search" placeholder="Pesquisar Livro" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
</nav>
    </header>

  </body>

</html>
