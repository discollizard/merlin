<?php
  require "header.php";
 ?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<body>
  <div class="container-fluid">
    <?php
      require "includes/dbh.inc.php";
      $sql = "SELECT * FROM livros";
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
                      </tr>";
                    }


                echo "</table>";
              echo "</div>";

        }
    ?>
  </div>
</body>
<?php
  require "footer.php";
 ?>
