<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-tela-inicial.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script 
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script 
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script 
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  <title>Exclusão Efetuada</title>
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

    $email = $_GET["email"];
    $dao = new UsuarioDao();
    $u = new Usuario(null, $email, null );

    echo "<p>";
    if( $dao->excluir($u) ) {
      echo "Usuario excluído";
    } else {
      echo "Usuario não encontrado";
    }
    echo "</p>";

  ?>

<a href="index.php">Voltar para página inicial</a>
  </div> 
</main>
<footer>
        <p>
            <center>&copy;Ana Bela Da Silva Gonçalves | 2566936 </center>
        </p>
    </footer>
</body>
</html>