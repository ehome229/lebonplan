<?php
require "../nav/nav.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: /lebonplan/accueil");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ma Wishlist</title>
  <link rel="stylesheet" href="/vue/wishlist/wishlist.css">
  <link rel="stylesheet" href="/vue/nav/nav.css">
 <link rel="stylesheet" href="/vue/footer/footer.css">
</head>
<body>

  <h1>Entrez votre wishlist</h1>

  <form action="" method="post" class="wishlist-form">
    <label for="souhait">Ajouter un souhait :</label>
    <input type="text" id="souhait" name="souhait" placeholder="Ex. Stage chez Google" required>

    <button type="submit">Ajouter à la liste</button>
  </form>

  <?php require "../footer/footer.php";?>
</body>
</html>
