<?php

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from vendedor order by id;";
$lstVendedor = $pdo->query($sql);
Conexao::desconectar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icone.png">
    <link rel="stylesheet" href="style.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Lista de Vendedores</title>
</head>

<body>

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

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class=" white-text text-dark-3" class="text-orange">
                    <div class="vendedor"><img class="img" src="img/vendedor.png" height="100px" width="100px"></div>
                    LISTA DE VENDEDORES
                </h3>
                <a class="btn-floating btn-large waves-effect waves-light grey darken-1 accent-3" onclick="JavaScript:location.href='dashboardVendedor.php'">
                    <i class="material-icons">keyboard_backspace</i>
                </a>
                <a class="btn-floating btn-large waves-effect waves-light green" onclick="JavaScript:location.href='frmInsvendedor.php'"><i class="material-icons">add</i></a>

                <div class="row">
                    <div class="input-field">
                        <form action="lstVendedor.php" method="GET" id="frmBuscaVendedor" class="col s12">
                            <div class="input-field col s12">

                                <input type="text" placeholder="Informe o Nome do Vendedor" class="form-control col s6" id="txtBusca" name="busca">
                                <button class="btn waves-effect waves-light col m1" type="submit" name="action">
                                    <i class="material-icons right">search</i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="striped highlight   blue-grey lighten-3 responsive-table">
                    <tr class="blue-grey darken-4  grey-text text-lighten-3">
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Cidade</th>
                        <th>UF</th>
                        <th>Editar</th>
                        <th>Remover</th>
                    </tr>
                    <?php
                    foreach ($lstVendedor as $vendedor) {
                    ?>
                        <tr>
                            <td><?php echo $vendedor['id']; ?></td>
                            <td><?php echo $vendedor['nome']; ?></td>
                            <td><?php echo $vendedor['email']; ?></td>
                            <td><?php echo $vendedor['telefone']; ?></td>
                            <td><?php echo $vendedor['cidade']; ?></td>
                            <td><?php echo $vendedor['uf']; ?></td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='frmEdtVendedor.php?id=' +
                          <?php echo $vendedor['id']; ?>">
                                    <i class="material-icons">edit</i>
                            </td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:location.href='remVendedor.php?id=' +
                          <?php echo $vendedor['id']; ?>">
                                    <i class="material-icons">delete</i>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>

</body>

</html>