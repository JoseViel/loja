<?php

$id = $_GET['id'];

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from vendedor where id=?;";
$query = $pdo->prepare($sql);
$query->execute(array($id));
$vendedor = $query->fetch(PDO::FETCH_ASSOC);
Conexao::desconectar();

?>

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

    <title>Cadastro</title>
</head>

<body style="background-color: #1b1f27;">

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
            <h3>Cadastrar novo cliente</h3>
        </div>
        <div class="row">
            <form method="POST" action="insCliente.php" id="insCliente" class="col s12">
                <div class="input-field col s8">
                    <i class="material-icons prefix">account_circle</i>
                    <label for="lblNome">Informe o Nome: </label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">face</i>
                    <label for="lblEmail">Informe o Email: </label>
                    <input type="text" class="form-control" id="txtEmail" name="txtEmail">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">phone</i>
                    <label for="lblTelefone">Informe o Telefone: </label>
                    <input type="text" class="form-control" id="txtTelefone" name="txtTelefone">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">face</i>
                    <label for="lblIdade">Informe a Idade: </label>
                    <input type="text" class="form-control" id="txtIdade" name="txtIdade">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">place</i>
                    <label for="lblEndereco">Informe o Endereço: </label>
                    <input type="text" class="form-control" id="txtEndereco" name="txtEndereco">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">place</i>
                    <label for="lblCidade">Informe a Cidade: </label>
                    <input type="text" class="form-control" id="txtCidade" name="txtCidade">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">place</i>
                    <label for="lblUf">Informe o UF: </label>
                    <input type="text" class="form-control" id="txtUf" name="txtUf">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">place</i>
                    <label for="lblNumero">Informe o Numero: </label>
                    <input type="text" class="form-control" id="txtNumero" name="txtNumero">
                </div>

                <br>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light green" type="submit" name="action">
                        Gravar <i class="material-icons">send</i>
                    </button>

                    <button class="btn waves-effect waves-light orange" type="reset" name="btnLimpar">
                        Limpar <i class="material-icons">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar" onclick="JavaScript:location.href='lstCliente.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>

    </div>

</body>

</html>