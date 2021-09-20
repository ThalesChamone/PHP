<?php
    require_once '../conexao.php';

    if(isset($_GET['id_funcionamento'])){
        $id_funcionamento = addslashes($_GET['id_funcionamento']);
        $abertura = $_POST['abertura_clinica'];
        $fechamento = $_POST['fechamento_clinica'];
        $consultas = $_POST['media_consultas'];
        $dias = $_POST['dias_funcionamento'];
    }

    $cmd = $conn->prepare("UPDATE funcionamento SET abertura_clinica = :a, fechamento_clinica = :b, media_consultas = :c, dias_funcionamento = :d WHERE id_funcionamento = :id");

    $cmd->bindParam(":a", $abertura);
    $cmd->bindParam(":b", $fechamento);
    $cmd->bindParam(":c", $consultas);
    $cmd->bindParam(":d", $dias);
    $cmd->bindParam(":id", $id_funcionamento);
    $cmd->execute();

    header("location: home.php");
    
?>