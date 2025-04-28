<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mentions Légales</title>
        <link href="index.css" rel="stylesheet" type="text/css" />
        <style>
            body {
                margin: 0;
                padding: 0;
                background: linear-gradient(135deg, #1a1f2c 0%, #0d1117 100%);
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
                max-width: 1200px;
                margin-left: auto;
                margin-right: auto;
            }

            /* Style pour les sections de mentions légales */
            .legal-section {
                background: rgba(26, 31, 44, 0.6);
                border-radius: 15px;
                padding: 2rem;
                margin: 2rem 0;
                border: 1px solid rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
            }

            .legal-section h2 {
                color: #4a90e2;
                margin-top: 0;
            }

            .legal-section p {
                line-height: 1.6;
                margin-bottom: 1rem;
            }

            .legal-section ul {
                padding-left: 1.5rem;
                margin-bottom: 1rem;
            }

            .legal-section li {
                margin-bottom: 0.5rem;
            }

            .contact-info {
                display: flex;
                align-items: center;
                gap: 0.5rem;
                margin-top: 1rem;
            }

            .contact-info svg {
                width: 20px;
                height: 20px;
                fill: currentColor;
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <a href="index.php" class="nav-link">Accueil</a>
                <a href="projets.php" class="nav-link">Projets BTS</a>
                <a href="entreprise.php" class="nav-link">Entreprise</a>
                <a href="veille.php" class="nav-link">Veille Technologique</a>
                <a href="a_propos_de_moi.php" class="nav-link">À propos de moi</a>
            </div>
        </nav>
        
        <div class="content">
            <div class="legal-section">
                <h2>Mentions Légales</h2>
                <p>Ce site est édité par Adrien D., étudiant en BTS SIO (Services Informatiques aux Organisations) à l'école HECTEN.</p>
                
                <h2>Hébergement</h2>
                <p>Ce site est hébergé par WAMP (Windows, Apache, MySQL, PHP), un environnement de développement web local.</p>
                
                <h2>Propriété Intellectuelle</h2>
                <p>L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les documents téléchargeables et les représentations iconographiques et photographiques.</p>
                
                <h2>Protection des Données Personnelles</h2>
                <p>Conformément à la loi "Informatique et Libertés" du 6 janvier 1978 modifiée, vous disposez d'un droit d'accès, de modification et de suppression des données vous concernant. Pour exercer ce droit, veuillez me contacter via les informations ci-dessous.</p>
                
                <h2>Cookies</h2>
                <p>Ce site n'utilise pas de cookies. Aucune donnée n'est collectée lors de votre visite.</p>
                
                <h2>Contact</h2>
                <p>Pour toute question concernant ce site ou pour exercer vos droits concernant vos données personnelles, vous pouvez me contacter :</p>
                <div class="contact-info">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                    <span>Email : adrien.demange@hecten.fr</span>
                </div>
            </div>
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