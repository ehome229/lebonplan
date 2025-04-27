<?php
require_once(__DIR__ . '/../model/bbd.php');


$entreprisesParPage = 3;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$debut = ($page - 1) * $entreprisesParPage;

// Récupération des entreprises
$stmt = $pdo->prepare("SELECT * FROM entreprises LIMIT :debut, :limite");
$stmt->bindValue(':debut', $debut, PDO::PARAM_INT);
$stmt->bindValue(':limite', $entreprisesParPage, PDO::PARAM_INT);
$stmt->execute();
$entreprises = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Récupération du nombre total d'entreprises
$total = $pdo->query("SELECT COUNT(*) FROM entreprises")->fetchColumn();
$pagesTotales = ceil($total / $entreprisesParPage);
?>