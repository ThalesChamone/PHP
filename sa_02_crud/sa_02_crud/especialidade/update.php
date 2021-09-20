<?php

try {
    require_once '../conexao.php';

    if(isset ($_GET['id_cadastro'])){
        $id_cadastro = addslashes($_GET['id_cadastro']);
        $nome_espec = addslashes($_POST['nome']);
    }

    $cmd = $conn->prepare("UPDATE tbl_especialidade SET nome_especialidade = :n_e WHERE id_cadastro = :id_cadastro");

    $cmd->bindParam(":n_e", $nome_espec);
    $cmd->bindParam(":id_cadastro", $id_cadastro);
    $cmd->execute();

    header("location: view.php");
} catch (PDOException $e) {
    echo"Erro no banco" .$e->getmessage();
}
    
?>