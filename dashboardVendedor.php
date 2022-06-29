<?php

if(!isset($_SESSION)) session_start();

$id = $_SESSION['id'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icone.png">
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title> Dashboard </title>
</head>

<body>
   <!-- menu suspenso -->
  <nav class="black">
    <div class="nav-wrapper">
      <a href="" class="brand-logo right"><img src="img/icone.png" width="60"></a>
      <ul id="nav-mobile">
        <li><a href="">Vendas</a></li>
        <li><a href="lstVendedor.php">Vendedores</a></li>
        <li><a href="lstCliente.php">Clientes</a></li>
        <li><a href="lstProduto.php">Produtos</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  

  <!-- menu lateral -->
  <ul id="slide-out" class="sidenav">
    <!-- <div class="teal lighten-5"> -->
    <li><div class="user-view">

      <a href="#user"><img class="circle" src="img/admin.png"></a>

    </div></li>
    <li><a style="color: white" href="lstCliente.php"><i style="color: white;" class="material-icons">people</i>Lista de Clientes</a></li>
    <li><a style="color: white" href="lstVendedor.php"><i style="color: white;" class="material-icons">person</i>Lista de Vendedores</a></li>
    <li><a  style="color: white"href=""><i style="color: white" class="material-icons">storage</i>Lista de Vendas</a></li>
    <li><a style="color: white" href="frmEdtVendedor.php"><i style="color: white;" class="material-icons">face</i>Editar Dados</a></li>
    <li><a style="color: white" onclick="JavaScript:remover(<?php echo $id?>)"><i style="color: white;" class="material-icons" >remove</i>Deletar Conta</a></li>
    <li></li>
    <!-- </div> -->
  </ul>
  <a style="color: white;" href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
 

        <section class="area-menu">
            <div class="menu">
                <div>
                    
                    <div background ="black" class="row, center">
                        <div class="input-field">
                            <form method="GET" class="col s12" >
                                <div class="input-field col s12">
                               <h4 style="color: #cbd0f7"> <div style="cursor:pointer" type="button" onclick="JavaScript:location.href='lstVendedor.php'"><img class="img_icon" src="img/vendedor.png" height="100px" width="100px"></div>
                                Vendedores
                                <div type="button" onclick="JavaScript:location.href='lstCliente.php'"><img  style="cursor:pointer" class="img_icon" src="img/cliente.png" height="100px" width="100px"></div>
                                Clientes
                                <div  type="button" onclick="JavaScript:location.href='lstProduto.php'"><img class="img_icon" src="img/produto.png" height="100px" width="100px"></div>
                                Produtos
                                <div  type="button" onclick="JavaScript:location.href=''"><img class="img_icon" src="img/vendas.png" height="100px" width="100px"></div>
                                Vendas
                                </h4>
                                </div>
                            </form>
                </div>          
            </div>
        </section>
        <br>
      </div>
     </div>
    </div>

</body>
</html>

<script type="text/javascript"> 

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
      });
    
      // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
      // var collapsibleElem = document.querySelector('.collapsible');
      // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);
    
      // Or with jQuery
    
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });

      function remover(id) {
        var dialog = confirm('Excluir o vendedor ' + id + '?');
        if (dialog) {
          console.log("Conta deletada");
           location.href = 'remVendedor.php?id=' + id;
        }
    }
    
    </script>
