<!DOCTYPE html>
<html>
  <head>
    <title>Formulário de login</title>
  </head>
  <body>
    <h1>Formulário de login</h1>
    <?php
      if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Verifica se o email e a senha correspondem a um usuário válido
        if ($email == 'email@gmail.com' && $senha == '123') {
          header('Location: verificar.php');
          exit();
        } else {
          echo '<p>Email ou senha inválidos. Tente novamente.</p>';
        }
      }
    ?>
    <form method="POST">
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email" required><br>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" required><br>
      <input type="submit" value="Entrar">
    </form>
  </body>
</html>
