<?php
require_once '../conexao.php';

if(isset($_GET['id_funcionamento']) && !empty($_GET['id_funcionamento'])){
    $id_funcionamento = addslashes($_GET['id_funcionamento']);
            
   $cmd = $conn->prepare("DELETE FROM funcionamento WHERE id_funcionamento = :id"); 
   $cmd->bindParam(":id", $id_funcionamento);
   $cmd->execute();
   
   header("location: home.php");
}

?>