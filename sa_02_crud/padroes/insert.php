<?php
    require_once '../conexao.php';
    
        $abertura = $_POST['abertura_clinica'];
        $fechamento = $_POST['fechamento_clinica'];
        $consultas = $_POST['media_consultas'];
        $dias = $_POST['dias_funcionamento'];

        
        $conn->query("INSERT INTO funcionamento(abertura_clinica, fechamento_clinica, media_consultas, dias_funcionamento) VALUES ('$abertura', '$fechamento', '$consultas', '$dias');");

        header("location: home.php");
?>