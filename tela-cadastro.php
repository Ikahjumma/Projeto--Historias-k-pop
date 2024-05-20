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

    <title>Tela de Cadastro</title>
    
</head>
<body>
    <main>
    <header>
        <div>
            <div class="brand">MAIS Histórias K-POP</div>
        </div>
    </header>
    <div class="container">
        <h2>Faça Seu Cadastro</h2>
        <form action='Cadastrar.php' method='post'> 
            <label>
                <p> Nome:</p>
                <input type="text" name="nome">
            </label>  
            <br>
            <label>
                <p> E-mail:</p>
                <input type="text" name="email"/><br/>
            </label>
            <br>

            <label>
                <p>Senha:</p> 
                <input type="password" name="senha"/><br/>
            </label>
            <br>
            <input type="submit" value="enviar"/>
            
        </form>

    </div>
</main>
<footer>
        <p>
            <center>&copy;Ana Bela Da Silva Gonçalves | 2566936 </center>
        </p>
    </footer>
</body>
</html>