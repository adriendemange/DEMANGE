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
                <h2>Mes réseaux </h2>
                <p>Je suis passionné par l'informatique et plus particulièrement par la cybersécurité. J'aime découvrir de nouvelles technologies et apprendre de nouvelles choses.</p>
                <div class="social-links">
                    <a href="https://github.com/adriendemange" target="_blank">
                        <svg height="24" width="24" viewBox="0 0 16 16" fill="currentColor" style="vertical-align: middle; margin-right: 5px;">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                        </svg>
                        GitHub
                    </a>
                    <a href="https://www.linkedin.com/in/adrien-demange-b0b3b1251/" target="_blank">
                        <svg height="24" width="24" viewBox="0 0 24 24" fill="currentColor" style="vertical-align: middle; margin-right: 5px;">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        LinkedIn
                    </a>
                </div>
                <p>Voici mon badge TryHackMe qui affiche mon niveau et mes accomplissements sur la plateforme :</p>
                <div class="tryhackme-badge">
                    <script src="https://tryhackme.com/badge/3704986"></script>
                </div>
            </div>
        </div>
        
        <footer style="text-align: center; padding: 2rem; margin-top: 2rem; border-top: 1px solid rgba(255, 255, 255, 0.1);">
            <a href="mentions_legales.php" style="color: #4a90e2; text-decoration: none; font-size: 0.9rem;">Mentions Légales</a>
        </footer>
        
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
