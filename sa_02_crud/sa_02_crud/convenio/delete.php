<?php
require_once '../conexao.php';

if(isset($_GET['id_convenio']) && !empty($_GET['id_convenio'])){
    $id_convenio = addslashes($_GET['id_convenio']);
            
   $cmd = $conn->prepare("DELETE FROM convenios WHERE id_convenio = :id"); 
   $cmd->bindParam(":id", $id_convenio);
   $cmd->execute();
   
   header("location: index.php");
}

?>