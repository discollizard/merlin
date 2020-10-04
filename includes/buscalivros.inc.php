<?php

    require "dbh.inc.php";

    $nome=$_GET["delete"];
    echo $nome;
    $query = "DELETE FROM livros WHERE liv_cod='$nome'";

    $result = mysqli_query($conn, $query);

    if($result > 0){
      header('Location: ../buscalivros.php');
    }
    else{
      echo "Um erro ocorreu ao tentar excluir";
    }

?>
