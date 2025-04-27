<?php
$host = 'localhost';
$db = 'nestor_lebonplan';
$user = 'nestor'; // modifiez selon vos identifiants
$pass = 'Kenoude@229mot';     // modifiez selon vos identifiants
$dsn = "mysql:host=mysql-nestor.alwaysdata.net;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>