<?php
    require_once '../conexao.php';
    try {

            $id_medico = $_GET['id_medico'];

            $delete = $conn->prepare("DELETE FROM medicos WHERE id_medico = :id;");
            $delete->bindParam(':id', $id_medico);
            $delete->execute();

            header("location: consultar.php");
        
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>