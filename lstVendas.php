<?php

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from vendas order by id;";
$lstVendas = $pdo->query($sql);
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
    <title>Lista de Vendas</title>
</head>

<body style="background-color:#333333">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class=" white-text text-dark-3" class="text-orange">
                    <div class="vendas"></div>
                    LISTA DE VENDAS
                </h3>

                <div class="row">
                    <div class="input-field">
                        <form action="lstVendas.php" method="GET" id="frmBuscaVendas" class="col s12">
                            <div class="input-field col s12">

                                <input type="text" placeholder="Informe o nome do Produto" class="form-control col s6" id="txtBusca" name="busca">
                                <button class="btn waves-effect waves-light col m1" type="submit" name="action">
                                    <i class="material-icons right">search</i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="striped highlight   blue-grey lighten-3 responsive-table">
                    <tr class="blue-grey darken-4  grey-text text-lighten-3">
                        <th>Id</th>
                        <th>Vendedor</th>
                        <th>Cliente</th>
                        <th>Produto</th>
                        <th>Valor</th>
                    </tr>
                    <?php
                    foreach ($lstVendas as $vendas) {
                    ?>
                        <tr>
                            <td><?php echo $vendas['id']; ?></td>
                            <td><?php echo $vendas['vendedor']; ?></td>
                            <td><?php echo $vendas['cliente']; ?></td>
                            <td><?php echo $vendas['produto']; ?></td>
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