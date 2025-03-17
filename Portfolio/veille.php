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
            <img src="Img/hecten_image.png" width="180" alt="HECTEN" class="hecten-logo" style="border-radius: 5px;">
        </a>
        <div class="description_veille">
            <h2 class ="fade-in-text">Bienvenue sur ma page de veille technologique !</h2>

            <p >La veille technologique, c'est quoi ? L'atout principal de la veille technologique est d'identifier ou d'anticiper des innovations par secteurs d'activité. Les sources de veille technologique constituent une information stratégique incontournable pour devancer, développer et exploiter des inventions.</p>
            
            <p >Le thème de la cybersécurité me passionne donc ce sera le sujet principale de cette page </p>
            <br> </br>
            <section class="articles">
                <h2>Articles récents en Cybersécurité</h2>
                <div class="article-grid">
                    <article class="article-card">
                        <h3>Faille FortiGate</h3>
                        <p class="date">Janvier 2024</p>
                        <p class="summary">15 000 firewalls FortiGate menacés par une fuite massive avec la config complète et des identifiants.</p>
                        <a href="https://www.it-connect.fr/15-000-firewalls-fortigate-menaces-fuite-massive-config-complete-et-identifiants/" class="read-more">Lire la suite</a>
                    </article>
                    <div class="article-details">
                        <p>Le groupe de pirates Belsen Group a publié les données de configuration de 15 000 firewalls FortiGate, incluant des informations sensibles telles que des noms d'utilisateur, mots de passe (certains en texte clair), certificats numériques et règles de pare-feu. Cette fuite, organisée par pays et associée à des adresses IP publiques, concerne des appareils vulnérables depuis 2022, exploitant la faille zero-day CVE-2022-40684. Bien que la vulnérabilité CVE-2024-55591 récemment exploitée ne soit pas la cause de cette fuite, elle souligne l'importance de corriger les failles et de ne pas exposer les interfaces de gestion sur Internet pour prévenir de futures attaques.</p>
                    </div>

                    <article class="article-card">
                        <h3>Clone2Leak : Vulnérabilités Git</h3>
                        <p class="date">Janvier 2024</p>
                        <p class="summary">Découverte de vulnérabilités dans GitHub Desktop, Git LFS, et GitHub Credential Manager.</p>
                        <a href="https://www.it-connect.fr/clone2leak-comment-des-failles-git-font-fuiter-vos-identifiants/" class="read-more">Lire la suite</a>
                    </article>
                    <div class="article-details">
                        <p>Une série de vulnérabilités appelées Clone2Leak a été découverte dans des outils liés à Git, comme GitHub Desktop, Git LFS, et GitHub Credential Manager. Ces failles permettent à des attaquants de récupérer des identifiants (mots de passe, tokens) en manipulant des URL ou en exploitant des erreurs dans les outils d'authentification. Pour se protéger, il est recommandé de mettre à jour ces outils vers les versions suivantes : GitHub Desktop 3.4.12, Git Credential Manager 2.6.1, Git LFS 3.6.1, et gh CLI 2.63.0, et d'activer le paramètre credential.protectProtocol dans Git pour éviter l'exfiltration d'identifiants vers des serveurs malveillants.</p>
                    </div>

                    <article class="article-card">
                        <h3>Windows RID Hijacking</h3>
                        <p class="date">Janvier 2024</p>
                        <p class="summary">Le groupe Andariel utilise le RID hijacking pour créer des comptes admin cachés sur Windows.</p>
                        <a href="https://www.it-connect.fr/windows-rid-hijacking-utilisee-par-pirates-pour-creer-un-compte-admin-cache/" class="read-more">Lire la suite</a>
                    </article>
                    <div class="article-details">
                        <p>Le groupe de pirates nord-coréen Andariel, affilié à Lazarus, utilise une technique appelée RID hijacking pour élever discrètement les privilèges des comptes Windows. Cette méthode permet de transformer un compte utilisateur standard en administrateur en modifiant le RID (Relative Identifier) associé à l'identifiant de sécurité (SID) du compte. Les attaquants accèdent d'abord à la base SAM de Windows via le Registre, nécessitant un accès SYSTEM, puis utilisent des outils comme PsExec et JuicyPotato pour effectuer l'élévation. Après avoir créé un compte masqué et modifié son RID, ils effacent les traces de l'attaque pour rendre l'accès persistant et discret. Pour se protéger, il est conseillé de désactiver les comptes invités, de bloquer les outils malveillants et de surveiller les changements dans la base SAM.</p>
                    </div>

                    <article class="article-card">
                        <h3>Faille ChatGPT DDoS</h3>
                        <p class="date">Janvier 2024</p>
                        <p class="summary">Le robot d'indexation ChatGPT-User peut être exploité pour des attaques DDoS.</p>
                        <a href="https://www.it-connect.fr/faille-robot-indexation-chatgpt-utilise-pour-lancer-des-attaques-ddos/" class="read-more">Lire la suite</a>
                    </article>
                    <div class="article-details">
                        <p>Une vulnérabilité a été découverte dans le robot d'indexation ChatGPT-User, utilisé pour parcourir le Web, qui pourrait être exploité pour lancer des attaques DDoS. Un chercheur en sécurité a démontré que, par l'envoi d'une requête HTTP contenant une liste d'URLs, un attaquant pourrait amener le robot à visiter ces pages simultanément, générant un trafic massif et saturant un site web. Cette attaque, sans besoin d'authentification, pourrait entraîner entre 20 et 5 000 requêtes par seconde, causant un déni de service. Malgré le signalement à OpenAI et Microsoft, aucune réponse n'a été reçue et la vulnérabilité pourrait toujours être présente.</p>
                    </div>

                    <article class="article-card">
                        <h3>Faille 7-Zip Windows</h3>
                        <p class="date">Janvier 2024</p>
                        <p class="summary">Vulnérabilité permettant de contourner la protection Mark of the Web (MotW) de Windows.</p>
                        <a href="https://www.it-connect.fr/faille-7-zip-contourner-securite-motw-de-windows-cve-2025-0411/" class="read-more">Lire la suite</a>
                    </article>
                    <div class="article-details">
                        <p>Une vulnérabilité a été découverte dans 7-Zip, permettant de contourner la protection Mark of the Web (MotW) de Windows. Cette protection identifie les fichiers provenant de sources externes comme Internet et avertit l'utilisateur des risques d'exécution. Cependant, la faille (CVE-2025-0411) empêche ce marqueur de se propager correctement aux fichiers extraits d'archives compressées, permettant ainsi l'exécution de code malveillant sans avertissement. Cette vulnérabilité nécessite une interaction de l'utilisateur pour être exploitée. Un correctif a été publié par 7-Zip (version 24.09), mais les utilisateurs doivent mettre à jour manuellement l'application pour se protéger.</p>
                    </div>

                    <article class="article-card">
                        <h3>DeepSeek : Fuite de données</h3>
                        <p class="date">Janvier 2024</p>
                        <p class="summary">Base de données non protégée exposant les conversations des utilisateurs de l'IA DeepSeek.</p>
                        <a href="https://www.it-connect.fr/deepseek-une-base-de-donnees-non-protegee-expose-les-conversations-des-utilisateurs/" class="read-more">Lire la suite</a>
                    </article>
                    <div class="article-details">
                        <p>DeepSeek, une IA chinoise rivalisant avec ChatGPT, a suspendu les nouvelles inscriptions après une cyberattaque DDoS massive visant ses serveurs. L'attaque perturbe son API et son interface Web Chat, bien que les utilisateurs existants puissent toujours y accéder. En parallèle, des experts en cybersécurité ont découvert que DeepSeek est vulnérable aux jailbreaks, permettant la génération de contenus malveillants, comme des ransomwares ou des instructions pour fabriquer des explosifs. Cette faille de sécurité soulève des inquiétudes quant à l'absence de garde-fous sur la plateforme.</p>
                    </div>

                    <article class="article-card">
                        <h3>Risque des capteurs de lumière</h3>
                        <p class="date">Janvier 2024</p>
                        <p class="summary">Les capteurs de lumière ambiante des appareils intelligents présentent un risque pour la confidentialité.</p>
                        <a href="https://news.mit.edu/2024/study-smart-devices-ambient-light-sensors-pose-imaging-privacy-risk-0129" class="read-more">Lire la suite</a>
                    </article>
                    <div class="article-details">
                        <p>Des chercheurs du MIT ont révélé une nouvelle menace pour la vie privée : les capteurs de lumière ambiante des appareils intelligents, utilisés pour ajuster la luminosité des écrans, pourraient être exploités par des pirates informatiques pour capturer des images des interactions tactiles des utilisateurs. En utilisant un algorithme d'imagerie informatique, les chercheurs ont montré que ces capteurs peuvent espionner des gestes tels que le balayage, le tapotement, ou même les mouvements lors de la visualisation de vidéos. Bien que ce piratage soit encore limité en raison de la faible vitesse de récupération d'image, il constitue une menace pour la confidentialité. Des mesures pour atténuer ces risques incluent la limitation de l'accès à ces capteurs et la réduction de leur précision.</p>
                    </div>

                    <article class="article-card">
                        <h3>Extensions malveillantes VS Code</h3>
                        <p class="date">Janvier 2024</p>
                        <p class="summary">Des extensions malveillantes ciblent les développeurs sur Visual Studio Code.</p>
                        <a href="https://www.it-connect.fr/une-nouvelle-vague-extensions-malveillantes-cible-les-developpeurs-visual-studio-code/" class="read-more">Lire la suite</a>
                    </article>
                    <div class="article-details">
                        <p>Des chercheurs en cybersécurité ont découvert une campagne de pirates informatiques ciblant les développeurs via des extensions malveillantes sur la marketplace de Visual Studio Code. Ces extensions, souvent déguisées en outils liés à la blockchain ou à des services comme Zoom, permettent aux attaquants de télécharger des payloads sur les machines infectées. Une fois installées, elles exécutent des scripts pour établir des connexions vers des domaines malveillants, permettant aux pirates d'ajouter du code malveillant à des projets en cours.</p>
                    </div>

                    <article class="article-card">
                        <h3>Recherche sur les électrodes</h3>
                        <p class="date">Octobre 2024</p>
                        <p class="summary">Étude sur l'amélioration de l'efficacité des processus électrochimiques.</p>
                        <a href="https://news.mit.edu/2024/bubble-findings-could-unlock-better-electrode-electrolyzer-designs-1008" class="read-more">Lire la suite</a>
                    </article>
                    <div class="article-details">
                        <p>Une nouvelle étude des bulles sur les surfaces des électrodes pourrait aider à améliorer l'efficacité des processus électrochimiques qui produisent des carburants, des produits chimiques et des matériaux. David L. Chandler | MIT News Publication Date:October 8, 2024</p>
                    </div>
                </div>
            </section>

            <footer>
                <p class="signature">Dernière mise à jour : 19/12/2024 - Par Florian BURNEL</p>
            </footer>
        </div>
    </body>
</html>

<style>
    .article-details {
        margin-top: 1rem;
        padding: 1rem;
        background: #f9f9f9;
        border-radius: 8px;
        margin-bottom: 2rem;
    }

    .article-details p {
        line-height: 1.6;
        color: #333;
    }
</style>
