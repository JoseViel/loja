<?php

$id = $_GET['id'];

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from produto where id=?;";
$query = $pdo->prepare($sql);
$query->execute(array($id));
$produto = $query->fetch(PDO::FETCH_ASSOC);
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

    <title>Editar Produto</title>
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
            <h3>Alterar Dados Do Produto</h3>
        </div>
        <div class="row">
            <form action="edtproduto.php " method="POST" id="frmEdtproduto" class="col s12">
            <div class="input-field col s8">
                  <h3><label for="lblId" class="black-text bold"><b>ID:  <?php echo $id;?> </b></label> </h3>
                  <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                </div>
                <br>
                <div class="input-field col s8">
                    <label for="lblNome">Informe o Novo Nome do produto: </label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome" value="<?php echo $produto['nome']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblValor">Informe o Novo Valor do produto: </label>
                    <input type="text" class="form-control" id="txtValor" name="txtValor" value="<?php echo $produto['valor']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblDescricao">Informe o Novo Descrição do produto: </label>
                    <input type="text" class="form-control" id="txtDescricao" name="txtDescricao" value="<?php echo $produto['descricao']; ?>">
                </div>
                <br>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light green" type="submit" id="btnGravar">
                        Gravar <i class="material-icons">save</i>
                    </button>

                    <button class="btn waves-effect waves-light orange" type="reset" id="btnLimpar">
                        Limpar <i class="material-icons">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" id="btnVoltar" onclick="JavaScript:location.href='lstProduto.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>