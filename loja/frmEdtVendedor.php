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
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/746/746814.png">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Editar Vendedor</title>
</head>

<body style="background-color:#333333">
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Alterar Dados Do Vendedor</h3>
        </div>
        <div class="row">
            <form action="edtvendedor.php " method="POST" id="frmEdtvendedor" class="col s12">
            <div class="input-field col s8">
                  <h3><label for="lblId" class="black-text bold"><b>ID:  <?php echo $id;?> </b></label> </h3>
                  <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                </div>
                <br>
                <div class="input-field col s8">
                    <label for="lblNome">Informe o Novo Nome do Vendedor: </label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome" value="<?php echo $vendedor['nome']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblEmail">Informe o Novo Email do Vendedor: </label>
                    <input type="text" class="form-control" id="txtEmail" name="txtEmail" value="<?php echo $vendedor['email']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblTelefone">Informe o Novo Telefone do Vendedor: </label>
                    <input type="text" class="form-control" id="txtTelefone" name="txtTelefone" value="<?php echo $vendedor['telefone']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblCidade">Informe a Nova Cidade do Vendedor: </label>
                    <input type="text" class="form-control" id="txtCidade" name="txtCidade" value="<?php echo $vendedor['cidade'] ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblUf">Informe o Novo UF do vendedor: </label>
                    <input type="text" class="form-control" id="txtUf" name="txtUf" value="<?php echo $vendedor['uf'] ?>">
                </div>
                <br>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light green" type="submit" id="btnGravar">
                        Gravar <i class="material-icons">save</i>
                    </button>

                    <button class="btn waves-effect waves-light orange" type="reset" id="btnLimpar">
                        Limpar <i class="material-icons">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" id="btnVoltar" onclick="JavaScript:location.href='lstVendedor.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>