<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/746/746814.png">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Cadastro de Vendedores</title>
</head>

<body style="background-color:#333333">
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Cadastrar Novo Vendedor</h3>
        </div>
        <div class="row">
            <form method="POST" action="insVendedor.php" id="insVendedor" class="col s12">
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
                    <i class="material-icons prefix">place</i>
                    <label for="lblTelefone">Informe o Telefone: </label>
                    <input type="text" class="form-control" id="txtTelefone" name="txtTelefone">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">phone</i>
                    <label for="lblCidade">Informe a Cidade: </label>
                    <input type="text" class="form-control" id="txtCidade" name="txtCidade">
                </div>
                <div class="input-field col s5">
                    <i class="material-icons prefix">phone</i>
                    <label for="lblUf">Informe o UF: </label>
                    <input type="text" class="form-control" id="txtUf" name="txtUf">
                </div>

                <br>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light green" type="submit" name="action">
                        Gravar <i class="material-icons">send</i>
                    </button>

                    <button class="btn waves-effect waves-light orange" type="reset" name="btnLimpar">
                        Limpar <i class="material-icons">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar" onclick="JavaScript:location.href='lstVendedor.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>

    </div>

</body>

</html>