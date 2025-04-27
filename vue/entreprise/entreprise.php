<?php
require "../nav/nav.php";
require_once "../../controller/contentreprise.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des entreprises</title>
    <link rel="stylesheet" href="/vue/nav/nav.css">
    <link rel="stylesheet" href="/vue/entreprise/entreprise.css">
    <link rel="stylesheet" href="/vue/footer/footer.css">
</head>
<body>
    <h1>Liste des entreprises</h1>
    <div class="container">
        <?php foreach ($entreprises as $entreprise): ?>
            <div class="card">
                <img src="/vue/entreprise/uploads/<?= htmlspecialchars($entreprise['photo']) ?>" alt="Photo de <?= htmlspecialchars($entreprise['nom']) ?>">
                <h2><?= htmlspecialchars($entreprise['nom']) ?></h2>
                <p><strong>Email :</strong> <?= htmlspecialchars($entreprise['email']) ?></p>
                <p><strong>Téléphone :</strong> <?= htmlspecialchars($entreprise['telephone']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?= $page - 1 ?>">&laquo; Précédent</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $pagesTotales; $i++): ?>
            <a href="?page=<?= $i ?>" class="<?= ($i === $page) ? 'active' : '' ?>"><?= $i ?></a>
        <?php endfor; ?>

        <?php if ($page < $pagesTotales): ?>
            <a href="?page=<?= $page + 1 ?>">Suivant &raquo;</a>
        <?php endif; ?>
    </div>
    <?php require "../footer/footer.php" ?>
</body>
</html>
