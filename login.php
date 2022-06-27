<?php
    $email = trim($_POST['email']); 
    $senha = trim($_POST['password']); 

   include 'conexao.php';
   $sql = "select * from admin where login LIKE ?";
   $pdo = Conexao::conectar(); 
   $query = $pdo->prepare($sql);
   $query->execute (array($email));
   $admin = $query->fetch(PDO::FETCH_ASSOC);
   Conexao::desconectar(); 

   echo $senha . " - " . $admin['password']; 

   if (md5($senha) == $admin['password']){
      session_start();
      $_SESSION['login'] = $admin['login'];
      $_SESSION['senha'] = $admin['password']; 
     header("location:menu.php");
   } else{
      echo "Senha ou Email inválidos";
   }
?>