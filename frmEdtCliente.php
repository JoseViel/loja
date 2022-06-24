<?php

$id = $_GET['id'];

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from cliente where id=?;";
$query = $pdo->prepare($sql);
$query->execute(array($id));
$cliente = $query->fetch(PDO::FETCH_ASSOC);
Conexao::desconectar();

?>

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

    <title>Editar Cliente</title>
</head>

<body style="background-color:#333333">
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Alterar Dados Do Cliente</h3>
        </div>
        <div class="row">
            <form action="edtCliente.php " method="POST" id="frmEdtCliente" class="col s12">
            <div class="input-field col s8">
                  <h3><label for="lblId" class="black-text bold"><b>ID:  <?php echo $id;?> </b></label> </h3>
                  <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                </div>
                <br>
                <div class="input-field col s8">
                    <label for="lblNome">Informe o Novo Nome do Cliente: </label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome" value="<?php echo $cliente['nome']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblEmail">Informe o Novo Email do Cliente: </label>
                    <input type="text" class="form-control" id="txtEmail" name="txtEmail" value="<?php echo $cliente['email']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblTelefone">Informe o Novo Telefone do Cliente: </label>
                    <input type="text" class="form-control" id="txtTelefone" name="txtTelefone" value="<?php echo $cliente['telefone']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblEndereco">Informe o Novo Endereço do Cliente: </label>
                    <input type="text" class="form-control" id="txtEndereco" name="txtEndereco" value="<?php echo $cliente['endereco'] ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblCidade">Informe a Nova Cidade do Cliente: </label>
                    <input type="text" class="form-control" id="txtCidade" name="txtCidade" value="<?php echo $cliente['cidade'] ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblUf">Informe o Novo UF do Cliente: </label>
                    <input type="text" class="form-control" id="txtUf" name="txtUf" value="<?php echo $cliente['uf'] ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblNumero">Informe o Novo Numero do Cliente: </label>
                    <input type="text" class="form-control" id="txtNumero" name="txtNumero" value="<?php echo $cliente['numero'] ?>">
                </div>

                <br>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light green" type="submit" id="btnGravar">
                        Gravar <i class="material-icons">save</i>
                    </button>

                    <button class="btn waves-effect waves-light orange" type="reset" id="btnLimpar">
                        Limpar <i class="material-icons">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" id="btnVoltar" onclick="JavaScript:location.href='lstcliente.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>