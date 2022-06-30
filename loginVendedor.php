<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icone.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>

<body>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="img/icone.png">
            </div>
            <form method="POST" action="validaVendedor.php">
                <input type="text" name="email" placeholder="Email" autofocus>
                <input type="password" name="senha" placeholder="Senha" autofocus>
                <input type="submit" name="action" value="Entrar">
            </form>
            <p> Ainda não tem uma conta? <a href="cadastroVendedor.php">Criar uma Conta.</a></p>
        </div>
    </section>
</body>

</html>