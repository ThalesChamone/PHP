<?php
    require_once '../conexao.php';
    
        $fantasia = $_POST['nome_fantasia'];
        $empresa = $_POST['nome_empresa'];
        $cnpj = $_POST['cnpj'];
        $email = $_POST['email'];
        $nome_cont = $_POST['nome_cont'];
        $homepage = $_POST['homepage'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $cep = $_POST['cep'];
        $complemento = $_POST['complemento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        
        $conn->query("INSERT INTO convenios(nome_fantasia, nome_empresa, cnpj, email, nome_cont, homepage, telefone, celular, endereco, numero, cep, complemento, cidade, estado) VALUES ('$fantasia', '$empresa', '$cnpj', '$email', '$nome_cont', '$homepage', '$telefone', '$celular', '$endereco', '$numero', '$cep', '$complemento', '$cidade', '$estado');");

        header("location: index.php");
?>