<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icone.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="img/icone.png"> 
            </div>
                <form method="POST">
                    <input type="text" name="nome" placeholder ="Nome de Usuario" autofocus>
                    <input type="email" name="email" placeholder ="Seu Email" autofocus>
                    <input type="password" name="senha" placeholder="Sua Senha" autofocus>
                    <input type="password" name="senha" placeholder ="Confirme sua Senha" autofocus>
                    <input onclick="alert('Seu Cadastro foi Realziado com Sucesso!')" type="submit" value="Entrar">
                </form>   
    </section>
</body>
</html>