<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>A propos de moi</title>
        <link href="index.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <a href="index.php">Accueil</a>
            <a href="projets.php">Projets BTS</a>
            <a href="entreprise.php">Entreprise</a>
            <a href="veille.php">Veille Technologique</a>
            <a href="a_propos_de_moi.php">À propos de moi</a>
        </div> 
        <a href="https://hecten.fr/">
            <img src="Img/hecten_image.png" width="180" alt="HECTEN" class="hecten-logo">
        </a>
        <h2 class="fade-in-text">Bienvenue sur ma page ! Découvrez mes profils professionnels et mes projets.</h2>
        <div class="email-container">
            <p class="email" id="email">adrien.demange@hecten.fr</p>
            <button class="copy-btn" onclick="copyEmail()">Copier l'email</button>
            <p class="success-message" id="successMessage">Adresse e-mail copiée dans le presse-papier !</p>
        </div>
        <script>
            function copyEmail() {
                const emailText = document.getElementById("email").textContent;
                navigator.clipboard.writeText(emailText)
                    .then(() => {
                        const successMessage = document.getElementById("successMessage");
                        successMessage.style.display = "block";
                        setTimeout(() => {
                            successMessage.style.display = "none";
                        }, 2000); // Cache le message après 2 secondes
                    })
                    .catch((err) => {
                        console.error("Erreur lors de la copie : ", err);
                    });
            }
        </script>
        <div class="social-links">
            <div class="social-link">
                <a href="https://github.com/adriendemange/DEMANGE" target="_blank" title="GitHub" class="social-link-item">
                    <img src="Img/github.png" alt="GitHub">
                    <span>GitHub</span>
                </a>
            </div>
            <div class="social-link">
                <a href="https://www.linkedin.com/in/adrien-demange-13aa3026a/" target="_blank" title="LinkedIn" class="social-link-item">
                    <img src="Img/linkedin.png" alt="LinkedIn">
                    <span>LinkedIn</span>
                </a>
            </div>
        </div>
         <!-- Badge TryHackMe avec explication -->
         <div class="tryhackme-section">
            <h2 class="fade-in-text" style="color: yellow;">Mon Badge TryHackMe</h2>
            <div class="tryhackme-info">
                <p class="tryhackme-description">TryHackMe est une plateforme d'apprentissage en cybersécurité qui propose des exercices pratiques 
                et des challenges en environnement réel. Ce badge représente mon niveau et mes accomplissements 
                sur la plateforme, démontrant mes compétences en sécurité informatique à travers différents 
                modules comme le pentesting, l'analyse de malwares, et la sécurité des réseaux.</p>
            </div>
            <div class="tryhackme-badge">
                <script src="https://tryhackme.com/badge/3704986"></script>
            </div>
        </div>
    </body>
</html>
