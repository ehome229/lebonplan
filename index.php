<?php
require "./vue/nav/nav.php";
require_once "./controller/indexpad.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Offres d'emploi</title>
    <link rel="stylesheet" href="./vue/pad/pad.css">
    <link rel="stylesheet" href="./vue/nav/nav.css">
    <link rel="stylesheet" href="./vue/footer/footer.css">
</head>
<body>
<body>
    <div class="header">
        <img src="./vue/pad/images/header.jpg" alt="Image d'en-tête">
        <div class="header-text">
            DES OFFRES D'EMPLOI SÉLECTIONNÉES POUR VOUS
        </div>
    </div>

    <div class="container">
        <h1 style="color : orangered;">Offres d'emploi</h1>
        <p class="intro">Trouvez le poste qui vous correspond parmi nos offres récentes.</p>

        <!-- Barre de recherche -->
        <div class="search-bar">
            <input type="text" placeholder="Rechercher un poste...">
            <button>Rechercher</button>
        </div>

        <?php foreach ($offresPage as $offre): ?>
            <div class="offre">
                <h2><?= htmlspecialchars($offre['titre']) ?></h2>
                <p><?= htmlspecialchars($offre['description']) ?></p>
                <button onclick="window.location.href='vue/inscription/login.php';" title="Cliquez ici pour postuler à ce poste">Postuler</button>

            </div>
        <?php endforeach; ?>

        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="?page=<?= $page - 1 ?>">Précédent</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $nombrePages; $i++): ?>
                <a href="?page=<?= $i ?>" class="<?= ($i === $page) ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php if ($page < $nombrePages): ?>
                <a href="?page=<?= $page + 1 ?>">Suivant</a>
            <?php endif; ?>
        </div>
    </div>
   <?php require "./vue/footer/footer.php"; ?>
</body>
</html>
