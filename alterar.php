<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-tela-inicial.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

          <!--BOOTSTRAP-->

    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script 
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script 
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script 
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <title>Fazer Alteração</title>
</head>

<body>
<main>
<header>
  <div>
    <div class="brand">MAIS Histórias K-POP</div>        
  </div>
</header>            
<div class="container">
           
<?php
  include_once "Usuario.php";
  include_once "UsuarioDao.php";

  $email = $_POST["email"];
  $dao = new UsuarioDao();
  $u = $dao-> buscarPeloEmail ($email);

?>

  <form action='alteracao.php' method='post'>
    <p>
      Nome: <input type="text" name="nome" value="<?php echo $u->getNome();?>"/>
      <br>
    </p>
    <p>
      Email: <input type="text" name="email" value="<?php echo $u->getEmail();?>"/>
      <br>
    </p>
    <p>
      Senha: <input type="password" name="senha" value="<?php echo $u->getSenha();?>"/>
      <br>
    </p>
    <br>
    <input type="submit" value="Alterar"/>
  </form>
  <br>
  <a href="index.php"> Voltar </a>
  
  </div> 
  </main>

  <footer>
        <p>
            <center>&copy;Ana Bela Da Silva Gonçalves | 2566936 </center>
        </p>
    </footer>
  

</body>

</html>