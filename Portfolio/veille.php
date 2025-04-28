<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page veille technologique de Adrien</title>
        <link href="index.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            body {
                margin: 0;
                padding: 0;
                background: linear-gradient(135deg, #1f1f1f 0%, #111111 100%);
                color: white;
                font-family: Arial, sans-serif;
                min-height: 100vh;
            }

            .content {
                margin-top: 80px;
                padding: 2rem;
            }

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
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            }

            .card h2 {
                color: #4a90e2;
                margin-bottom: 1.5rem;
                text-align: center;
                font-size: 1.5rem;
            }

            .card p {
                color: #e0e0e0;
                line-height: 1.6;
                margin-bottom: 1rem;
            }

            .card ul {
                list-style-type: none;
                padding: 0;
            }

            .card li {
                margin-bottom: 0.8rem;
                padding-left: 1.5rem;
                position: relative;
            }

            .card li::before {
                content: "•";
                color: #4a90e2;
                position: absolute;
                left: 0;
            }

            .fade-in-text {
                opacity: 0;
                animation: fadeIn 1s ease-in forwards;
            }

            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }

            .delay-1 { animation-delay: 0.2s; }
            .delay-2 { animation-delay: 0.4s; }
            .delay-3 { animation-delay: 0.6s; }

            .articles-section {
                margin-top: 3rem;
                padding: 2rem;
            }

            .section-title {
                color: #4a90e2;
                text-align: center;
                margin-bottom: 2rem;
                font-size: 2rem;
            }

            .articles-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 2rem;
                padding: 1rem;
            }

            .article-card {
                background: rgba(25, 25, 25, 0.85);
                border-radius: 15px;
                padding: 1.5rem;
                color: white;
                border: 1px solid rgba(255, 255, 255, 0.1);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .article-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            }

            .article-card h3 {
                color: #4a90e2;
                margin-bottom: 1rem;
                font-size: 1.2rem;
            }

            .article-date {
                color: #888;
                font-size: 0.9rem;
                margin-bottom: 0.5rem;
            }

            .article-meta {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                margin-bottom: 1rem;
                font-size: 0.9rem;
                color: #aaa;
            }

            .article-meta-item {
                display: flex;
                align-items: center;
            }

            .article-meta-item i {
                margin-right: 0.5rem;
                color: #4a90e2;
            }

            .article-source {
                display: inline-block;
                margin-top: 0.5rem;
                font-size: 0.9rem;
                color: #aaa;
            }

            .article-source i {
                margin-right: 0.5rem;
                color: #4a90e2;
            }

            .article-summary {
                color: #e0e0e0;
                margin-bottom: 1rem;
                line-height: 1.4;
            }

            .article-details {
                color: #ccc;
                font-size: 0.9rem;
                margin-bottom: 1rem;
                line-height: 1.4;
            }

            .read-more {
                display: inline-block;
                color: #4a90e2;
                text-decoration: none;
                padding: 0.5rem 1rem;
                border: 1px solid #4a90e2;
                border-radius: 4px;
                transition: all 0.3s ease;
            }

            .read-more:hover {
                background: rgba(74, 144, 226, 0.1);
                color: #fff;
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <a href="index.php" class="nav-link">Accueil</a>
                <a href="projets.php" class="nav-link">Projets BTS</a>
                <a href="entreprise.php" class="nav-link">Entreprise</a>
                <a href="veille.php" class="nav-link active">Veille Technologique</a>
                <a href="a_propos_de_moi.php" class="nav-link">À propos de moi</a>
            </div>
        </nav>
        
        <div class="content">
            <div class="grid-container">
                <!-- Carte Définition -->
                <div class="card fade-in-text">
                    <h2>Qu'est-ce que la veille technologique ?</h2>
                    <p>La veille technologique est un processus continu de surveillance et d'analyse des évolutions technologiques dans un domaine spécifique. Elle permet de :</p>
                    <ul>
                        <li>Anticiper les innovations</li>
                        <li>Identifier les opportunités</li>
                        <li>Prendre des décisions éclairées</li>
                        <li>Maintenir une compétitivité</li>
                    </ul>
                </div>

                <!-- Carte Méthodologie -->
                <div class="card fade-in-text delay-1">
                    <h2>Ma méthodologie de veille</h2>
                    <p>Pour mener à bien ma veille technologique, j'utilise plusieurs outils et méthodes :</p>
                    <ul>
                        <li>Google Alerts pour les notifications automatiques</li>
                        <li>Réseaux sociaux professionnels (LinkedIn, Twitter)</li>
                        <li>Blogs et sites spécialisés en cybersécurité</li>
                        <li>Forums et communautés en ligne</li>
                        <li>Newsletters de sécurité informatique</li>
                    </ul>
                </div>
				

                <!-- Carte Thématiques -->
                <div class="card fade-in-text delay-2">
                    <h2>Mes thématiques de veille</h2>
                    <p>Je me concentre particulièrement sur :</p>
                    <ul>
                        <li>Cybersécurité et sécurité des réseaux</li>
                        <li>Nouvelles vulnérabilités et menaces</li>
                        <li>Outils de sécurité et de monitoring</li>
                        <li>Bonnes pratiques en sécurité informatique</li>
                        <li>Évolutions des systèmes d'exploitation</li>
                    </ul>
                    <p>Mots-clés utilisés pour ma veille :</p>
                    <div style="display: flex; justify-content: space-between; margin-top: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <ul>
                                <li>Faille de sécurité</li>
                                <li>Exploit</li>
                                <li>Vulnérabilité</li>
                                <li>Hack</li>
                                <li>Piratage</li>
                            </ul>
                        </div>
                        <div style="flex: 1; margin-right: 10px;">
                            <ul>
                                <li>Malware</li>
                                <li>Ransomware</li>
                                <li>APT (Advanced Persistent Threat)</li>
                                <li>Zero-day</li>
                                <li>Data breach</li>
                            </ul>
                        </div>
                        <div style="flex: 1;">
                            <ul>
                                <li>Phishing</li>
                                <li>Social engineering</li>
                                <li>Penetration testing</li>
                                <li>Red team</li>
                                <li>Blue team</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Carte Sources -->
                <div class="card fade-in-text delay-3">
                    <h2>Mes principales sources</h2>
                    <p>Quelques-unes de mes sources d'information privilégiées :</p>
                    <ul>
                        <li>Blogs de sécurité (Kaspersky, ESET, Malwarebytes)</li>
                        <li>Portails d'actualité tech (ZDNet, The Hacker News)</li>
                        <li>Communautés Reddit dédiées à la sécurité</li>
                        <li>Forums spécialisés (Security Stack Exchange)</li>
                        <li>Conférences et webinaires en ligne</li>
                    </ul>
                </div>
            </div>

            <!-- Section Articles -->
            <div class="articles-section">
                <h2 class="section-title fade-in-text">Articles de Veille Technologique</h2>
                <div class="articles-grid">
				<!-- Article 12 -->
                    <div class="article-card fade-in-text">
                        <h3>Morocco Investigates Social Security Agency Data Leak</h3>
                        <p class="article-date">Avril 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Kristina Beek</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Avril 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">Une faille de sécurité a valu la diffusion d'informations sensibles sur Telegram provenant de la sécurité sociale au Maroc.</p>
                        <div class="article-details">
                            <p>Initial investigations conducted by the Moroccan National Social Security Fund (CNSS) revealed that its IT systems were the target of a series of cyberattacks in which the threat actor "aimed at circumventing security measures," ultimately leading to the leak of the agency's data, according to a CNSS press release.

The CNSS is a public institution responsible for managing the social security plans for employees in Morocco's private sector.</p>
                        </div>
                        <div class="article-source">
                            <i class="fas fa-link"></i>
                            <span>Source: Dark Reading</span>
                        </div>
                        <a href="https://www.darkreading.com/threat-intelligence/morocco-investigates-social-security-agency-data-leak" class="read-more">Lire la suite</a>
                    </div>
				
				<!-- Article 11 -->
                    <div class="article-card fade-in-text">
                        <h3>Paper Werewolf Deploys PowerModul Implant in Targeted Cyberattacks on Russian Sectors</h3>
                        <p class="article-date">Avril 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Ravie Lakshmanan</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Avril 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">L'organisation Paper Werewolf est une menace pour la Russie part ses nombreuses attaques dans le pays.</p>
                        <div class="article-details">
                            <p>The threat actor known as Paper Werewolf has been observed exclusively targeting Russian entities with a new implant called PowerModul.

The activity, which took place between July and December 2024, singled out organizations in the mass media, telecommunications, construction, government entities, and energy sectors, Kaspersky said in a new report published Thursday.

Paper Werewolf, also known as GOFFEE, is assessed to have conducted at least seven campaigns since 2022, according to BI.ZONE, with the attacks mainly aimed at government, energy, financial, media, and other organizations.</p>
                        </div>
                        <div class="article-source">
                            <i class="fas fa-link"></i>
                            <span>Source: The Hacker News</span>
                        </div>
                        <a href="https://thehackernews.com/2025/04/paper-werewolf-deploys-powermodul.html" class="read-more">Lire la suite</a>
                    </div>
				<!-- Article 10 -->
                    <div class="article-card fade-in-text">
                        <h3>Incomplete Patch in NVIDIA Toolkit Leaves CVE-2024-0132 Open to Container Escapes - TheHackerNews</h3>
                        <p class="article-date">Avril 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Ravie Lakshmanan</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Avril 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">Vulnérabilité découverte pour le logiciel "NVIDIA Container Toolkit"</p>
                        <div class="article-details">
                            <p>Cybersecurity researchers have detailed a case of an incomplete patch for a previously addressed security flaw impacting the NVIDIA Container Toolkit that, if successfully exploited, could put sensitive data at risk.

The original vulnerability CVE-2024-0132 (CVSS score: 9.0) is a Time-of-Check Time-of-Use (TOCTOU) vulnerability that could lead to a container escape attack and allow for unauthorized access to the underlying host.</p>
                        </div>
                        <a href="https://thehackernews.com/2025/04/incomplete-patch-in-nvidia-toolkit.html" class="read-more">Lire la suite</a>
                    </div>
				
				<!-- Article 9 -->
                    <div class="article-card fade-in-text">
                        <h3>Chrome 136 fixes 20-year browser history privacy risk - BleepingComputer</h3>
                        <p class="article-date">Avril 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Bill Toulas</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Avril 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">Changement de la part de Chrome sur la confidentialité de l'utilisateur.</p>
                        <div class="article-details">
                            <p>Google is fixing a long-standing privacy issue that, for years, enabled websites to determine users' browsing history through the previously visited links.

The problem arises from allowing sites to style links as ':visited,' meaning showing them as another color instead of the default blue if a user had previously clicked on them. 

The system displays this color change regardless of which site they were on when they clicked the link, allowing other sites to potentially use creative scripts that leak the user's browsing history</p>
                        </div>
                        <a href="https://www.bleepingcomputer.com/news/security/chrome-136-fixes-20-year-browser-history-privacy-risk/" class="read-more">Lire la suite</a>
                    </div>
                    <!-- Article 1 -->
                    <div class="article-card fade-in-text">
                        <h3>Faille FortiGate</h3>
                        <p class="article-date">Mars 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Florian BURNEL</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Mars 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">15 000 firewalls FortiGate menacés par une fuite massive avec la config complète et des identifiants.</p>
                        <div class="article-details">
                            <p>Le groupe de pirates Belsen Group a publié les données de configuration de 15 000 firewalls FortiGate, incluant des informations sensibles telles que des noms d'utilisateur, mots de passe (certains en texte clair), certificats numériques et règles de pare-feu.</p>
                        </div>
                        <a href="https://www.it-connect.fr/15-000-firewalls-fortigate-menaces-fuite-massive-config-complete-et-identifiants/" class="read-more">Lire la suite</a>
                    </div>
					

                    <!-- Article 2 -->
                    <div class="article-card fade-in-text">
                        <h3>Clone2Leak : Vulnérabilités Git</h3>
                        <p class="article-date">Mars 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Florian BURNEL</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Mars 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">Découverte de vulnérabilités dans GitHub Desktop, Git LFS, et GitHub Credential Manager.</p>
                        <div class="article-details">
                            <p>Une série de vulnérabilités appelées Clone2Leak a été découverte dans des outils liés à Git, comme GitHub Desktop, Git LFS, et GitHub Credential Manager.</p>
                        </div>
                        <a href="https://www.it-connect.fr/clone2leak-comment-des-failles-git-font-fuiter-vos-identifiants/" class="read-more">Lire la suite</a>
                    </div>

                    <!-- Article 3 -->
                    <div class="article-card fade-in-text">
                        <h3>Windows RID Hijacking</h3>
                        <p class="article-date">Mars 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Florian BURNEL</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Mars 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">Le groupe Andariel utilise le RID hijacking pour créer des comptes admin cachés sur Windows.</p>
                        <div class="article-details">
                            <p>Le groupe de pirates nord-coréen Andariel, affilié à Lazarus, utilise une technique appelée RID hijacking pour élever discrètement les privilèges des comptes Windows.</p>
                        </div>
                        <a href="https://www.it-connect.fr/windows-rid-hijacking-utilisee-par-pirates-pour-creer-un-compte-admin-cache/" class="read-more">Lire la suite</a>
                    </div>

                    <!-- Article 4 -->
                    <div class="article-card fade-in-text">
                        <h3>Faille ChatGPT DDoS</h3>
                        <p class="article-date">Fevrier 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Florian BURNEL</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Fevrier 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">Le robot d'indexation ChatGPT-User peut être exploité pour des attaques DDoS.</p>
                        <div class="article-details">
                            <p>Une vulnérabilité a été découverte dans le robot d'indexation ChatGPT-User, utilisé pour parcourir le Web, qui pourrait être exploité pour lancer des attaques DDoS.</p>
                        </div>
                        <a href="https://www.it-connect.fr/faille-robot-indexation-chatgpt-utilise-pour-lancer-des-attaques-ddos/" class="read-more">Lire la suite</a>
                    </div>

                    <!-- Article 5 -->
                    <div class="article-card fade-in-text">
                        <h3>Faille 7-Zip Windows</h3>
                        <p class="article-date">Janvier 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Florian BURNEL</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Janvier 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">Vulnérabilité permettant de contourner la protection Mark of the Web (MotW) de Windows.</p>
                        <div class="article-details">
                            <p>Une vulnérabilité a été découverte dans 7-Zip, permettant de contourner la protection Mark of the Web (MotW) de Windows.</p>
                        </div>
                        <a href="https://www.it-connect.fr/faille-7-zip-contourner-securite-motw-de-windows-cve-2025-0411/" class="read-more">Lire la suite</a>
                    </div>

                    <!-- Article 6 -->
                    <div class="article-card fade-in-text">
                        <h3>DeepSeek : Fuite de données</h3>
                        <p class="article-date">Janvier 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Florian BURNEL</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Janvier 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">Base de données non protégée exposant les conversations des utilisateurs de l'IA DeepSeek.</p>
                        <div class="article-details">
                            <p>DeepSeek, une IA chinoise rivalisant avec ChatGPT, a suspendu les nouvelles inscriptions après une cyberattaque DDoS massive visant ses serveurs.</p>
                        </div>
                        <a href="https://www.it-connect.fr/deepseek-une-base-de-donnees-non-protegee-expose-les-conversations-des-utilisateurs/" class="read-more">Lire la suite</a>
                    </div>

                    <!-- Article 7 -->
                    <div class="article-card fade-in-text">
                        <h3>Risque des capteurs de lumière</h3>
                        <p class="article-date">Janvier 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Alex Shipps</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Janvier 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">Les capteurs de lumière ambiante des appareils intelligents présentent un risque pour la confidentialité.</p>
                        <div class="article-details">
                            <p>Des chercheurs du MIT ont révélé une nouvelle menace pour la vie privée : les capteurs de lumière ambiante des appareils intelligents pourraient être exploités pour capturer des images des interactions tactiles.</p>
                        </div>
                        <a href="https://news.mit.edu/2024/study-smart-devices-ambient-light-sensors-pose-imaging-privacy-risk-0129" class="read-more">Lire la suite</a>
                    </div>

                    <!-- Article 8 -->
                    <div class="article-card fade-in-text">
                        <h3>Extensions malveillantes VS Code</h3>
                        <p class="article-date">Janvier 2025</p>
                        <div class="article-meta">
                            <div class="article-meta-item">
                                <i class="fas fa-user"></i>
                                <span>Florian BURNEL</span>
                            </div>
                            <div class="article-meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>Janvier 2025</span>
                            </div>
                        </div>
                        <p class="article-summary">Des extensions malveillantes ciblent les développeurs sur Visual Studio Code.</p>
                        <div class="article-details">
                            <p>Des chercheurs en cybersécurité ont découvert une campagne de pirates informatiques ciblant les développeurs via des extensions malveillantes sur la marketplace de Visual Studio Code.</p>
                        </div>
                        <a href="https://www.it-connect.fr/une-nouvelle-vague-extensions-malveillantes-cible-les-developpeurs-visual-studio-code/" class="read-more">Lire la suite</a>
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
