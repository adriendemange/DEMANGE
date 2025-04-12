<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page entreprise de Adrien</title>
        <link href="index.css" rel="stylesheet" type="text/css" />
        <style>
            body {
                margin: 0;
                padding: 0;
                background: linear-gradient(135deg, #1f1f1f 0%, #111111 100%);
                color: white;
                font-family: Arial, sans-serif;
                min-height: 100vh;
            }

            /* Style de la navbar */
            .navbar {
                position: fixed;
                width: 100%;
                top: 0;
                transition: transform 0.3s ease-in-out;
                background: rgba(17, 17, 17, 0.95);
                z-index: 1000;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .navbar.hidden {
                transform: translateY(-100%);
            }

            .container {
                padding: 1rem 2rem;
                display: flex;
                justify-content: center;
                gap: 2rem;
            }

            .nav-link {
                color: #e0e0e0;
                text-decoration: none;
                font-size: 1rem;
                padding: 0.5rem 1rem;
                transition: all 0.3s ease;
                border-radius: 4px;
            }

            .nav-link:hover {
                color: #4a90e2;
                background: rgba(74, 144, 226, 0.1);
            }

            .nav-link.active {
                color: #4a90e2;
                background: rgba(74, 144, 226, 0.15);
            }

            /* Ajustement pour le contenu */
            .content {
                margin-top: 80px;
                padding: 2rem;
            }

            /* Style pour les éléments de la page */
            h2, p {
                color: #e0e0e0;
            }

            .hecten-logo {
                margin: 1rem;
                transition: transform 0.3s ease;
            }

            .hecten-logo:hover {
                transform: scale(1.05);
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <a href="index.php" class="nav-link">Accueil</a>
                <a href="projets.php" class="nav-link">Projets BTS</a>
                <a href="entreprise.php" class="nav-link active">Entreprise</a>
                <a href="veille.php" class="nav-link">Veille Technologique</a>
                <a href="a_propos_de_moi.php" class="nav-link">À propos de moi</a>
            </div>
        </nav>
        
        <div class="content">
            <a href="https://hecten.fr/">
                <img src="Img/hecten_image.png" width="180" alt="HECTEN" class="hecten-logo" style="border-radius: 5px;">
            </a>
            <h2 class="fade-in-text">Les attendus en alternance :</h2>
            <ul class="fade-in-text">
                <li>Travail en équipe</li>
                <li>Autonomie</li>
                <li>Capacité d'adaptation</li>
                <li>Sens de l'organisation</li>
                <li>Rigueur</li>
            </ul>
            <p class="fade-in-text" style="color: yellow;">Ces qualités et bien d'autres sont dévéloppées au fur et à mesure de l'année scolaire afin de nous perfectionner.</p>
            <p class="fade-in-text" style="color: yellow;">Je suis actuellement chez <b>ACI Technology</b> pour une durée de 24 mois (2024 à 2026)</p>
            <p class="fade-in-text" style="color: yellow;">Je suis Technicien Systèmes & Réseaux.  </p>
            <a href="https://acitechnology.eu/" class="aci-link"> <img src="Img/aci_image.png" width="90" alt="ACI Technology" style="position: relative; left:0px; top: -540px;" class="hecten-logo"></a>
            <img src="Img/aci_image_1.png" width="400" alt="ACI Technology" style="position: relative; left: 1000px; top: -300px; border-radius: 25px;" class="hecten-logo">
        </div>
        
        <script>
            // Script pour cacher/montrer la navbar au scroll
            let lastScroll = 0;
            const navbar = document.querySelector('.navbar');

            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll > lastScroll && currentScroll > 100) {
                    // Scroll vers le bas - cache la navbar
                    navbar.classList.add('hidden');
                } else {
                    // Scroll vers le haut - montre la navbar
                    navbar.classList.remove('hidden');
                }
                
                lastScroll = currentScroll;
            });
        </script>
    </body>
</html>
