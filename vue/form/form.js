document.addEventListener("DOMContentLoaded", function() {

    const form = document.querySelector(".form");
    const submitBtn = document.querySelector("#post");
    const cvInput = document.querySelector("#cv");
    const lettreMotivationInput = document.querySelector("#lettre_motivation");
    const emailInput = document.querySelector("#email");
    const nomInput = document.querySelector("#nom");
    const prenomInput = document.querySelector("#prenom");
    const naissanceInput = document.querySelector("#naissance");
    const majeurRadios = document.querySelectorAll("input[name='majeur']");

    // Fonction pour valider l'email
    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailPattern.test(email);
    }

    // Fonction pour valider les fichiers (max 2 Mo et PDF/JPG)
    function validateFile(fileInput) {
        const file = fileInput.files[0];
        if (file) {
            const fileSize = file.size / 1024 / 1024; // Convertir en Mo
            const fileExtension = file.name.split('.').pop().toLowerCase();
            if (fileSize > 2) {
                alert("Le fichier ne doit pas dépasser 2 Mo.");
                return false;
            }
            if (fileExtension !== "pdf" && fileExtension !== "jpg" && fileExtension !== "jpeg") {
                alert("Le fichier doit être en PDF ou JPG.");
                return false;
            }
        }
        return true;
    }

    // Fonction pour vérifier si la personne est majeure
    function isMajeur() {
        const naissance = new Date(naissanceInput.value.split("/").reverse().join("-"));
        const today = new Date();
        const age = today.getFullYear() - naissance.getFullYear();
        return age >= 18;
    }

    // Validation du formulaire avant soumission
    form.addEventListener("submit", function(event) {
        let valid = true;

        // Validation du nom
        if (nomInput.value.trim() === "") {
            alert("Le nom est obligatoire.");
            valid = false;
        }

        // Validation du prénom
        if (prenomInput.value.trim() === "") {
            alert("Le prénom est obligatoire.");
            valid = false;
        }

        // Validation de l'email
        if (!validateEmail(emailInput.value)) {
            alert("Veuillez entrer un email valide.");
            valid = false;
        }

        // Validation du CV
        if (!validateFile(cvInput)) {
            valid = false;
        }

        // Validation de la lettre de motivation
        if (!validateFile(lettreMotivationInput)) {
            valid = false;
        }

        // Vérifier si la personne est majeure
        if (!isMajeur()) {
            alert("Vous devez être majeur pour postuler.");
            valid = false;
        }

        // Si une validation échoue, empêcher l'envoi du formulaire
        if (!valid) {
            event.preventDefault();
        }
    });

});
