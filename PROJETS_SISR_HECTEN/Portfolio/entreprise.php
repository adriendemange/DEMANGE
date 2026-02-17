<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page entreprise de Adrien</title>
        <link href="index.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            body {
                margin: 0;
                padding: 0;
                background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
                color: white;
                font-family: Arial, sans-serif;
                min-height: 100vh;
                font-size: 16px;
            }

            /* Augmentation de la taille du texte pour les éléments principaux */
            p, li, .card p, .description {
                font-size: 1.1rem;
                line-height: 1.6;
            }

            h2, .card h2, .section-title {
                font-size: 1.8rem;
            }

            h3, .title {
                font-size: 1.3rem;
            }

            .nav-link {
                font-size: 1.1rem;
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
                font-size: 1.1rem;
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
                width: 100%;
                box-sizing: border-box;
            }

            /* Style pour les éléments de la page */
            h2, p {
                color: #e0e0e0;
            }

            /* Style des sections */
            .section {
                background: rgba(25, 25, 25, 0.85);
                border-radius: 15px;
                padding: 2rem;
                margin: 2rem 2rem;
                border: 1px solid rgba(255, 255, 255, 0.1);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(10px);
            }

            .section-title {
                color: #4a90e2;
                text-align: center;
                font-size: 1.8rem;
                margin-bottom: 2rem;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            }

            /* Style des cartes */
            .card {
                background: rgba(74, 144, 226, 0.1);
                padding: 1.5rem;
                border-radius: 10px;
                border: 1px solid rgba(74, 144, 226, 0.2);
                transition: transform 0.3s ease;
                margin-bottom: 1.5rem;
            }

            .card:hover {
                transform: translateY(-5px);
                background: rgba(74, 144, 226, 0.15);
            }

            .title {
                color: #4a90e2;
                font-size: 1.3rem;
                margin-bottom: 1rem;
            }

            .description {
                color: #e0e0e0;
                font-size: 1.1rem;
                line-height: 1.5;
            }

            /* Style des listes */
            ul {
                list-style-type: none;
                padding: 0;
            }

            li {
                margin-bottom: 0.5rem;
                font-size: 1.1rem;
                line-height: 1.6;
            }

            /* Style des liens */
            a {
                color: #4a90e2;
                text-decoration: none;
                transition: color 0.3s ease;
                font-size: 1.1rem;
            }

            a:hover {
                color: #357abd;
            }

            /* Nouveaux styles pour la réorganisation */
            .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 2rem;
                padding: 1.5rem;
                background: rgba(25, 25, 25, 0.85);
                border-radius: 15px;
                border: 1px solid rgba(255, 255, 255, 0.1);
                margin-left: 2rem;
                margin-right: 2rem;
            }

            .logo-container {
                display: flex;
                gap: 2rem;
                align-items: center;
            }

            .logo {
                width: 120px;
                height: auto;
                transition: transform 0.3s ease;
            }

            .logo:hover {
                transform: scale(1.05);
            }

            .highlight-text {
                color: #ffcc00;
                font-weight: bold;
            }

            .project-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
                gap: 2rem;
                margin-top: 2rem;
            }

            .project-card {
                background: rgba(25, 25, 25, 0.85);
                border-radius: 15px;
                padding: 1.5rem;
                border: 1px solid rgba(255, 255, 255, 0.1);
                transition: transform 0.3s ease;
                margin-bottom: 1.5rem;
            }

            .project-card:hover {
                transform: translateY(-5px);
                background: rgba(25, 25, 25, 0.95);
            }

            .project-title {
                color: #4a90e2;
                font-size: 1.3rem;
                margin-bottom: 1rem;
            }

            .project-description {
                margin-bottom: 1rem;
            }

            .project-meta {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                margin-bottom: 1rem;
                font-size: 0.9rem;
                color: #aaa;
            }

            .project-meta-item {
                display: flex;
                align-items: center;
            }

            .project-meta-item i {
                margin-right: 0.5rem;
                color: #4a90e2;
            }

            .project-link {
                display: inline-block;
                margin-top: 1rem;
                padding: 0.5rem 1rem;
                background: rgba(74, 144, 226, 0.2);
                border-radius: 5px;
                transition: background 0.3s ease;
            }

            .project-link:hover {
                background: rgba(74, 144, 226, 0.3);
            }

            .fade-in-text {
                animation: fadeIn 1s ease-in forwards;
            }

            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
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
            <!-- En-tête avec logos -->
            <div class="header">
                <h2>Mon Parcours en Entreprise</h2>
                <div class="logo-container">
                    <a href="https://acitechnology.eu/" target="_blank">
                        <img src="Img/aci_image.png" alt="ACI Technology" class="logo">
                    </a>
                    <a href="https://hecten.fr/" target="_blank">
                        <img src="Img/hecten_image.png" alt="HECTEN" class="logo" style="border-radius: 5px;">
                    </a>
                </div>
            </div>
            
            <!-- Section des attendus -->
            <div class="section">
                <h2 class="section-title">Les attendus en alternance</h2>
                <ul style="line-height: 2.5; margin-bottom: 20px; padding-left: 20px;">
                    <li>Travail en équipe</li>
                    <li>Autonomie</li>
                    <li>Capacité d'adaptation</li>
                    <li>Sens de l'organisation</li>
                    <li>Rigueur</li>
                </ul>
                <p class="highlight-text">Ces qualités et bien d'autres sont développées au fur et à mesure de l'année scolaire afin de nous perfectionner.</p>
            </div>
            
            <!-- Section ACI Technology -->
            <div class="section">
                <h2 class="section-title">À propos d'ACI Technology</h2>
                <p>Je suis actuellement chez <b>ACI Technology</b> pour une durée de 24 mois (2024 à 2026)</p>
                <p>Je suis Technicien Systèmes & Réseaux.</p>
                <p>ACI Technology est une société d'infogérance spécialisée dans la gestion et la maintenance des systèmes d'information pour les entreprises. Notre mission est d'accompagner les organisations dans leur transformation numérique en leur offrant des solutions informatiques adaptées à leurs besoins.</p>
                <p>En tant que Technicien Systèmes & Réseaux, je participe activement à :</p>
                <ul style="line-height: 2; margin-bottom: 20px;">
                    <li>L'installation et la configuration de serveurs Windows et Linux</li>
                    <li>La mise en place et la maintenance de réseaux d'entreprise</li>
                    <li>La sécurisation des infrastructures informatiques</li>
                    <li>Le support technique pour les utilisateurs</li>
                    <li>La gestion des sauvegardes et de la continuité d'activité</li>
                </ul>
                <div style="text-align: center; margin-top: 2rem;">
                    <img src="Img/aci_image_1.png" width="400" alt="ACI Technology" style="border-radius: 25px; max-width: 100%;">
                </div>
            </div>
            
            <!-- Section Projets -->
            <div class="section">
                <h2 class="section-title">Projets en entreprise</h2>
                <p>Voici quelques-uns des projets sur lesquels j'ai travaillé chez ACI Technology :</p>
                <div class="project-grid">
                    <div class="project-card">
                        <h3 class="project-title">Migration Active Directory</h3>
                        <p class="project-description">Migration d'un domaine Active Directory vers une nouvelle infrastructure pour un client.</p>
                        <div class="project-meta">
                            <div class="project-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Adrien Demange</span>
                            </div>
                            <div class="project-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Mars 2024</span>
                            </div>
                            <div class="project-meta-item">
                                <i class="fas fa-building"></i>
                                <span>ACI Technology</span>
                            </div>
                        </div>
                        <a href="https://github.com/adriendemange/DEMANGE/tree/main/Projets_ACI/" target="_blank" class="project-link">Voir le projet</a>
                    </div>
                    <div class="project-card">
                        <h3 class="project-title">Mise en place d'un serveur de fichiers</h3>
                        <p class="project-description">Configuration d'un serveur de fichiers avec gestion des droits d'accès pour une PME.</p>
                        <div class="project-meta">
                            <div class="project-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Adrien Demange</span>
                            </div>
                            <div class="project-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Avril 2024</span>
                            </div>
                            <div class="project-meta-item">
                                <i class="fas fa-building"></i>
                                <span>ACI Technology</span>
                            </div>
                        </div>
                        <a href="#" target="_blank" class="project-link">Voir le projet</a>
                    </div>
                    <div class="project-card">
                        <h3 class="project-title">Sécurisation réseau</h3>
                        <p class="project-description">Audit de sécurité et mise en place de mesures de protection pour un réseau d'entreprise.</p>
                        <div class="project-meta">
                            <div class="project-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Adrien Demange</span>
                            </div>
                            <div class="project-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Mai 2024</span>
                            </div>
                            <div class="project-meta-item">
                                <i class="fas fa-building"></i>
                                <span>ACI Technology</span>
                            </div>
                        </div>
                        <a href="#" target="_blank" class="project-link">Voir le projet</a>
                    </div>
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
