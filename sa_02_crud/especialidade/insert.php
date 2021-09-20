<?php

try {
    require_once '../conexao.php';

    $especialidade = $_POST['especialidade'];

    $insere = $conn->prepare("INSERT INTO tbl_especialidade (nome_especialidade) VALUES (:nomeEspec)");

    $insere->bindParam(":nomeEspec", $especialidade);

    $insere->execute();

    header("location: view.php");
} catch (PDOException $e) {
    echo"Erro no banco" .$e->getmessage();
}


?>