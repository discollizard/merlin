<?php
  require "header.php"
 ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<main>
  <h1>Cadastro de Livros</h1>
  <form name="cadastrarlivro" action="includes/cadlivros.inc.php" method="get">
    <input type="text" name="nomeLivro" placeholder="Nome do livro" maxlength="100"><br>
    <input type="text" name="autor" placeholder="Autor" maxlength="50"><br>
    <select name="genero">
      <option value="romance">Romance</option>
      <option value="biografia">Biografia</option>
      <option value="terror">Terror</option>
      <option value="fantasia">Fantasia</option>
      <option value="tecnico">Técnico</option>
      <option value="poesia">Poesia</option>
      <option value="ficcaocientifica">Ficção científica</option>
    </select><br>
    <input type="text" name="editora" placeholder="Editora" maxlength="50"><br>
    <input type="text" name="ano" placeholder="Ano" size="2" maxlength="4">
    <input type="text" name="nopaginas" placeholder="Nº Pág." size="3" maxlength="5"><br>
    <textarea name="sinopse" rows="4" cols="50" placeholder="Sinopse do livro" maxlength="1000"></textarea><br>
    <button type="submit" name="cadastrarlivro">Cadastrar Livro</button>
  </form>
</main>

<?php
  require "footer.php"
?>
