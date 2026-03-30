<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PortFolio de Adrien</title>
        <link href="index.css" rel="stylesheet" type="text/css" />
        <style>
            body {
                margin: 0;
                padding: 0;
                background: #111111;
                color: white;
                font-family: Arial, sans-serif;
                font-size: 16px;
            }

            @keyframes fadeInSlide {
                0% {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animated-title {
                animation: fadeInSlide 1s ease-out forwards;
                opacity: 0;
            }

            .video-background {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                background: url('Img/background.png') no-repeat center center fixed;
                background-size: cover;
                opacity: 1.0;
            }
            
            .video-overlay {
                display: none;
            }

            /* Style de la navbar */
            .navbar {
                position: fixed;
                width: 100%;
                top: 0;
                transition: transform 0.3s ease-in-out;
                background: rgba(17, 17, 17, 0.85);
                z-index: 1000;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .navbar.hidden {
                transform: translateY(-100%);
            }

            .container {
                padding: 0.5rem 1rem;
                display: flex;
                justify-content: center;
                gap: 1.5rem;
            }

            .nav-link {
                color: #e0e0e0;
                text-decoration: none;
                font-size: 1.1rem;
                padding: 0.3rem 0.8rem;
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

            /* Styles pour les cartes */
            .grid-container {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
                padding: 2rem;
                margin-top: 2rem;
            }

            .card {
                background: rgba(25, 25, 25, 0.85);
                border-radius: 15px;
                padding: 2rem;
                color: white;
                border: 1px solid rgba(255, 255, 255, 0.1);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(10px);
            }

            .card h2 {
                color: #4a90e2;
                margin-bottom: 1.5rem;
                text-align: center;
                font-size: 1.8rem;
            }

            /* Style pour le titre principal */
            .hero {
                text-align: center;
                padding: 1rem 2rem;
                margin-top: 60px;
                background: rgba(0, 0, 0, 0);*
                opacity: 1.0;
                backdrop-filter: blur(10px);
            }

            .role {
                font-size: 2.8rem;
                color: #e0e0e0;
                margin-bottom: 1.5rem;
                font-weight: 600;
                letter-spacing: 1px;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            }

            .hero-tags {
                display: flex;
                justify-content: center;
                gap: 1rem;
                flex-wrap: wrap;
            }

            .tag {
                background: rgba(74, 144, 226, 0.15);
                color: #4a90e2;
                padding: 0.5rem 1rem;
                border-radius: 20px;
                font-size: 1.1rem;
                border: 1px solid rgba(74, 144, 226, 0.3);
                transition: all 0.3s ease;
            }

            .tag:hover {
                background: rgba(74, 144, 226, 0.25);
                transform: translateY(-2px);
            }

            /* Style pour les compétences */
            .skill-name {
                color: #e0e0e0;
                margin-bottom: 8px;
                font-size: 1.2rem;
                font-weight: bold;
            }

            .skill-progress {
                width: 100%;
                height: 20px;
                background-color: rgba(255, 255, 255, 0.05);
                border-radius: 10px;
                overflow: hidden;
                position: relative;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .progress-bar {
                height: 100%;
                background: linear-gradient(90deg, #2d5a8e, #4a90e2);
                transition: width 0.5s ease-in-out;
                border-radius: 10px;
                position: relative;
            }

            .progress-text {
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
                color: #e0e0e0;
                font-size: 0.9rem;
                z-index: 1;
                text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
            }

            /* Timeline style */
            .timeline-item {
                padding: 1rem;
                margin: 1rem 0;
                border-left: 3px solid #4a90e2;
                position: relative;
                background: rgba(74, 144, 226, 0.05);
                border-radius: 0 10px 10px 0;
            }

            .timeline-item::before {
                content: '';
                position: absolute;
                left: -8px;
                top: 50%;
                width: 15px;
                height: 15px;
                background: #4a90e2;
                border-radius: 50%;
                transform: translateY(-50%);
                box-shadow: 0 0 10px rgba(74, 144, 226, 0.5);
            }

            .timeline-item h3 {
                color: #4a90e2;
                margin-bottom: 0.5rem;
                font-size: 1.3rem;
            }

            .timeline-item p {
                color: #e0e0e0;
                margin: 0.5rem 0;
                font-size: 1.1rem;
                line-height: 1.6;
            }

            /* Augmentation de la taille du texte pour les éléments principaux */
            p, li, .card p, .timeline-item p {
                font-size: 1.1rem;
                line-height: 1.6;
            }

            h2, .card h2 {
                font-size: 1.8rem;
            }

            h3, .timeline-item h3 {
                font-size: 1.3rem;
            }

            .progress-text {
                font-size: 0.9rem;
            }
        </style>
    </head>
    <body>
        <div class="video-background">
            <div class="gif-background"></div>
            <div class="video-overlay"></div>
        </div>
        <nav class="navbar">
            <div class="container">
                <a href="index.php" class="nav-link active">Accueil</a>
                <a href="projets.php" class="nav-link">Projets BTS</a>
                <a href="entreprise.php" class="nav-link">Entreprise</a>
                <a href="veille.php" class="nav-link">Veille Technologique</a>
                <a href="a_propos_de_moi.php" class="nav-link">À propos de moi</a>
            </div>
        </nav>

        <header class="hero">
            <div class="hero-content">
                <div class="typing-container">
                    <p class="role">Expert en Cybersécurité en devenir</p>
                    <p class="role animated-title">PortFolio de Adrien D.</p>
                    <div class="hero-tags">
                        <span class="tag">Sécurité</span>
                        <span class="tag">Réseaux</span>
                        <span class="tag">SISR</span>
                        <span class="tag">Linux</span>
         
        </header>

        <main class="grid-container">
            <!-- Carte Parcours Scolaire -->
            <div class="card education-card">
                <h2>Parcours Scolaire</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <h3>BTS SIO SISR - HECTEN</h3>
                        <p>Septembre 2024 - Présent</p>
                        <p>Formation en alternance spécialisée en solutions d'infrastructure, systèmes et réseaux</p>
                    </div>
                    <div class="timeline-item">
                        <h3>ACI Technology</h3>
                        <p>Alternant depuis septembre 2024</p>
                        <p>Expérience professionnelle en entreprise</p>
                    </div>
                    <div class="timeline-item">
                        <h3>CY Tech</h3>
                        <p>2022 - 2024</p>
                        <p>Mathématiques Physique Informatique</p>
                    </div>
                    <div class="timeline-item">
                        <h3>Lycée Jean-Perrin</h3>
                        <p>2020 - 2022</p>
                        <p>Bac S. Mathématiques Physique</p>
                    </div>
                </div>
            </div>

            <!-- Nouvelle carte Compétences Techniques -->
            <div class="card">
                <h2>Compétences Techniques</h2>
                <div class="skills-container">
                    <div class="skill-item">
                        <div class="skill-name">Réseau (Cisco Packet Tracer, VLAN, DHCP, DNS, etc.)</div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 40%">
                                <span class="progress-text">40%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">Windows (Active Directory, GPO, Failles, PowerShell)</div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 40%">
                                <span class="progress-text">40%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">Linux (Serveur Samba, Gestion de droits, SSH, etc.)</div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 50%">
                                <span class="progress-text">50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">Kali Linux - Test de Pénétration (Nmap, metasploit, Wireshark, etc.)</div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 40%">
                                <span class="progress-text">40%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nouvelle carte Compétences en Développement -->
            <div class="card">
                <h2>Compétences en Développement</h2>
                <div class="skills-container">
                    <div class="skill-item">
                        <div class="skill-name">HTML/CSS</div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 35%">
                                <span class="progress-text">35%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">Langage C</div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 40%">
                                <span class="progress-text">40%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">JavaScript </div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 22%">
                                <span class="progress-text">22%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">Python</div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 25%">
                                <span class="progress-text">25%</span>
                            </div>
                        </div>
                    </div>
                     <div class="skill-item">
                        <div class="skill-name">PowerShell</div>
                        <div class="skill-progress">
                            <div class="progress-bar" style="width: 15%">
                                <span class="progress-text">15%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
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