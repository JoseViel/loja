<?php

if(!isset($_SESSION)) session_start();

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from vendas order by id;";
$lstVendas = $pdo->query($sql);
Conexao::desconectar();

$pdo = Conexao::conectar();
$sql = "select * from produto order by id;";
$lstProdutos = $pdo->query($sql);
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
    <title>Lista de Vendas</title>
</head>

<body style="background-color: #1b1f27;">

    <!-- menu suspenso -->
    <nav class="black">
        <div class="nav-wrapper">
            <a href="" class="brand-logo right"><img src="img/icone.png" width="60"></a>
            <ul id="nav-mobile">
                <li><a href="lstVendas.php">Vendas</a></li>
                <li><a href="lstvendas.php">vendases</a></li>
                <li><a href="lstCliente.php">Clientes</a></li>
                <li><a href="lstProduto.php">Produtos</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class=" white-text text-dark-3" class="text-orange">
                    <div class="vendas"><img class="img" src="img/vendas.png" height="100px" width="100px"></div>
                    LISTA DE VENDAS
                </h3>
                <a class="btn-floating btn-large waves-effect waves-light grey darken-1 accent-3" onclick="JavaScript:location.href='dashboardvendas.php'">
                    <i class="material-icons">keyboard_backspace</i>
                </a>

                <div class="row">
                    <div class="input-field">
                        <form action="lstvendas.php" method="GET" id="frmBuscavendas" class="col s12">
                            <div class="input-field col s12">

                                <input type="text" placeholder="Informe o Nome do vendas" class="form-control col s6" id="txtBusca" name="busca">
                                <button class="btn waves-effect waves-light col m1" type="submit" name="action">
                                    <i class="material-icons right">search</i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="striped highlight   blue-grey lighten-3 responsive-table">
                    <tr class="blue-grey darken-4  grey-text text-lighten-3">
                        <th>Id</th>
                        <th>Cliente</th>
                        <th>Produto</th>
                        <th>Valor</th>
                    </tr>
                    <?php
                    foreach ($lstVendas as $vendas) {
                        foreach($lstProdutos as $produto){
                            if($produto['id'] == $vendas['produto']){
                                $produtoAtual = " ";
                                $produtoAtual = $produto['nome'];
                            }
                        }
                    ?>
                        <tr>
                            <td><?php echo $vendas['id']; ?></td>
                            <td><?php echo $_SESSION['nome']; ?></td>
                            <td><?php echo $produtoAtual; ?></td>
                            <td><?php echo $vendas['valor']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>

</body>

</html>