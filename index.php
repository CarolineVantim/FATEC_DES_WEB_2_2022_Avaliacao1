<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    session_start();
    if($_POST['username'] == 'fatec' && $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'fatec';
            header('Location: dashboard.php');
    }else{
        $_SESSION['loggedin'] = FALSE;
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="content">
        <h2>Faça seu Login</h2>

        <div>
            <form method="POST">
                <label for="">Usuário</label>
                <input type="text" name="username" placeholder="Insira seu usuário de acesso">

                <label for="">Senha</label>
                <input type="password" name="password" placeholder="Insira sua senha">

                <button type="submit">Acessar</button>
            </form>
        </div>
    </div>
    <footer>Todos os direitos reservados</footer>
</body>
</html>