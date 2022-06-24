<?php

    $id = trim($_GET['id']); 
   
   include 'conexao.php';
    if (!empty($id) ){
        $sql = "DELETE from produto WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        Conexao::desconectar(); 
    }

    header("location:lstProduto.php"); 

?>