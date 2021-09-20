<?php
require_once '../conexao.php';

try {
    $id_medico = $_GET['id_medico'];
    $select = $conn->query("SELECT * FROM medicos WHERE id_medico = '$id_medico';");
    $row = $select->fetch(PDO::FETCH_ASSOC);

    empty($_POST['nome']) ? $nome = $row['nome_medico'] : $nome = $_POST['nome'];  
    empty($_POST['rua']) ? $rua = $row['rua_medico'] : $rua = $_POST['rua'];
    empty($_POST['numero']) ? $numero = $row['numero_medico'] : $numero = $_POST['numero'];
    empty($_POST['complemento']) ? $complemento = $row['complemento_medico'] : $complemento = $_POST['complemento'];
    empty($_POST['bairro']) ? $bairro = $row['bairro_medico'] :  $bairro = $_POST['bairro'];
    empty($_POST['cep']) ? $cep = $row['cep_medico'] : $cep = $_POST['cep'];
    empty($_POST['email']) ? $email = $row['email_medico'] : $email = $_POST['email'];
    empty($_POST['telefoneFixo']) ? $telefoneFixo = $row['telefone_fixo_medico'] : $telefoneFixo = $_POST['telefoneFixo'];

    $update = $conn->prepare("UPDATE medicos SET nome_medico = :nome, rua_medico = :rua, numero_medico =:numero,
    complemento_medico = :complemento, bairro_medico = :bairro, cep_medico = :cep, email_medico = :email,
    telefone_fixo_medico = :telefoneFixo WHERE id_medico = :id;");

    $update->bindParam(':nome', $nome);
    $update->bindParam(':rua', $rua);
    $update->bindParam(':numero', $numero);
    $update->bindParam(':complemento', $complemento);
    $update->bindParam(':bairro', $bairro);
    $update->bindParam(':cep', $cep);
    $update->bindParam(':email', $email);
    $update->bindParam(':telefoneFixo', $telefoneFixo);
    $update->bindParam(':id', $id_medico);

    $update->execute();
    
    header("location: consultar.php");

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>