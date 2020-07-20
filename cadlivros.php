<?php
  require "header.php"
 ?>

<main>
  <h1>Cadastro de Livros</h1>
  <form action="cadlivros.inc.php" method="post">
    <input type="text" name="nomelivro" placeholder="Nome do livro" maxlength="100"><br>
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
