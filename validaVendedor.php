<?php 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    include 'conexao.php';

    $pdo = Conexao::conectar();
    $sql = "select * from vendedor where email LIKE ?";
    $query = $pdo->prepare($sql);
    $query->execute (array($email));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    Conexao::desconectar();

    if(md5($senha) == $dados['senha']){
        session_start();
        $_SESSION['email'] = $dados['email'];
        $_SESSION['senha'] = $dados['senha'];
        $_SESSION['id'] = $dados['id'];
        header("location:dashboardVendedor.php");
       }else{
        echo "Senha ou Email Inválidos";
       }

 ?>