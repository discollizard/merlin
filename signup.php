<?php
  require "header.php";
 ?>

  <main>
    <h1>Cadastrar-se</h1>
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="usuario" placeholder="Usuário"><br>
      <input type="password" name="senha" placeholder="Senha"><br>
    </form>
  </main>

<?php
  require "footer.php";
 ?>
