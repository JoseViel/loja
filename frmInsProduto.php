<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icone.png">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Cadastro de Produtos</title>
</head>

<body style="background-color: #1b1f27;;">

    <!-- menu suspenso -->
    <nav class="black">
        <div class="nav-wrapper">
        <a href="" class="brand-logo right"><img src="img/icone.png" width="60"></a>
        <ul id="nav-mobile">
            <li><a href="lstVendas.php">Vendas</a></li>
            <li><a href="lstVendedor.php">Vendedores</a></li>
            <li><a href="lstCliente.php">Clientes</a></li>
            <li><a href="lstProduto.php">Produtos</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
        </div>
    </nav>


    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Cadastrar Novo Produto</h3>
        </div>
        <div class="row">
            <form method="POST" action="insProduto.php" id="insProduto" class="col s12">
                <div class="input-field col s8">
                    <i class="material-icons prefix">sell</i>
                    <label for="lblNome">Informe o Nome do Produto: </label>
                    <input type="text" class="form-control" id="txtNome" required name="txtNome">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">money</i>
                    <label for="lblValor">Informe o Valor do Produto: </label>
                    <input type="text" class="form-control" id="txtValor" required name="txtValor">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">description</i>
                    <label for="lblDescricao">Informe a Descrição do Produto: </label>
                    <input type="text" class="form-control" id="txtDescricao" required name="txtDescricao">
                </div>
                <br>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light green" type="submit" name="action">
                        Gravar <i class="material-icons">send</i>
                    </button>

                    <button class="btn waves-effect waves-light orange" type="reset" name="btnLimpar">
                        Limpar <i class="material-icons">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar" onclick="JavaScript:location.href='lstProduto.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>

    </div>

</body>

</html>