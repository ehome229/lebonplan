<?php
require_once "../../controller/cont_login.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="/vue/inscription/style.css">
</head>
<body>
<div class="container">
    <h2>Connexion</h2>
    <?php if ($error): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>
    <form method="POST">
        <input type="email" name="email" placeholder="Adresse email" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <input type="submit" value="Se connecter">
    </form>

    <div class="signup-link">
        <p>Vous n'avez pas de compte ?</p>
        <a href="/lebonplan/inscription" class="signup-btn">S’inscrire</a>
    </div>
</div>
</body>
</html>
