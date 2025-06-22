Adrien DEMANGE
14/10/2024
Veille Technologique 

Thème choisit : Cybersécurité : nouvelles techniques de hacking et nouveaux dispositifs pour renforcer les systèmes informatiques

Outils : Google Alertes  https://news.mit.edu/ https://www.enablesecurity.com/subscribe/  https://github.com/TalEliyahu/awesome-security-newsletters
Article : (Date la plus récente en haut du fichier)
ex -> titre source (lien) date résumé 


IT Connect : Plus de 80 000 comptes Microsoft Entra ID ciblés par des attaques par pulvérisation de mots de passe !  -   https://www.it-connect.fr/plus-de-80-000-comptes-microsoft-entra-id-attaque-par-pulverisation-de-mots-de-passe/




IT Connect 22/06/25 : https://www.it-connect.fr/discord-faille-dans-le-systeme-invitation-exploitee-pour-delivrer-des-malwares/ : Discord : une faille dans le système d’invitation exploitée pour délivrer des malwares !




MIT https://news.mit.edu/2024/study-smart-devices-ambient-light-sensors-pose-imaging-privacy-risk-0129  -> Étude : les capteurs de lumière ambiante des appareils intelligents présentent un risque pour la confidentialité des images  -> 
Des chercheurs du MIT ont révélé une nouvelle menace pour la vie privée : les capteurs de lumière ambiante des appareils intelligents, utilisés pour ajuster la luminosité des écrans, pourraient être exploités par des pirates informatiques pour capturer des images des interactions tactiles des utilisateurs. En utilisant un algorithme d’imagerie informatique, les chercheurs ont montré que ces capteurs peuvent espionner des gestes tels que le balayage, le tapotement, ou même les mouvements lors de la visualisation de vidéos. Bien que ce piratage soit encore limité en raison de la faible vitesse de récupération d'image, il constitue une menace pour la confidentialité. Des mesures pour atténuer ces risques incluent la limitation de l'accès à ces capteurs et la réduction de leur précision.



IT Connect : 16/01/2025 https://www.it-connect.fr/15-000-firewalls-fortigate-menaces-fuite-massive-config-complete-et-identifiants/  -  15 000 firewalls FortiGate menacés par une fuite massive avec la config complète et des identifiants   -   Le groupe de pirates Belsen Group a publié les données de configuration de 15 000 firewalls FortiGate, incluant des informations sensibles telles que des noms d'utilisateur, mots de passe (certains en texte clair), certificats numériques et règles de pare-feu. Cette fuite, organisée par pays et associée à des adresses IP publiques, concerne des appareils vulnérables depuis 2022, exploitant la faille zero-day CVE-2022-40684. Bien que la vulnérabilité CVE-2024-55591 récemment exploitée ne soit pas la cause de cette fuite, elle souligne l'importance de corriger les failles et de ne pas exposer les interfaces de gestion sur Internet pour prévenir de futures attaques.

IT Connect :Clone2Leak : 25-01-2025 comment des failles Git font fuiter vos identifiants ? /  https://www.it-connect.fr/clone2leak-comment-des-failles-git-font-fuiter-vos-identifiants/    -  
Une série de vulnérabilités appelées Clone2Leak a été découverte dans des outils liés à Git, comme GitHub Desktop, Git LFS, et GitHub Credential Manager. Ces failles permettent à des attaquants de récupérer des identifiants (mots de passe, tokens) en manipulant des URL ou en exploitant des erreurs dans les outils d'authentification. Pour se protéger, il est recommandé de mettre à jour ces outils vers les versions suivantes : GitHub Desktop 3.4.12, Git Credential Manager 2.6.1, Git LFS 3.6.1, et gh CLI 2.63.0, et d'activer le paramètre credential.protectProtocol dans Git pour éviter l'exfiltration d'identifiants vers des serveurs malveillants.

IT Connect : 22-01-2025https://www.it-connect.fr/windows-rid-hijacking-utilisee-par-pirates-pour-creer-un-compte-admin-cache/  :  Windows : la technique du RID hijacking utilisée par les pirates pour créer un compte admin caché !   -   Le groupe de pirates nord-coréen Andariel, affilié à Lazarus, utilise une technique appelée RID hijacking pour élever discrètement les privilèges des comptes Windows. Cette méthode permet de transformer un compte utilisateur standard en administrateur en modifiant le RID (Relative Identifier) associé à l’identifiant de sécurité (SID) du compte. Les attaquants accèdent d'abord à la base SAM de Windows via le Registre, nécessitant un accès SYSTEM, puis utilisent des outils comme PsExec et JuicyPotato pour effectuer l'élévation. Après avoir créé un compte masqué et modifié son RID, ils effacent les traces de l'attaque pour rendre l'accès persistant et discret. Pour se protéger, il est conseillé de désactiver les comptes invités, de bloquer les outils malveillants et de surveiller les changements dans la base SAM.

IT Connect : 27-01-2025Le robot d’indexation de ChatGPT peut être utilisé pour lancer des attaques DDoS !  -  https://www.it-connect.fr/faille-robot-indexation-chatgpt-utilise-pour-lancer-des-attaques-ddos/   -  
Une vulnérabilité a été découverte dans le robot d'indexation ChatGPT-User, utilisé pour parcourir le Web, qui pourrait être exploité pour lancer des attaques DDoS. Un chercheur en sécurité a démontré que, par l'envoi d'une requête HTTP contenant une liste d'URLs, un attaquant pourrait amener le robot à visiter ces pages simultanément, générant un trafic massif et saturant un site web. Cette attaque, sans besoin d'authentification, pourrait entraîner entre 20 et 5 000 requêtes par seconde, causant un déni de service. Malgré le signalement à OpenAI et Microsoft, aucune réponse n'a été reçue et la vulnérabilité pourrait toujours être présente.


IT Connect : 22-01-2025https://www.it-connect.fr/faille-7-zip-contourner-securite-motw-de-windows-cve-2025-0411/https://www.it-connect.fr/faille-7-zip-contourner-securite-motw-de-windows-cve-2025-0411/  :  Une vulnérabilité a été découverte dans 7-Zip, permettant de contourner la protection Mark of the Web (MotW) de Windows. Cette protection identifie les fichiers provenant de sources externes comme Internet et avertit l'utilisateur des risques d'exécution. Cependant, la faille (CVE-2025-0411) empêche ce marqueur de se propager correctement aux fichiers extraits d'archives compressées, permettant ainsi l'exécution de code malveillant sans avertissement. Cette vulnérabilité nécessite une interaction de l'utilisateur pour être exploitée. Un correctif a été publié par 7-Zip (version 24.09), mais les utilisateurs doivent mettre à jour manuellement l'application pour se protéger.



IT Connect :21-01-2025 DeepSeek : une base de données non protégée expose les conversations des utilisateurs !  : DeepSeek, une IA chinoise rivalisant avec ChatGPT, a suspendu les nouvelles inscriptions après une cyberattaque DDoS massive visant ses serveurs. L'attaque perturbe son API et son interface Web Chat, bien que les utilisateurs existants puissent toujours y accéder. En parallèle, des experts en cybersécurité ont découvert que DeepSeek est vulnérable aux jailbreaks, permettant la génération de contenus malveillants, comme des ransomwares ou des instructions pour fabriquer des explosifs. Cette faille de sécurité soulève des inquiétudes quant à l’absence de garde-fous sur la plateforme. -   https://www.it-connect.fr/deepseek-une-base-de-donnees-non-protegee-expose-les-conversations-des-utilisateurs/

IT Connect : 25-01-2025Microsoft Teams : tous les utilisateurs vont bénéficier d’une nouvelle protection contre le phishing ! : 
Microsoft va intégrer en février 2025 une nouvelle protection contre le phishing dans Teams Chat, ciblant les tentatives d’usurpation de marque. Lorsqu'un utilisateur reçoit un message d'un expéditeur externe pour la première fois, une analyse automatique détermine le risque potentiel. Si une menace est détectée, un avertissement s'affiche et l'utilisateur doit prévisualiser le message avant de choisir d'accepter ou de bloquer. Cette sécurité, activée par défaut, fait suite à des attaques sophistiquées comme celles du groupe russe Midnight Blizzard. Pour renforcer la sécurité, Microsoft recommande de limiter ou de restreindre l’accès externe sur Teams.  -   https://www.it-connect.fr/microsoft-teams-tous-les-utilisateurs-vont-beneficier-dune-nouvelle-protection-contre-le-phishing/


MIT :10-01-2025 Un nouveau protocole de sécurité protège les données des attaquants lors des calculs basés sur le cloud / https://news.mit.edu/2024/new-security-protocol-shields-data-during-cloud-based-computation-0926   :  Des chercheurs du MIT ont développé un protocole de sécurité exploitant les propriétés quantiques de la lumière pour protéger les données dans l’apprentissage profond sur le cloud. En encodant les données et les poids du modèle dans un champ optique via la lumière laser, ce protocole empêche toute copie ou interception sans détection, grâce au principe de non-clonage quantique. Il garantit ainsi la confidentialité des données du client et la protection du modèle du serveur, tout en maintenant une précision de 96 %. Cette approche pourrait être appliquée à l’apprentissage fédéré et aux opérations quantiques pour renforcer encore la sécurité et la performance.


IT Connect https://www.it-connect.fr/une-nouvelle-vague-extensions-malveillantes-cible-les-developpeurs-visual-studio-code/   -> Une nouvelle vague d’extensions malveillantes cible les développeurs sous Visual Studio Code ! / 19/12/2024 Florian BURNEL Cybersécurité

IT Connect https://www.it-connect.fr/extensions-chrome-infectees-code-malveillant-a-voler-les-donnees-des-utilisateurs/
L'extension Chrome de Cyberhaven infectée par du code malveillant
Un pirate informatique est parvenu à accéder au compte administrateur Google Chrome Web Store d'un employé de chez Cyberhaven, une entreprise spécialisée dans la prévention contre les pertes de données. Parmi ses clients, Cyberhaven compte notamment de grandes entreprises comme Snowflake, Motorola, Canon, Reddit, AmeriHealth, Cooley, IVP, Navan, DBS, Upstart et Kirkland & Ellis.
Des extensions Chrome infectées par un code malveillant destiné à voler les données des utilisateurs
31/12/2024 Florian BURNEL Cybersécurité


https://news.mit.edu/2024/bubble-findings-could-unlock-better-electrode-electrolyzer-designs-1008 -> Une nouvelle étude des bulles sur les surfaces des électrodes pourrait aider à améliorer l’efficacité des processus électrochimiques qui produisent des carburants, des produits chimiques et des matériaux.
David L. Chandler | MIT News
Publication Date:October 8, 2024  
