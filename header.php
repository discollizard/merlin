<!DOCTYPE html>
<html>
  <head>
    <meta charset="iso-8859-1">
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <title> Merlin </title>
    <link rel="stylesheet" href="style.css"
  </head>

  <body>

    <header>

      <nav>
        <a href="#">
          <img src="img/logo.png">
        </a>
        <ul>
          <li><a href="#">Início</a></li>
          <li><a href="#">Livros</a></li>
          <li><a href="#">Cadastrar Livro</a></li>
          <li><a href="#">Sair</a></li>
        </ul>
        <div>
          <form action="includes/login.inc.php" method="post">
            <input type="text" name="usuario" placeholder="Usuário"><br>
            <input type="password" name="senha" placeholder="Senha"><br>
            <button type="submit" name="login-submit">Entrar</button>
          </form>
          <a href="signup.php">Criar usuário</a>
        </div>
      </nav>

    </header>

  </body>

</html>
