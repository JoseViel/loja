<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['txtNome']); 
    $valor = trim($_POST['txtValor']);
    $descricao = trim($_POST['txtDescricao']); 
    $id = trim($_POST['id']);

    if (!empty($nome) && !empty($valor) && !empty($descricao) && !empty($id)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE produto SET nome=?,valor=?,descricao=? WHERE id=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $valor, $descricao, $id));
        Conexao::desconectar(); 
    }

    header("location:lstProduto.php");
