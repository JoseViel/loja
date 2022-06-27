
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
        <li><a href="lstVendas.php">Vendas</a></li>
        <li><a href="lstVendedor.php">Vendedores</a></li>
        <li><a href="lstCliente.php">Clientes</a></li>
        <li><a href="lstProduto.php">Produtos</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  

  <!-- menu lateral -->
  <ul id="slide-out" class="sidenav">
    <!-- <div class="teal lighten-5"> -->
    <li><div class="admin-view">

      <a href="#admin"><img class="circle" src="img/admin.png"></a>
      <a href="txtNome"><span class="white-text name"> <?php $admin['nome'] ?></span></a>
      <a href="txtEmail"><span class="white-text email"><?php $admin['email']?></span></a>
    </div></li>
    <li><a href="lstCliente.php"><i class="material-icons">people</i>Lista de Clientes</a></li>
    <li><a href="lstVendedor.php"><i class="material-icons">person</i>Lista de Vendedores</a></li>
    <li><a href="lstVendas.php"><i class="material-icons">storage</i>Lista de Vendas</a></li>
    <li></li>
    <!-- </div> -->
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
 

        <section class="area-menu">
            <div class="menu">
                <div>
                    
                    <div background ="black" class="row, center">
                        <div class="input-field">
                            <form method="GET" class="col s12" >
                                <div class="input-field col s12">
                               <h4> <div type="button" onclick="JavaScript:location.href='lstVendedor.php'"><img class="img_icon" src="img/vendedor.png" height="100px" width="100px"></div>
                                Vendedores
                                <div type="button" onclick="JavaScript:location.href='lstCliente.php'"><img class="img_icon" src="img/cliente.png" height="100px" width="100px"></div>
                                Clientes
                                <div  type="button" onclick="JavaScript:location.href='lstProduto.php'"><img class="img_icon" src="img/produto.png" height="100px" width="100px"></div>
                                Produtos
                                <div  type="button" onclick="JavaScript:location.href='lstVendas.php'"><img class="img_icon" src="img/vendas.png" height="100px" width="100px"></div>
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
    
    </script>
