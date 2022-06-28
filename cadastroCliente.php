<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icone.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro Cliente </title>
</head>
<body>
    <section class="area-cliente">
        <div class="cliente">
            <div>
                <img src="img/icone.png"> 
            </div>
                <form class="cli1" method="POST">
                    <input type="text" name="txtNome" placeholder ="Nome de usuario" autofocus>
                    <input type="email" name="txtEmail" placeholder ="Email" autofocus>
                </form>
                <form class="cli2" method="POST">   
                <input type="phone" name="txtTelefone" placeholder ="Telefone" autofocus>
                    <input type="number" name="txtIdade" placeholder="Idade" autofocus>
                </form> 
                <form class="cli3" method="POST">
                    <input type="location" name="txtEndereço" placeholder="Endereço" autofocus>
                    <input type="location" name="txtCidade" placeholder="Cidade" autofocus>
                </form>
                <form class="cli4" method="POST">
                    <input type="UF" name="txtUf" placeholder="UF" autofocus>
                    <input type="number" name="txtNumero" placeholder="Numero" autofocus>
                </form>
                <form class="cli5" method="POST"> 
                    <input type="password" name="senha" placeholder="Sua senha" autofocus>
                    <input type="password" name="senha" placeholder ="Confirme sua senha" autofocus>
                </form> 
                <form class="cli6" method="POST">             
                    <input type="submit" value="Entrar">       
                </form>   
    </section>
</body>
</html>