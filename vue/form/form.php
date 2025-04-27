<?php  
require "../nav/nav.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: /accueil");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/vue/nav/nav.css">
    <link rel="stylesheet" href="/vue/form/form.css">
    <link rel="stylesheet" href="/vue/footer/footer.css">
    <title>Document</title>
</head>
<body>
    <section class="container">
        <h2>Postuler à une offre de stage</h2>
       <h6>Vous pouvez ici répondre directement à l'offre de stage qui a été déposé par l'entreprise. Soyez le plus précis possible dans vos réponses !</h6>
       <h2>Stage - Administrateur système réseau</h2>
       <h6>IBM | Porritect - 44 | Publié le 20/10/2024 | Ref : 124XY244</h6>
       <h2>Résumé de l'offre</h2>
     <div class="resume"> 
        <div class="dbm">3 mois</div>
       <div class="dbm"> Bac +2 Bac +3</div>
       <div class="dbm">Systèmes, Réseaux, Cloud</div>
       <div class="dbm">Exp - 1an</div>
    </div> 
       <h2>Envoyez votre candidature dès maintenant !</h2>
       <form action="/accueil" method="get" class="form">
<div class="input-box">
    <label for="">Civilité</label> </br>
    <select name="" id="civilite">
        <option value="">Madame</option>
        <option value="">Monsieur</option>
        <option value="">Ne veut pas mentionner</option>
    </select>
</div>

        <div class="input-box">
            <label>Nom</label>
            <input type="text" placeholder="Entrer votre nom" required>
        </div>

        <div class="input-box">
            <label>Prenom</label>
            <input type="text" placeholder="Entrer votre prenom" required>
        </div>

        <div class="input-box">
            <label>Couriel</label>
            <input type="text" placeholder="Entrer votre adresse mail" required>
        </div>

        <div class="column">
            <div class="input-box">
                <label>Numéro de Téléphone</label>
                <input type="text" placeholder="Entrer votre numéro de téléphone" required>
            </div>

            <div class="input-box">
                <label>Date de naissance</label>
                <input type="text" placeholder="jj/mm/aaaa" required>
            </div>
        </div>
<div style="padding-top: 15px;" ><label  style="color: orangered;">A propos de vous</label>
        <div class="about">
            <input type="checkbox" name=" " id="">
            <label>Permis B</label>
        </div>
        <div class="about">
            <input type="checkbox" name=" " id="">
            <label>Véhiculé </label>
        </div>
        <div class="about">
            <input type="checkbox" name=" " id="">
            <label>Certification (cisco, ...)</label>
        </div>
    </div>

    <div class="majeur" ><label  style="color: orangered;">Je suis majeur</label>
        <div class="about">
            <input type="radio" value="radio" name="radio" id="">
            <label>Oui</label>
        </div>
        <div class="about">
            <input type="radio" value="radio" name="radio" id="">
            <label>Non </label>
        </div>
    </div>

    <div class="input-box">
        <label>Message au recruteur</label>
       <textarea name="" id="textarea" cols="30" rows="10"></textarea>
    </div>

    <div class="cvlm" >
        <div class="post">
        
            <input type="submit" value="ENVOYER CV" id="post">
        </div>

        <div class="ren">
           
         <input type="submit" value="ENVOYER LETTRE DE MOTIVATION">
        </div>
    </div>

    <div class="forma">
        <h5>Poids Max 2Mo</h5>
        <h5>Forma pdf xml mp4 mp3 mp5 mp6</h5>
      </div>



    <div class="button" >
        <div class="post">
            <input type="submit" value="POSTULER" id="post">
        </div>

        <div class="ren">
         <input type="reset" value="RENITIALISER">
        </div>
    </div>


    <div class="fin">
        <h6>En cliquant sur POSTULER, vous acceptez les CGU et déclarez avoir pris connaissance de la politique de confidentialité de notre site.</h6>
    </div>

       </form>
    </section>
    <?php  require "../footer/footer.php" ?>

    <script src="/vue/form/form.js"></script>
</body>
</html>