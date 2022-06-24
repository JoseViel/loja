<?php 
    include 'conexao.php'; 

    $nome = trim($_POST['txtNome']);
    $email = trim($_POST['txtEmail']); 
    $telefone = trim($_POST['txtTelefone']);
    $cidade = trim($_POST['txtCidade']);
    $uf = trim($_POST['txtUf']);

    if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($cidade) && !empty($uf)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO vendedor(nome, email, telefone, cidade, uf) VALUES (?,?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $telefone, $cidade, $uf));
        Conexao::desconectar(); 
    }

    header("location:lstVendedor.php");
?>