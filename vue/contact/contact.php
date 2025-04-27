<?php
require "../nav/nav.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: /accueil");
    exit();
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <link rel="stylesheet" href="/vue/contact/contact.css">
  <link rel="stylesheet" href="/vue/nav/nav.css">
 <link rel="stylesheet" href="/vue/footer/footer.css">
</head>
<body>

  <h1>Nous contacter</h1>

  <form action="#" method="post" class="contact-form">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message :</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit">Envoyer</button>
  </form>

  <?php require "../footer/footer.php";?>

</body>
</html>
