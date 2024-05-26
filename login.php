<?php

include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha']) ) {

    if(strlen($_POST['email']) == 0) {
        echo "Usuário necessário";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Senha necessária";
    } else {

        $email = $mysqli -> real_escape_string($_POST['email']);
        $senha = $mysqli -> real_escape_string($_POST['senha']);
    
        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$email' AND senha = '$senha'";
        $sql_query = $mysqli -> query($sql_code) or die("Falha na execução SQL: " . $mysqli -> error);
    
        $quantidade = $sql_query -> num_rows;
    
        if($quantidade == 1) {
            $usuario = $sql_query -> fetch_assoc();
    
            if(!isset($_SESSION)){
                session_start();
            }
    
            $_SESSION['id'] = $usuario['id'];
    
            header("location: upload.php");
    
        } else {
            echo "Falaha ao logar!";
        }
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons import -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#ffffff">

    <!-- Icons import -->
    <link rel="stylesheet" type="text/css" href="icofont.css">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
    <div class="container">

        <div class="form-card">
            <form action="" method="POST">
                <h1>LOGIN</h1>
                <p>
                    <label for="email" ><i class="icofont-user-alt-3"></i></label>
                    <input type="text" name="email" placeholder="USUÁRIO" required>
                </p> 
                <p>
                    <label for="password" ><i class="icofont-lock"></i></label>
                    <input type="password" name="senha" placeholder="SENHA" required>
                </p>
                <p>
                    <button type="submit" id="btn-login">ENTRAR</button>
                </p>

            </form>
        </div>
        
    </div>
    
</body>
</html>