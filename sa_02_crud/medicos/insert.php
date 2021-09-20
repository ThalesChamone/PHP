<?php
require_once '../conexao.php';

try {
    if(isset($_POST['nome'],$_POST['rua'],$_POST['numero'],$_POST['complemento'],
    $_POST['bairro'],$_POST['cep'],$_POST['email'],$_POST['telefoneFixo'])){

    $nome = addslashes($_POST['nome']);
    $rua = addslashes($_POST['rua']);
    $numero = addslashes($_POST['numero']);
    $complemento = addslashes($_POST['complemento']);
    $bairro = addslashes($_POST['bairro']);
    $cep = addslashes($_POST['cep']);
    $email = addslashes($_POST['email']);
    $telefoneFixo = addslashes($_POST['telefoneFixo']);

    $insert =  $conn->prepare("INSERT INTO medicos VALUES (DEFAULT, :nome, :rua, :numero, :complemento, :bairro, :cep,
    :email, :telefoneFixo);");

    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':rua', $rua);
    $insert->bindParam(':numero', $numero);
    $insert->bindParam(':complemento', $complemento);
    $insert->bindParam(':bairro', $bairro);
    $insert->bindParam(':cep', $cep);
    $insert->bindParam(':email', $email);
    $insert->bindParam(':telefoneFixo', $telefoneFixo);

    $insert->execute();

    }

    header('location: consultar.php');

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>