<?php

try {
    require_once '../conexao.php';

    if(isset($_GET['id_cadastro']) && !empty($_GET['id_cadastro']));

    $id_pessoa = addslashes($_GET['id_cadastro']);

    $cmd = $conn->prepare("DELETE FROM tbl_especialidade WHERE id_cadastro = :id");
    $cmd ->bindParam(":id", $id_pessoa);
    $cmd -> execute();

    header("location: view.php");

} catch (PDOException $e) {
    echo"Erro no banco" .$e->getmessage();
}

?>
    