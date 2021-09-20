<?php
require_once '../conexao.php';
if(isset($_GET['id_paciente'])){
    $id_paciente = addslashes($_GET['id_paciente']);
    $nome_paciente = $_POST['nome_paciente'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento =  $_POST['complemento'];
    $bairro =  $_POST['bairro'];
    $cep =  $_POST['cep'];
    $email =  $_POST['email'];
    $telefone =  $_POST['telefone'];
    empty($_POST['nome_paciente']) ? $nome_paciente = $row['nome_paciente'] : $nome_paciente = $_POST['nome_paciente'];  
    
}


    $cmd = $conn->prepare("UPDATE tbl_paciente SET nome_paciente = :n, rua = :r, numero = :nu, complemento = :c, bairro =:b, cep = :ce, email = :e, telefone = :t WHERE id_paciente = :id");
    $cmd->bindParam(":n", $nome_paciente);
    $cmd->bindParam(":r", $rua);
    $cmd->bindParam(":nu", $numero);
    $cmd->bindParam(":c", $complemento);
    $cmd->bindParam(":b", $bairro);
    $cmd->bindParam(":ce", $cep);
    $cmd->bindParam(":e", $email);
    $cmd->bindParam(":t", $telefone);
    $cmd->bindParam(":id", $id_paciente);
    
    $cmd->execute();
    
    //Para chamar o index
    header("location: view.php");


?>