<?php
session_start(); // Inicio de Sessão

//Cookies
if ($_COOKIE['users']) {
    $_SESSION['users'] = $_COOKIE['users'];
}

//Requisição pro backend
require_once 'backend/validar_login.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="resources/img/Person.svg" type="icon/png">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="index.php">

</head>

<body>
    <div>
        <h1>Login</h1>
        <?php if ($_SESSION['erros']) : ?> <!-- Aqui ele verifica se existe usuario -->
            <div class="erros">
                <?php foreach ($_SESSION['erros'] as $erro) : ?>
                    <p><?= $erro ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <form action="#" method="post">
            <input id="email" type="email" name="email" placeholder="Email">
            <br><br>
            <input id="password" type="password" name="passwaord" placeholder="Senha">
            <br><br>
            <button id="enviar" type="submit">Send</button>
            <br><br>
            <button id="criar" type="submit">Create User</button>
        </form>
    </div>
</body>

</html>

<script src="recursos/js/called.js"></script>