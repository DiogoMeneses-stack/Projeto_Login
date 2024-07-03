<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="resources/css/register.css" />

    <title>Tela de Cadastro</title>
</head>

<body>

    <div class="container">
        <section class="header">
            <h2>Nova conta</h2>
        </section>
        <form id="form" class="form">

            <div class="form-content">
                <label for="username">Nome do usuário</label>
                <input type="text" id="username" placeholder="Digite o nome do usuario..." />
                <a>Aqui vai a mensagem de erro....</a>
            </div>

            <div class="form-content">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Digite o seu email..." />
                <a>Aqui vai a mensagem de erro....</a>
            </div>

            <div class="form-content">
                <label for="password">Senha</label>
                <input type="password" id="password" placeholder="Digite sua senha..." />
                <a>Aqui vai a mensagem de erro....</a>
            </div>

            <div class="form-content">
                <label for="password-confirmation">Confirmação de senha</label>
                <input type="password" id="password-confirmation" placeholder="Digite sua senha novamente..." />
                <a>Aqui vai a mensagem de erro....</a>
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <script src="resources/js/script.js"></script>
</body>

</html>