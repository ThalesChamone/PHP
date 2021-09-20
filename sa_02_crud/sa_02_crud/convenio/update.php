<?php
    require_once '../conexao.php';

    if(isset($_GET['id_convenio'])){
        $id_convenio = addslashes($_GET['id_convenio']);
        $fantasia = addslashes($_POST['nome_fantasia']);
        $empresa = addslashes($_POST['nome_empresa']);
        $cnpj = addslashes($_POST['cnpj']);
        $email = addslashes($_POST['email']);
        $nome_cont = addslashes($_POST['nome_cont']);
        $homepage = addslashes($_POST['homepage']);
        $telefone = addslashes($_POST['telefone']);
        $celular = addslashes($_POST['celular']);
        $endereco = addslashes($_POST['endereco']);
        $numero = addslashes($_POST['numero']);
        $cep = addslashes($_POST['cep']);
        $complemento = addslashes($_POST['complemento']);
        $cidade = addslashes($_POST['cidade']);
        $estado = addslashes($_POST['estado']);
    }

    $cmd = $conn->prepare("UPDATE convenios SET nome_fantasia = :a, nome_empresa = :b, cnpj = :c, email = :d, nome_cont = :e, homepage = :f, telefone = :g, celular = :h, endereco = :i, numero = :j, cep = :k, complemento = :l, cidade = :m, estado = :n WHERE id_convenio = :id");

    $cmd->bindParam(":a", $fantasia);
    $cmd->bindParam(":b", $empresa);
    $cmd->bindParam(":c", $cnpj);
    $cmd->bindParam(":d", $email);
    $cmd->bindParam(":e", $nome_cont);
    $cmd->bindParam(":f", $homepage);
    $cmd->bindParam(":g", $telefone);
    $cmd->bindParam(":h", $celular);
    $cmd->bindParam(":i", $endereco);
    $cmd->bindParam(":j", $numero);
    $cmd->bindParam(":k", $cep);
    $cmd->bindParam(":l", $complemento);
    $cmd->bindParam(":m", $cidade);
    $cmd->bindParam(":n", $estado);
    $cmd->bindParam(":id", $id_convenio);
    $cmd->execute();

    header("location: index.php");
    
?>