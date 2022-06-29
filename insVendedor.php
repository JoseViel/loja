<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['txtNome']);
    $email = trim($_POST['txtEmail']); 
    $telefone = trim($_POST['txtTelefone']);
    $cidade = trim($_POST['txtCidade']);
    $uf = trim($_POST['txtUf']);
    $senha = trim($_POST['senha']);
    $senha = md5($senha);

    if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($cidade) && !empty($uf) && !empty($senha)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO vendedor(nome, email, telefone, cidade, uf, senha) VALUES (?,?,?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $telefone, $cidade, $uf, $senha));
        Conexao::desconectar(); 
    }

    header("location:choose.php");
?>