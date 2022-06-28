<?php
    $login = trim($_POST['login']); 
    $pwd = trim($_POST['password']); 

    // echo $email . " - " .$pwd

   include 'conexao.php';
   $sql = "select * from vendedor where login LIKE ?";
   $pdo = Conexao::conectar(); 
   $query = $pdo->prepare($sql);
   $query->execute (array($email));
   $vendedor = $query->fetch(PDO::FETCH_ASSOC);
   Conexao::desconectar(); 

   echo $pwd . " - " . $vendedor['password']; 

   if (md5($pwd) == $vendedor['password']){
    //  echo "passei aqui"; 
      session_start();
      $_SESSION['login'] = $vendedor['login'];
      $_SESSION['pwd'] = $vendedor['password']; 
     header("location:dashboard.php");
   }
?>
