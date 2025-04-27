<?php
require_once(__DIR__ . '/bbd.php');



$limit = 3;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $limit;

$stmt = $pdo->prepare("SELECT * FROM entreprises LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$entreprises = $stmt->fetchAll();

$totalStmt = $pdo->query("SELECT COUNT(*) FROM entreprises");
$total = $totalStmt->fetchColumn();
$totalPages = ceil($total / $limit);
?>
