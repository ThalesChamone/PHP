<?php
    try {
        $bancoSA = new PDO("mysql:host=localhost;dbname=cadastro","root","1234567");   
    } catch (PDOException $e) {
        echo "Erro no banco: " . $e->getMessage();
    }
?>