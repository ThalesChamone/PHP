<?php
require_once 'conexao.php';

try {
    if(isset($_GET['id_consulta'])){
        $id_consulta = addslashes($_GET['id_consulta']);
        $nome = htmlspecialchars($_POST['nome']);
        $valor = addslashes($_POST['valor']);
        $codigo = addslashes($_POST['codigo']);
        $data_procedimento = addslashes($_POST['data_procedimento']);
        $genero = addslashes($_POST['genero']);
        $excecao = addslashes($_POST['excecao']);

    }

    $update = $bancoSA->prepare("UPDATE dados SET codigo = :codigo, valor = :valor, nome =:nome,
    data_procedimento = :data_procedimento, genero = :genero, excecao = :excecao WHERE id_consulta = :id;");

    $update->bindParam(':codigo', $codigo);
    $update->bindParam(':valor', $valor);
    $update->bindParam(':nome', $nome);
    $update->bindParam(':data_procedimento', $data_procedimento);
    $update->bindParam(':genero', $genero);
    $update->bindParam(':excecao', $excecao);
    $update->bindParam(':id', $id_consulta);

    $update->execute();
    
    header("location: ver_cadastro.php");

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>