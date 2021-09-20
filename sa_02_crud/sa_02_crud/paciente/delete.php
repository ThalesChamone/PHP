<?php
    require_once '../conexao.php';

    if(isset($_GET['id_paciente']) && !empty ($_GET['id_paciente'])){
        $id_paciente = addslashes($_GET['id_paciente']);

        $cmd = $conn->prepare("DELETE FROM tbl_paciente WHERE id_paciente = :id");
        $cmd->bindParam(":id", $id_paciente);
        $cmd->execute();

        header("location: view.php");
    }


?>