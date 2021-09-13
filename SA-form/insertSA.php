<?php
    require_once 'conexao.php';
    if(isset($_POST['codigo'], $_POST['valor'], $_POST['nome'],$_POST['genero'],$_POST['excecao'],$_POST['data_procedimento'])){
        $codigo = addslashes($_POST['codigo']); 
        $valor = addslashes($_POST['valor']);
        $nome = addslashes($_POST['nome']);        
        $genero = addslashes($_POST['genero']);
        $excecao = addslashes($_POST['excecao']);
        $data = addslashes($_POST['data_procedimento']);
    }

    $cadastro = $bancoSA->prepare("INSERT INTO dados (codigo, nome, valor, genero, excecao,data_procedimento) VALUES (:c, :n, :v, :g, :e, :d)");
    $cadastro->bindParam(":c", $codigo);
    $cadastro->bindParam(":n", $nome);
    $cadastro->bindParam(":v", $valor);
    $cadastro->bindParam(":g", $genero);
    $cadastro->bindParam(":e", $excecao);
    $cadastro->bindParam(":d", $data);
    $cadastro->execute();

    // Para chamar o index
    header("location: indexSA.php");

?>