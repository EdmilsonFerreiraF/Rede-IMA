<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=redeim46_company', 'root','');
} catch (PDOException $e) {
    exit('Erro de banco de dados');
}