<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icone.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro Vendedor</title>
</head>
<body>
    <section class="area-vendedor">
        <div class="vendedor">
            <div>
                <img src="img/icone.png"> 
            </div>
                <form method="POST" action="insVendedor.php">
                    <input type="text" required name="txtNome" placeholder ="Nome de usuario" autofocus>
                    <input type="email" required name="txtEmail" placeholder ="Email" autofocus>
                    <input type="phone" required name="txtTelefone" placeholder ="Telefone" autofocus>
                    <input type="location" required name="txtCidade" placeholder="Cidade" autofocus>
                    <input type="UF" required name="txtUf" placeholder="UF" autofocus>
                    <input type="password" required name="senha" placeholder="Sua Senha" autofocus>            
                    <input type="submit" name="action" value="Cadastrar">       
                </form>   
    </section>
</body>
</html>