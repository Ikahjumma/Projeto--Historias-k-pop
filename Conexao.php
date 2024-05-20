<?php

$host = "localhost";
$db_user = "root";
$db_pass = "123456";
$db_name = "membros";

//conexão com o banco de dados membros
$connect = mysqli_connect($host, $db_user, $db_pass, $db_name);

function login ($connect) {
    if(isset($_POST['acessar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])) {

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $senha = sha1($_POST['senha']);
        $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
        $executar = mysqli_query($connect, $query);
        $return = mysqli_fetch_assoc($executar);

        if (!empty($return ['email'])) {
            //echo "Bem vindo " . $return ['nome'];

            session_start();
            $_SESSION['email'] = $return ['emial'];
            $_SESSION['senha'] = $return ['senha'];
            $_SESSION['ativa'] = TRUE;
            header("location:index.php");

        } else {
            echo "Usuário ou senha não encontrados.";
        }
        
    }
}

function logout() {
    session_start();
    session_unset();
    session_destroy();
    header("location: login.php");
}

?>