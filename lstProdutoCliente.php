<?php

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from produto order by id;";
$lstProduto = $pdo->query($sql);
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Lista de Produtos</title>
</head>

<body>

 <!-- menu suspenso -->
 <nav class="black">
    <div class="nav-wrapper">
      <a href="" class="brand-logo right"><img src="img/icone.png" width="60"></a>
      <ul id="nav-mobile">
        <li><a href="lstProdutoCliente.php">Produtos</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>


    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class=" white-text text-dark-3" class="text-orange">
                    <div class="produto"><img class="img" src="img/produto.png" height="100px" width="100px"></div>
                    LISTA DE PRODUTOS
                </h3>
                <a class="btn-floating btn-large waves-effect waves-light grey darken-1 accent-3" onclick="JavaScript:location.href='dashboardCliente.php'">
                    <i class="material-icons">keyboard_backspace</i>
                </a>
                <div class="row">
                    <div class="input-field">
                        <form action="lstProduto.php" method="GET" id="frmBuscaProdutos" class="col s12">
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
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                        <th>Comprar</th>
                    </tr>
                    <?php
                    foreach ($lstProduto as $produto) {
                    ?>
                        <tr>
                            <td><?php echo $produto['id']; ?></td>
                            <td><?php echo $produto['nome']; ?></td>
                            <td><?php echo $produto['valor']; ?></td>
                            <td><?php echo $produto['descricao']; ?></td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light green" onclick="alert('Produto Comprado!')">
                                    <i class="material-icons">sell</i>
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