<?php
    require_once "Conexao.php";
    if (isset($_POST['acessar'])) {
        login ($connect);
    }
?>
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


    <title>Login</title>
</head>
<body>
    <main>
        <header>
            <div class="navbar">
                <div class="brand">MAIS Histórias K-POP</div>
                <img src="img/mais-historias-200px.png" alt="logo do blog mais historias kpop">
            </div>
        </header>

        <div class="container">
            <form action="" method="post">
                <p>Email: </p>
                <input type="email" name="email" required>
                <br>
                <br>
                <p>Senha: </p>
                <input type="password" name="senha" required>
                <br>
                <br>
                <input type="submit" name="acessar" value="Acessar">
               

            </form>

        </div>

        <div class="container">
            <h2>
                Quem Somos?
            </h2>
            <p>
                Somos assim como você Kpoppers, fizemos o blog com intenção de compartilhar nosso conhecimento. Para que tenha acesso ao blog é necessario que tenha uma conta, pois assim ficará por dentro de nossas novas matérias.
            </p>

        </div>

    </main>
    <footer>
        <p>
            <center>&copy;Ana Bela Da Silva Gonçalves | 2566936 </center>
        </p>
    </footer>
</body>
</html>