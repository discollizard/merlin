<?php
  require "header.php"
 ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<main>
  <div class="container" style="width: 100%; padding-top: 40px; margin-right: : 100px;">
    <h1 class="text-center">Cadastro de Livros</h1>
    <form name="cadastrarlivro" action="includes/cadlivros.inc.php" method="get">
      <input type="text" name="nomeLivro" placeholder="Nome do livro" maxlength="100" class="form-control"><br>
      <input type="text" name="autor" placeholder="Autor" maxlength="50" class="form-control"><br>
      <select name="genero" class="form-control">
        <option value="romance">Romance</option>
        <option value="biografia">Biografia</option>
        <option value="terror">Terror</option>
        <option value="fantasia">Fantasia</option>
        <option value="tecnico">Técnico</option>
        <option value="poesia">Poesia</option>
        <option value="ficcaocientifica">Ficção científica</option>
      </select><br>
      <input type="text" name="editora" placeholder="Editora" maxlength="50" class="form-control"><br>
      <div class="col-xs-3 form-inline">
        <input type="text" name="ano" placeholder="Ano" size="20" maxlength="4" class="form-control" style="margin-right: 62px;">
        <input type="text" name="nopaginas" placeholder="Nº Pág." size="20" maxlength="5" class="form-control"><br>
      </div><br>
      <textarea name="sinopse" rows="4" cols="50" placeholder="Sinopse do livro" maxlength="1000" class="form-control"></textarea><br>
      <div class="d-flex justify-content-center">
        <button type="submit" name="cadastrarlivro" class="btn btn-warning">Cadastrar Livro</button>
      </div>
    </form>
  </div>
</main>

<?php
  require "footer.php"
?>
