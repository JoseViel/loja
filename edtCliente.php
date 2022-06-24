<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['txtNome']); 
    $email = trim($_POST['txtEmail']);
    $telefone = trim($_POST['txtTelefone']); 
    $idade = trim($_POST['txtIdade']);
    $endereco = trim($_POST['txtEndereco']);
    $cidade = trim($_POST['txtCidade']);
    $uf = trim($_POST['txtUf']);
    $numero = trim($_POST['txtNumero']);
    $id = trim($_POST['id']);

    if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($idade) && !empty($endereco) && !empty($cidade) && !empty($uf) && !empty($numero) && !empty($id)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE cliente SET nome=?,email=?,telefone=?,idade=?,endereco=?,cidade=?,uf=?,numero=? WHERE id=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $telefone, $idade, $endereco, $cidade, $uf, $numero, $id));
        Conexao::desconectar(); 
    }

    header("location:lstCliente.php");

?> 