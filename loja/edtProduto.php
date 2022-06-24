<?php 

    include 'conexao.php'; 

    $id = trim($_POST['id']);
    $nome = trim($_POST['txtNome']); 
    $valor = trim($_POST['txtValor']);
    $descricao = trim($_POST['txtDescricao']); 

    if (!empty($id) && !empty($nome) && !empty($valor) && !empty($descricao)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE produto SET nome=?,valor=?,descricao=? WHERE id=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($id, $nome, $valor, $descricao));
        Conexao::desconectar(); 
    }

    header("location:lstProduto.php");
?> 