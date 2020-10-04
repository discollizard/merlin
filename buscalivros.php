<?php
  require "header.php"
 ?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="css/helper.css">
<body>
  <div class="container-fluid">
    <?php
      require "includes/dbh.inc.php";

      error_reporting(0);

      $frmPesquisar = $_GET['frmPesquisar'];

      $sql = "SELECT * FROM livros WHERE liv_nome LIKE '%$frmPesquisar%'";
      $result = mysqli_query($conn, $sql);
      $queryResults = mysqli_num_rows($result);

      if($queryResults > 0) {

          echo "<div class='container-fluid' style='overflow-x: auto;'>
                  <table class='table'>
                    <thead>
                      <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Nome</th>
                        <th scope='col'>Gênero</th>
                        <th scope='col'>Editora</th>
                        <th scope='col'>Ano</th>
                        <th scope='col'>Nº Páginas</th>
                        <th scope='col'>Autor</th>
                        <th scope='col'>Sinopse</th>
                        <th scope='col'>Excluir</th>
                      </tr>
                    </thead>
                    <tbody>";
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "
                      <tr>
                        <th scope='row'>".$row['liv_cod']."</th>
                        <td>".$row['liv_nome']."</td>
                        <td>".$row['liv_genero']."</td>
                        <td>".$row['liv_editora']."</td>
                        <td>".$row['liv_ano']."</td>
                        <td>".$row['liv_npaginas']."</td>
                        <td>".$row['liv_autor']."</td>
                        <td>".$row['liv_sinopse']."</td>
                        <td>
                          <form name='deletebtn' method='get' action='includes/buscalivros.inc.php'>
                            <input type='checkbox' name='delete' value='".$row['liv_cod']."'>

                        </td>
                      </tr>
                      ";
                    }


                    echo "</table>";
                echo "<input type='submit' value='Excluir'>
                  </form>";
              echo "</div>";


        }
        else {
          echo "<div class='col-centered'>
                  <div class='col-xs-4' style='margin: 25%;'>
                    <h2> Desculpe, não foi possível encontrar um resultado </h2>
                  </div>
                </div>";
        }
    ?>
  </div>

</body>
<?php
  require "footer.php"
?>
