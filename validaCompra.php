<?php

include 'conexao.php'; 

    $produto = $_GET['id']; 
    $valor = 0;
    if (!isset($_SESSION)) session_start();

    $cliente = $_SESSION['id'];

    $pdo = Conexao::conectar();
    $sql = "select * from produto order by id;";
    $lstProduto = $pdo->query($sql);
    Conexao::desconectar();

    foreach($lstProduto as $produtoComprado){
        if($produtoComprado['id'] == $produto){
            $valor = $produtoComprado['valor'];
        }
    }

    if (!empty($produto) && !empty($valor) && !empty($cliente)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO vendas(produto, valor, cliente) VALUES (?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($produto, $valor, $cliente));
        Conexao::desconectar(); 
    }

    header("location:lstVendas.php");

?>