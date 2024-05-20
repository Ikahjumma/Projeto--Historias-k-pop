<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="style-tela-inicial.css">

      <!--BOOTSTRAP-->

  <link rel="stylesheet" 
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script 
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script 
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script 
  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>Confirmação de Cadastro</title>
</head>
<body>
  <main>
  <header>
            <div>
                <div class="brand">MAIS Histórias K-POP
                </div>      
            </div>
    </header>

    <div class="container">

    <?php
      include_once "UsuarioDao.php";
      include_once "Usuario.php";

      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = sha1($_POST["senha"]);
   
      $u = new Usuario($nome, $email, $senha);
      $dao = new UsuarioDao();
      if( $dao->inserir($u) ) {
        echo "<p>".$u->getNome()." Cadastro Realizado </p>";
      }
    ?>
   
    <a href="index.php">Voltar</a> 
    </div>
  </main>
  <footer>
        <p>
            <center>&copy;Ana Bela Da Silva Gonçalves | 2566936 </center>
        </p>
    </footer>
</body>
</html>
 