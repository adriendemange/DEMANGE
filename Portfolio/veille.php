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
            <a href="index.php">Accueil</a></li>
            <a href="projets.php">Projets BTS</a></li>
            <a href="entreprise.php">Entreprise</a></li>
            <a href="veille.php">Veille Technologique</a></li>
            <a href="a_propos_de_moi.php">À propos de moi</a></li>

        </div> 
        <a href="https://hecten.fr/">
            <img src="Img/hecten_image.png" width="180" alt="HECTEN" class="hecten-logo" style="border-radius: 5px;">
        </a>
        <div class="description_veille">
            <h2 class ="fade-in-text">Bienvenue sur ma page de veille technologique !</h2>

            <p >La veille technologique, c'est quoi ? L'atout principal de la veille technologique est d'identifier ou d'anticiper des innovations par secteurs d'activité. Les sources de veille technologique constituent une information stratégique incontournable pour devancer, développer et exploiter des inventions.</p>
            
            <p >Le thème de la cybersécurité me passionne donc ce sera le sujet principale de cette page </p>
            <br> </br>
            <a hef=" https://www.it-connect.fr/15-000-firewalls-fortigate-menaces-fuite-massive-config-complete-et-identifiants/" > 15 000 firewalls FortiGate menacés par une fuite massive avec la config complète et des identifiants - Le groupe de pirates Belsen Group a publié les données de configuration de 15 000 firewalls FortiGate, incluant des informations sensibles telles que des noms d'utilisateur, mots de passe (certains en texte clair), certificats numériques et règles de pare-feu. Cette fuite, organisée par pays et associée à des adresses IP publiques, concerne des appareils vulnérables depuis 2022, exploitant la faille zero-day CVE-2022-40684. Bien que la vulnérabilité CVE-2024-55591 récemment exploitée ne soit pas la cause de cette fuite, elle souligne l'importance de corriger les failles et de ne pas exposer les interfaces de gestion sur Internet pour prévenir de futures attaques.</a>
            <br> </br>
            <a href ="https://www.it-connect.fr/clone2leak-comment-des-failles-git-font-fuiter-vos-identifiants/" > Une série de vulnérabilités appelées Clone2Leak a été découverte dans des outils liés à Git, comme GitHub Desktop, Git LFS, et GitHub Credential Manager. Ces failles permettent à des attaquants de récupérer des identifiants (mots de passe, tokens) en manipulant des URL ou en exploitant des erreurs dans les outils d'authentification. Pour se protéger, il est recommandé de mettre à jour ces outils vers les versions suivantes : GitHub Desktop 3.4.12, Git Credential Manager 2.6.1, Git LFS 3.6.1, et gh CLI 2.63.0, et d'activer le paramètre credential.protectProtocol dans Git pour éviter l'exfiltration d'identifiants vers des serveurs malveillants.</a>
            <br> </br>
            <a href ="https://www.it-connect.fr/windows-rid-hijacking-utilisee-par-pirates-pour-creer-un-compte-admin-cache/" > Windows : la technique du RID hijacking utilisée par les pirates pour créer un compte admin caché ! - Le groupe de pirates nord-coréen Andariel, affilié à Lazarus, utilise une technique appelée RID hijacking pour élever discrètement les privilèges des comptes Windows. Cette méthode permet de transformer un compte utilisateur standard en administrateur en modifiant le RID (Relative Identifier) associé à l’identifiant de sécurité (SID) du compte. Les attaquants accèdent d'abord à la base SAM de Windows via le Registre, nécessitant un accès SYSTEM, puis utilisent des outils comme PsExec et JuicyPotato pour effectuer l'élévation. Après avoir créé un compte masqué et modifié son RID, ils effacent les traces de l'attaque pour rendre l'accès persistant et discret. Pour se protéger, il est conseillé de désactiver les comptes invités, de bloquer les outils malveillants et de surveiller les changements dans la base SAM.</a>
            <br> </br>
            <a href = " https://www.it-connect.fr/faille-robot-indexation-chatgpt-utilise-pour-lancer-des-attaques-ddos/" > Une vulnérabilité a été découverte dans le robot d'indexation ChatGPT-User, utilisé pour parcourir le Web, qui pourrait être exploité pour lancer des attaques DDoS. Un chercheur en sécurité a démontré que, par l'envoi d'une requête HTTP contenant une liste d'URLs, un attaquant pourrait amener le robot à visiter ces pages simultanément, générant un trafic massif et saturant un site web. Cette attaque, sans besoin d'authentification, pourrait entraîner entre 20 et 5 000 requêtes par seconde, causant un déni de service. Malgré le signalement à OpenAI et Microsoft, aucune réponse n'a été reçue et la vulnérabilité pourrait toujours être présente.</a>
            <br> </br>
            <a href="https://www.it-connect.fr/faille-7-zip-contourner-securite-motw-de-windows-cve-2025-0411/https://www.it-connect.fr/faille-7-zip-contourner-securite-motw-de-windows-cve-2025-0411/ " > Une vulnérabilité a été découverte dans 7-Zip, permettant de contourner la protection Mark of the Web (MotW) de Windows. Cette protection identifie les fichiers provenant de sources externes comme Internet et avertit l'utilisateur des risques d'exécution. Cependant, la faille (CVE-2025-0411) empêche ce marqueur de se propager correctement aux fichiers extraits d'archives compressées, permettant ainsi l'exécution de code malveillant sans avertissement. Cette vulnérabilité nécessite une interaction de l'utilisateur pour être exploitée. Un correctif a été publié par 7-Zip (version 24.09), mais les utilisateurs doivent mettre à jour manuellement l'application pour se protéger. IT Connect :21-01-2025 DeepSeek : une base de  </a>
            <br> </br>
            <a href = "https://www.it-connect.fr/deepseek-une-base-de-donnees-non-protegee-expose-les-conversations-des-utilisateurs/" > DeepSeek : une base de données non protégée expose les conversations des utilisateurs ! : DeepSeek, une IA chinoise rivalisant avec ChatGPT, a suspendu les nouvelles inscriptions après une cyberattaque DDoS massive visant ses serveurs. L'attaque perturbe son API et son interface Web Chat, bien que les utilisateurs existants puissent toujours y accéder. En parallèle, des experts en cybersécurité ont découvert que DeepSeek est vulnérable aux jailbreaks, permettant la génération de contenus malveillants, comme des ransomwares ou des instructions pour fabriquer des explosifs. Cette faille de sécurité soulève des inquiétudes quant à l’absence de garde-fous sur la plateforme </a>
            <br> </br>
            <a href=" https://news.mit.edu/2024/study-smart-devices-ambient-light-sensors-pose-imaging-privacy-risk-0129" > Étude : les capteurs de lumière ambiante des appareils intelligents présentent un risque pour la confidentialité des images -> Des chercheurs du MIT ont révélé une nouvelle menace pour la vie privée : les capteurs de lumière ambiante des appareils intelligents, utilisés pour ajuster la luminosité des écrans, pourraient être exploités par des pirates informatiques pour capturer des images des interactions tactiles des utilisateurs. En utilisant un algorithme d’imagerie informatique, les chercheurs ont montré que ces capteurs peuvent espionner des gestes tels que le balayage, le tapotement, ou même les mouvements lors de la visualisation de vidéos. Bien que ce piratage soit encore limité en raison de la faible vitesse de récupération d'image, il constitue une menace pour la confidentialité. Des mesures pour atténuer ces risques incluent la limitation de l'accès à ces capteurs et la réduction de leur précision.</a>
            <br> </br>
            <a href=" https://www.it-connect.fr/une-nouvelle-vague-extensions-malveillantes-cible-les-developpeurs-visual-studio-code/" > Une nouvelle vague d’extensions malveillantes cible les développeurs sous Visual Studio Code ! Des chercheurs en cybersécurité ont découvert une campagne de pirates informatiques ciblant les développeurs via des extensions malveillantes sur la marketplace de Visual Studio Code. Ces extensions, souvent déguisées en outils liés à la blockchain ou à des services comme Zoom, permettent aux attaquants de télécharger des payloads sur les machines infectées. Une fois installées, elles exécutent des scripts pour établir des connexions vers des domaines malveillants, permettant aux pirates d'ajouter du code malveillant à des projets en cours. </a>
            <br> </br>
            <p class="blue">19/12/2024 Florian BURNEL Cybersécurité</p>
            <br> </br>
            <a href="https://news.mit.edu/2024/bubble-findings-could-unlock-better-electrode-electrolyzer-designs-1008 " > Articles Bulles </a>
            <br> </br>
            <p class="blue">Une nouvelle étude des bulles sur les surfaces des électrodes pourrait aider à améliorer l’efficacité des processus électrochimiques qui produisent des carburants, des produits chimiques et des matériaux. David L. Chandler | MIT News Publication Date:October 8, 2024</p>
        <div>
    </body>
</html>
