<?php
require_once '../conexao.php';
if(isset($_POST['nome_paciente'], $_POST['rua'], $_POST['numero'], $_POST['complemento'], $_POST['bairro'], $_POST['cep'], $_POST['email'], $_POST['telefone'])){
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

$cmd = $conn->prepare("INSERT INTO tbl_paciente (nome_paciente, rua, numero, complemento, bairro, cep, email, telefone) VALUES(:n, :r, :nu, :c, :b, :ce, :e, :t)");
$cmd->bindParam(":n", $nome_paciente);
$cmd->bindParam(":r", $rua);
$cmd->bindParam(":nu", $numero);
$cmd->bindParam(":c", $complemento);
$cmd->bindParam(":b", $bairro);
$cmd->bindParam(":ce", $cep);
$cmd->bindParam(":e", $email);
$cmd->bindParam(":t", $telefone);

$cmd->execute();

//Para chamar o index
header("location: view.php");

?>