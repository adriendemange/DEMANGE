<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>À propos de moi</title>
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

            /* Styles spécifiques pour la page À propos */
            .about-section {
                background: rgba(26, 31, 44, 0.6);
                border-radius: 15px;
                padding: 2rem;
                margin: 2rem 0;
                border: 1px solid rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
            }

            .social-links {
                display: flex;
                gap: 1rem;
                margin-top: 1rem;
            }

            .social-links a {
                color: #4a90e2;
                text-decoration: none;
                padding: 0.5rem 1rem;
                border-radius: 4px;
                background: rgba(74, 144, 226, 0.1);
                transition: all 0.3s ease;
            }

            .social-links a:hover {
                background: rgba(74, 144, 226, 0.2);
                transform: translateY(-2px);
            }

            .tryhackme-badge {
                margin-top: 2rem;
                padding: 1rem;
                background: rgba(26, 31, 44, 0.4);
                border-radius: 10px;
                display: inline-block;
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
                <a href="a_propos_de_moi.php" class="nav-link active">À propos de moi</a>
            </div>
        </nav>
        
        <div class="content">
            <a href="https://hecten.fr/">
                <img src="Img/hecten_image.png" width="180" alt="HECTEN" class="hecten-logo">
            </a>
            <div class="about-section">
                <h2>Mes Passions</h2>
                <p>Je suis passionné par l'informatique et plus particulièrement par la cybersécurité. J'aime découvrir de nouvelles technologies et apprendre de nouvelles choses.</p>
                <div class="social-links">
                    <a href="https://github.com/adriendemange" target="_blank">GitHub</a>
                    <a href="https://www.linkedin.com/in/adrien-demange-b0b3b1251/" target="_blank">LinkedIn</a>
                </div>
                <div class="tryhackme-badge">
                    <script src="https://tryhackme.com/badge/3704986"></script>
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
