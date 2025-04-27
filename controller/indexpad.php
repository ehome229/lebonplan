<?php
$offres = [];
for ($i = 1; $i <= 30; $i++) {
    $offres[] = [
        'titre' => "Poste n°$i",
        'description' => "Description du poste n°$i. Ceci est un exemple de description de l’offre."
    ];
}

$offresParPage = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $offresParPage;
$offresPage = array_slice($offres, $offset, $offresParPage);
$nombrePages = ceil(count($offres) / $offresParPage);
?>