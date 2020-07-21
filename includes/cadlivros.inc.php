<?php
  if(isset($_GET['cadastrarlivro'])){

    require "dbh.inc.php";

    $nomeLivro = $_GET['nomeLivro'];
    $autor = $_GET['autor'];
    $genero = $_GET['genero'];
    $editora = $_GET['editora'];
    $ano = $_GET['ano'];
    $nopaginas = $_GET['nopaginas'];
    $sinopse = $_GET['sinopse'];

  if(empty($autor) || empty($genero) || empty($editora) || empty($ano) || empty($nopaginas) || empty($sinopse)){
      header("Location: ../cadlivros.php?error=camponaopreenchido&nomeLivro=".$nomeLivro."&autor=".$autor."&genero=".$genero."&editora=".$editora."&ano=".$ano."&nopaginas=".$nopaginas."&sinopse=".$sinopse);
      exit();
    }
    else{
      $sql = "SELECT liv_cod FROM livros WHERE liv_nome = ? ";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../cadlivros.php?error=sqlerror");
        exit();
        }
      else{
        mysqli_stmt_bind_param($stmt, "s", $nomeLivro);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultcheck = mysqli_stmt_num_rows($stmt);
        if($resultcheck > 0){
          header("Location: ../cadlivros.php?error=livojaexiste&genero=".$genero."&editora=".$editora."&ano=".$ano."&nopaginas=".$nopaginas."&sinopse=".$sinopse);
        }
        else{
          $sql = "INSERT INTO livros (liv_nome, liv_genero, liv_editora, liv_ano, liv_npaginas, liv_autor, liv_sinopse) VALUES (?, ?, ?, ?, ?, ?, ?) ";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../cadlivros.php?error=sqlerror");
            exit();
            }
          else {
            mysqli_stmt_bind_param($stmt, "sssiiss", $nomeLivro, $genero, $editora, $ano, $nopaginas, $autor, $sinopse);
            mysqli_stmt_execute($stmt);
            header("Location: ../cadlivros.php?cadastro=sucesso");
            exit();
          }
        }

      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


  }
else{
    echo "para de ser gay mano";
}
 ?>
