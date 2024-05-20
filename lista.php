<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
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
    
    
  <title>Lista Dos Usuários</title>

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

  
      <h2>Lista Dos Usuários</h2>
      <table border='1'>
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Senha</th>
        </tr>
        <br>
      <?php
        include_once "Usuario.php";
        include_once "UsuarioDao.php";

        $dao = new UsuarioDao();
        $lista = $dao-> listar();

        foreach($lista as $u) {
          echo "<tr><td>".$u -> getNome()."</td>";
          echo "<td>".$u -> getEmail()."</td>";
          echo "<td>".$u -> getSenha()."</td></tr>";
        }

      ?>

      </table>
    <br>
    <a href="index.php">voltar</a>
    </div>
  </main> 

  <footer>
        <p>
            <center>&copy;Ana Bela Da Silva Gonçalves | 2566936 </center>
        </p>
    </footer>
</body>
</html>