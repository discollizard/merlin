<?php
  if(isset($_POST['cadastrarlivro'])){

    require "dbh.inc.php";

    $nomeLivro = $_POST['nomeLivro'];
    $genero = $_POST['genero'];
    $editora = $_POST['editora'];
    $ano = $_POST['ano'];
    $nopaginas = $_POST['nopaginas'];
    $sinopse = $_POST['sinopse'];

    if(empty($nomeLivro) || empty($genero) || empty($editora) || empty($ano) || empty($nopaginas) || empty($sinopse)){
      echo "Formulário não preenchido por completo.";
    }

  }
 ?>
