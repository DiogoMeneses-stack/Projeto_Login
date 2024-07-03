<?php
session_start();
    if(!$_SESSION['email']){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/index.css">
    <title>System Login</title>
</head>

<body>
    <header class="header">
    </header>
    <nav class="nav">
    </nav>
    <main class="menu">
        <div class="content">
            <?php require_once('resources/components/menu.php') ?>
        </div>
    </main>
    <footer class="footer">
        <?php require_once('resources/components/footer.php'); ?>
    </footer>
</body>

</html>