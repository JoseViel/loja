<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['txtNome']); 
    $valor = trim($_POST['txtValor']);
    $descricao = trim($_POST['txtDescricao']);

    if (!empty($nome) && !empty($valor) && !empty($descricao)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO produto(nome, valor, descricao) VALUES (?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $valor, $descricao));
        Conexao::desconectar(); 
    }

    header("location:lstProduto.php");
