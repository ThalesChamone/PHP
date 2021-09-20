<?php
try {
    $conn = new PDO("mysql:hostname=localhost;dbname=sa_02_crud_db","root","1234567");
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>