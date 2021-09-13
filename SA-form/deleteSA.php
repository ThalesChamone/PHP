<?php
    require_once 'conexao.php';

    if(isset($_GET['id_consulta']) && !empty($_GET['id_consulta'])){
        $id_consulta = addslashes($_GET['id_consulta']);
                
       $cadastro = $bancoSA->prepare("DELETE FROM dados WHERE id_consulta = :id"); 
       $cadastro->bindParam(":id", $id_consulta);
       $cadastro->execute();
       
       header("location: indexSA.php");
    }
?>