<?php
require "../nav/nav.php";
require_once "../../controller/cont_inscription.php"

?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="/vue/inscription/style.css">
    <link rel="stylesheet" href="/vue/nav/nav.css">
    <link rel="stylesheet" href="/vue/footer/footer.css">
</head>
<body>
<div class="container">
    <h2>Inscription</h2>
    <?php if ($errors): ?>
        <div class="error">
            <?php foreach ($errors as $error): echo "<p>$error</p>"; endforeach; ?>
        </div>
    <?php endif; ?>
    <form method="POST">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="email" name="email" placeholder="Adresse email" required>
        <input type="email" name="confirm_email" placeholder="Confirmer l'adresse email" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <input type="password" name="confirm_password" placeholder="Confirmer le mot de passe" required>
        <input type="submit" value="S'inscrire">
    </form>
</div>

<?php require "../footer/footer.php"; ?>
</body>
</html>
