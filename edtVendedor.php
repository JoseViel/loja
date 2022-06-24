<?php 

    include 'conexao.php'; 

    $id = trim($_POST['id']);
    $nome = trim($_POST['txtNome']); 
    $email = trim($_POST['txtEmail']);
    $telefone = trim($_POST['txtTelefone']); 
    $cidade = trim($_POST['txtCidade']);
    $uf = trim($_POST['txtUf']);

    if (!empty($id) && !empty($nome) && !empty($email) && !empty($telefone) && !empty($cidade) && !empty($uf)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE vendedor SET nome=?,email=?,telefone=?,cidade=?,uf=? WHERE id=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $telefone, $cidade, $uf, $id));
        Conexao::desconectar(); 
    }

    header("location:lstVendedor.php");
?> 