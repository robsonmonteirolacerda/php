<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, inital-sacle=1.0">
        <title>Sistema de Cadastros</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <a href="home.php">Voltar</a>
        <div class="tela-login">
            <h1>Login</h1>
            <form action="finalizaLogin.php" method="POST">
                <input type="text" name="email" id="email" placeholder="E-mail">
                <br><br>
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <br><br>
                <input class="input-submit"  type="submit" name="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>