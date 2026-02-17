<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page projets de Adrien</title>
        <link href="index.css" rel="stylesheet" type="text/css" />
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
            p, li, .card p, .project-description, .module-description {
                font-size: 1.1rem;
                line-height: 1.6;
            }

            h2, .card h2, .section-title {
                font-size: 1.8rem;
            }

            h3, .project-title, .module-title {
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

            /* Style des sections */
            .section {
                background: rgba(25, 25, 25, 0.85);
                border-radius: 15px;
                padding: 2rem;
                margin: 2rem auto;
                max-width: 1200px;
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

            /* Style des modules */
            .modules-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
                margin: 2rem 0;
            }

            .module-card {
                background: rgba(74, 144, 226, 0.1);
                padding: 1.5rem;
                border-radius: 10px;
                border: 1px solid rgba(74, 144, 226, 0.2);
                transition: transform 0.3s ease;
            }

            .module-card:hover {
                transform: translateY(-5px);
                background: rgba(74, 144, 226, 0.15);
            }

            .module-title {
                color: #4a90e2;
                font-size: 1.3rem;
                margin-bottom: 1rem;
            }

            .module-description {
                color: #e0e0e0;
                font-size: 1.1rem;
                line-height: 1.5;
            }

            /* Style du terminal */
            .terminal-section {
                margin: 3rem auto;
                max-width: 1200px;
            }

            .terminal-container {
                background: #1a1a1a;
                border-radius: 10px;
                padding: 1.5rem;
                margin: 2rem 0;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .controls {
                margin-bottom: 1rem;
                display: flex;
                gap: 1rem;
            }

            #projectSelector {
                background: #2d2d2d;
                color: #e0e0e0;
                border: 1px solid rgba(255, 255, 255, 0.1);
                padding: 0.5rem 1rem;
                border-radius: 5px;
                font-size: 1.1rem;
            }

            .toggle-button, .execute-button, .clear-button {
                background: #4a90e2;
                color: white;
                border: none;
                padding: 0.5rem 1rem;
                border-radius: 5px;
                cursor: pointer;
                transition: background 0.3s ease;
                font-size: 1.1rem;
            }

            .toggle-button:hover, .execute-button:hover, .clear-button:hover {
                background: #357abd;
            }

            .editor {
                height: 400px;
                margin: 1rem 0;
                border-radius: 5px;
                font-size: 14px;
            }

            .terminal {
                background: #000;
                color: #00ff00;
                padding: 1rem;
                border-radius: 5px;
                font-family: monospace;
                height: 300px;
                overflow-y: auto;
                margin: 1rem 0;
                font-size: 1.1rem;
            }

            .terminal-input {
                background: #1a1a1a;
                color: #e0e0e0;
                border: 1px solid rgba(255, 255, 255, 0.1);
                padding: 0.5rem;
                width: 100%;
                margin: 1rem 0;
                border-radius: 5px;
                font-size: 1.1rem;
            }

            /* Style des projets */
            .projects-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
                margin: 2rem 0;
            }

            .project-card {
                background: rgba(25, 25, 25, 0.9);
                border-radius: 15px;
                overflow: hidden;
                transition: transform 0.3s ease;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .project-card:hover {
                transform: translateY(-10px);
            }

            .project-image {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }

            .project-content {
                padding: 1.5rem;
            }

            .project-title {
                color: #4a90e2;
                font-size: 1.3rem;
                margin-bottom: 1rem;
            }

            .project-description {
                color: #e0e0e0;
                margin-bottom: 1rem;
                line-height: 1.6;
                font-size: 1.1rem;
            }

            .project-link {
                display: inline-block;
                background: rgba(74, 144, 226, 0.1);
                color: #4a90e2;
                padding: 0.5rem 1rem;
                border-radius: 5px;
                text-decoration: none;
                transition: all 0.3s ease;
                font-size: 1.1rem;
            }

            .project-link:hover {
                background: rgba(74, 144, 226, 0.2);
                transform: translateX(5px);
            }
        </style>
    </head>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
        <nav class="navbar">
            <div class="container">
                <a href="index.php" class="nav-link">Accueil</a>
                <a href="projets.php" class="nav-link active">Projets BTS</a>
                <a href="entreprise.php" class="nav-link">Entreprise</a>
                <a href="veille.php" class="nav-link">Veille Technologique</a>
                <a href="a_propos_de_moi.php" class="nav-link">À propos de moi</a>
            </div>
        </nav>
        
        <div class="content">
            <a href="https://hecten.fr/">
                <img src="Img/hecten_image.png" width="180" alt="HECTEN" class="hecten-logo" style="border-radius: 5px;">
            </a>
            <h2 class="fade-in-text">Les modules étudiés en BTS :</h2>
            <ul class="fade-in-text" style="line-height: 2.5; margin-bottom: 40px; padding-left: 20px;">
                <li style="margin-bottom: 10px;">Mathématiques Physique-Chimie</li>
                <li style="margin-bottom: 10px;">Cybersécurité</li>
                <li style="margin-bottom: 10px;">Programmation informatique</li>
                <li style="margin-bottom: 10px;">Base de données et gestion de projets</li>
                <li style="margin-bottom: 10px;">Administration et systèmes réseaux</li>
                <li style="margin-bottom: 10px;">Réseau informatique</li>
            </ul>
            
            <div style="display: flex; justify-content: flex-end; margin-top: -20px; margin-right: 50px;">
                <div style="text-align: right;" class="fade-in-text">
                    <h2 class="description_projet_1">Red Team OSINT : </h2>
                    <div class="description_projet_1_p" style="margin-bottom: 30px; margin-top: 20px;">
                        <p class="blue" style="margin-bottom: 5px;"> Recherche d'informations sensibles sur l'entreprise ciblée : Hackaday</p>
                        <p class="blue" style="max-width: 700px; word-wrap: break-word; margin-bottom: 20px;"> Utilisation de <b>SpiderFoot</b>, <b>WhoIs</b>, <b>Shodan</b>, <b>TheHarvester</b> </p>
                        <p class="blue" style="font-style: italic; margin-top: 15px;">Ce TP de Red Team OSINT est l'un des projets que j'ai le plus apprécié réaliser pendant ma formation. Il m'a permis d'explorer des techniques avancées de recherche d'informations et de comprendre l'importance de la sécurité des données.</p>
                    </div>
                    <a href="https://github.com/adriendemange/DEMANGE/tree/main/CYBERSECURITE_FANGNON" >
                        <img src="Img/projet_osint.png" width="700" alt="Projet OSINT" class="positionned-image-osint" style="border-radius: 10px;">
                    </a>
                </div>
            </div>

           

        
            <script>
                function showProjectDetails(projectId) {
                    const modal = document.getElementById('projectModal');
                    const content = document.getElementById('modalContent');
                    
                    let projectContent = '';
                    switch(projectId) {
                        case 1:
                            projectContent = `
                                <h2>Projet Infrastructure Réseau</h2>
                                <p>Description détaillée du projet d'infrastructure...</p>
                                <h3>Technologies utilisées:</h3>
                                <ul>
                                    <li>Windows Server 2019</li>
                                    <li>Active Directory</li>
                                    <li>Configuration VLAN</li>
                                </ul>
                            `;
                            break;
                        case 2:
                            projectContent = `
                                <h2>Projet Supervision</h2>
                                <p>Description détaillée du projet de supervision...</p>
                                <h3>Technologies utilisées:</h3>
                                <ul>
                                    <li>Nagios Core</li>
                                    <li>Scripts Shell</li>
                                    <li>Ubuntu Server</li>
                                </ul>
                            `;
                            break;
                        case 3:
                            projectContent = `
                                <h2>Projet Sécurité</h2>
                                <p>Description détaillée du projet de sécurité...</p>
                                <h3>Technologies utilisées:</h3>
                                <ul>
                                    <li>Kali Linux</li>
                                    <li>Outils d'audit</li>
                                    <li>Solutions de sécurité</li>
                                </ul>
                            `;
                            break;
                    }
                    
                    content.innerHTML = projectContent;
                    modal.style.display = 'block';
                }

                function closeProjectDetails() {
                    document.getElementById('projectModal').style.display = 'none';
                }
            </script>
        
            <div class="terminal-container" style="margin-top: 200px; margin-left: 200px;">
                <h2 style="color: #4a90e2; text-align: center; margin-bottom: 20px;">Terminal de Test de Projets</h2>
                <p style="color: #e0e0e0; text-align: center; margin-bottom: 30px;">Utilisez ce terminal pour tester et exécuter mes projets de programmation directement sur ce site web. Sélectionnez un projet dans le menu déroulant et suivez les instructions à l'écran. <strong>Cliquer sur Exécuter afin de lancer le code !</strong></p>
                <div class="controls">
                    <select id="projectSelector" style="padding: 8px; margin-right: 10px; border-radius: 4px;">
                        <option value="projet1">Vérification Majeur</option>
                        <option value="projet2">TinyCar</option>
                        <option value="projet3">Easyline</option>
                    </select>
                    <button class="toggle-button" onclick="toggleEditor()">Voir/Masquer le code source</button>
                </div>
                <div class="editor" id="editor" style="display: none;"></div>
                <div class="terminal" id="terminal"></div>
                <input type="text" id="userInput" class="terminal-input" placeholder="Entrez votre réponse ici...">
                <div class="terminal-controls">
                    <button class="execute-button" onclick="executeCode()">Exécuter</button>
                    <button class="clear-button" onclick="clearTerminal()">Effacer le terminal</button>
                </div>
            </div>
        
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                let editor = ace.edit("editor");
                editor.setTheme("ace/theme/monokai");
                editor.session.setMode("ace/mode/java");
                
                const terminal = document.getElementById('terminal');
                const userInput = document.getElementById('userInput');
                let waitingForInput = false;
                let currentStep = 0;
                let userData = {
                    name: '',
                    age: 0,
                    confirmation: ''
                };
                
                userInput.style.display = 'none';
                
                userInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter' && waitingForInput) {
                        const input = userInput.value;
                        terminal.innerHTML += `<span class="input">${input}</span><br>`;
                        
                        switch(currentStep) {
                            case 0: // Prénom
                                if (input.match(/[A-Za-zÀ-ÖØ-öø-ÿ\s'-]+/)) {
                                    userData.name = input;
                                    terminal.innerHTML += `<span class="output">D'accord. Bonjour ${input}! \n</span><br>`;
                                    terminal.innerHTML += `<span class="output">Êtes-vous majeur ? (Vous pouvez rentrer votre âge, notre robot s'occupera du reste)</span><br>`;
                                    currentStep = 1;
                                } else {
                                    terminal.innerHTML += `<span class="error">Saisie incorrecte du prénom, veuillez le resaisir.</span><br>`;
                                }
                                break;
                                
                            case 1: // Âge
                                const age = parseInt(input);
                                if (age > 0 && age <= 100) {
                                    userData.age = age;
                                    if (age >= 18) {
                                        if (age === 100) {
                                            terminal.innerHTML += `<span class="output">${userData.name} est centenaire. Il a ${age} ans !!!\n</span><br>`;
                                        } else {
                                            terminal.innerHTML += `<span class="output">${userData.name} est majeur. Il a ${age} ans \n</span><br>`;
                                        }
                                    } else {
                                        terminal.innerHTML += `<span class="output">${userData.name} n'est pas majeur\n</span><br>`;
                                    }
                                    terminal.innerHTML += `<span class="output">Juste pour être sûr... Êtes-vous vraiment majeur ? O/N</span><br>`;
                                    currentStep = 2;
                                } else {
                                    terminal.innerHTML += `<span class="error">Veuillez saisir un âge correct.</span><br>`;
                                }
                                break;
                                
                            case 2: // Confirmation O/N
                                if (input === 'O' || input === 'N') {
                                    userData.confirmation = input;
                                    if (input === 'O') {
                                        if (userData.age < 18) {
                                            terminal.innerHTML += `<span class="output">${userData.name} est un menteur !! Il n'est pas majeur :( \n</span><br>`;
                                        } else {
                                            terminal.innerHTML += `<span class="output">${userData.name} est en effet majeur. \n</span><br>`;
                                        }
                                    } else {
                                        if (userData.age > 18) {
                                            terminal.innerHTML += `<span class="output">${userData.name} a oublié qu'il était majeur ! La viellesse sûrement... \n</span><br>`;
                                        } else {
                                            terminal.innerHTML += `<span class="output">${userData.name} n'est pas majeur ni un menteur !\n</span><br>`;
                                        }
                                    }
                                    terminal.innerHTML += `<span class="output">Le programme s'est déroulé avec succès.\n</span><br>`;
                                    userInput.style.display = 'none';
                                    waitingForInput = false;
                                } else {
                                    terminal.innerHTML += `<span class="error">Veuillez saisir O pour Oui ou N pour non.</span><br>`;
                                }
                                break;
                        }
                        
                        userInput.value = '';
                        terminal.scrollTop = terminal.scrollHeight;
                    }
                });
                
                // Définition des différents projets
                const projects = {
                    projet1: {
                        name: "Vérification Majeur",
                        code: `public class VerificationMajeur {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String nom;
        int age;
        String confirmation;
        
        System.out.println("Quel est votre prénom ?");
        nom = scanner.nextLine();
        
        if (nom.matches("[A-Za-zÀ-ÖØ-öø-ÿ\\s'-]+")) {
            System.out.println("D'accord. Bonjour " + nom + "!");
            System.out.println("Êtes-vous majeur ? (Vous pouvez rentrer votre âge, notre robot s'occupera du reste)");
            age = scanner.nextInt();
            
            if (age > 0 && age <= 100) {
                if (age >= 18) {
                    if (age == 100) {
                        System.out.println(nom + " est centenaire. Il a " + age + " ans !!!");
                    } else {
                        System.out.println(nom + " est majeur. Il a " + age + " ans");
                    }
                } else {
                    System.out.println(nom + " n'est pas majeur");
                }
                
                System.out.println("Juste pour être sûr... Êtes-vous vraiment majeur ? O/N");
                confirmation = scanner.next();
                
                if (confirmation.equals("O")) {
                    if (age < 18) {
                        System.out.println(nom + " est un menteur !! Il n'est pas majeur :(");
                    } else {
                        System.out.println(nom + " est en effet majeur.");
                    }
                } else if (confirmation.equals("N")) {
                    if (age > 18) {
                        System.out.println(nom + " a oublié qu'il était majeur ! La vieillesse sûrement...");
                    } else {
                        System.out.println(nom + " n'est pas majeur ni un menteur !");
                    }
                }
            }
        }
    }
}`,
                        execute: function(terminal, userInput) {
                            terminal.innerHTML += `<span class="output">Quel est votre prénom ?</span><br>`;
                            userInput.style.display = 'block';
                            waitingForInput = true;
                            currentStep = 0;
                        }
                    },
                    projet2: {
                        name: "Votre Projet 2",
                        code: `public class Projet2 {
    public static void main(String[] args) {
        // Votre code du projet 2
    }
}`,
                        execute: function(terminal, userInput) {
                            // Logique d'exécution du projet 2
                        }
                    },
                    projet3: {
                        name: "Votre Projet 3",
                        code: `public class Projet3 {
    public static void main(String[] args) {
        // Votre code du projet 3
    }
}`,
                        execute: function(terminal, userInput) {
                            // Logique d'exécution du projet 3
                        }
                    }
                };

                // Gestionnaire de changement de projet
                document.getElementById('projectSelector').addEventListener('change', function(e) {
                    const selectedProject = projects[e.target.value];
                    editor.setValue(selectedProject.code);
                    editor.clearSelection();
                    clearTerminal();
                });

                // Modification de la fonction executeCode
                window.executeCode = function() {
                    const selectedProjectId = document.getElementById('projectSelector').value;
                    const selectedProject = projects[selectedProjectId];
                    
                    terminal.innerHTML = '';
                    currentStep = 0;
                    userData = {
                        name: '',
                        age: 0,
                        confirmation: ''
                    };
                    
                    terminal.innerHTML += `<span class="command">> Compilation et exécution de ${selectedProject.name}...</span><br>`;
                    selectedProject.execute(terminal, userInput);
                }

                window.clearTerminal = function() {
                    terminal.innerHTML = '';
                    userInput.style.display = 'none';
                    waitingForInput = false;
                    currentStep = 0;
                }

                window.toggleEditor = function() {
                    const editor = document.getElementById('editor');
                    if (editor.style.display === 'none') {
                        editor.style.display = 'block';
                        // Met à jour le code dans l'éditeur avec le projet sélectionné
                        const selectedProjectId = document.getElementById('projectSelector').value;
                        const selectedProject = projects[selectedProjectId];
                        ace.edit("editor").setValue(selectedProject.code);
                        ace.edit("editor").clearSelection();
                    } else {
                        editor.style.display = 'none';
                    }
                }
            });
            </script>
        
            <style>
            .controls {
                margin-bottom: 10px;
            }

            .terminal-controls {
                margin-top: 10px;
                text-align: center;
            }

            .toggle-button {
                padding: 8px 16px;
                margin-right: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 14px;
                background-color: #2196F3;
                color: white;
            }

            .toggle-button:hover {
                opacity: 0.8;
            }

            .description_projet_1_p .blue {
                margin-bottom: 5px;
                max-width: 700px;
                word-wrap: break-word;
            }
            </style>
        
            <div class="projects-section" style="margin-top: 50px;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 30px;">
                    <div style="flex: 1; margin-right: 20px;">
                        <h2 style="color: #4a90e2; text-align: center; margin-bottom: 20px;">Projets Développement</h2>
                        <div class="project-card">
                            <h3>ZooTickoon</h3>
                            <p>Mise en place d'un site web à propos d'un Zoo.</p>
                            <a href="https://github.com/adriendemange/DEMANGE/tree/main/ZooTickoon" target="_blank">Voir le projet</a>
                        </div>
                        <div class="project-card">
                            <h3>TinyCar</h3>
                            <p>Programmation en Java / Python permettant de gérer un panier d'achat.</p>
                            <a href="https://github.com/adriendemange/DEMANGE/tree/main/JAVA/TinyCar/TinyCar/src/fr/hecten" target="_blank">Voir le projet</a>
                        </div>
                        <div class="project-card">
                            <h3>Code source du PortFolio </h3>
                            <p>Programmation en HTML / CSS de ce PortFolio puis mise en ligne avec AlwaysData.</p>
                            <a href="https://github.com/adriendemange/DEMANGE/tree/main/Portfolio" target="_blank">Voir le projet</a>
                        </div>
                        <div class="project-card">
                            <h3>EasyLine</h3>
                            <p>Application Java de gestion de lignes de production et de suivi des commandes.</p>
                            <a href="#" target="_blank">Voir le projet</a>
                        </div>
                    </div>
                    
                    <div style="flex: 1; margin-left: 20px;">
                        <h2 style="color: #4a90e2; text-align: center; margin-bottom: 20px;">Projets Système et Réseaux</h2>
                        <div class="project-card">
                            <h3>Filius/ Cisco Packet Tracer</h3>
                            <p>Mise en place d'un réseau sur Filius et Cisco Packet Tracer.</p>
                            <a href="https://github.com/adriendemange/DEMANGE/tree/main/B1_RESEAU/" target="_blank">Voir le projet</a>
                        </div>
                        <div class="project-card">
                            <h3>Système Windows : Droits, fichiers, ...</h3>
                            <p>Mise en place d'un portail d'authentification pour accéder à une page web.</p>
                            <a href="https://github.com/adriendemange/DEMANGE/tree/main/SYSTEME_T" target="_blank">Voir le projet</a>
                        </div>
                        <div class="project-card">
                            <h3>Publication du PortFolio avec AlwaysData</h3>
                            <p>Configuration d'un serveur afin d'héberger notre site Web.</p>
                            <a href="https://github.com/adriendemange/DEMANGE/tree/main/AP" target="_blank">Voir le projet</a>
                        </div>
                        <div class="project-card">
                            <h3>Publication d'une documentation pour ACI Technology, mon entreprise d'apprentissage</h3>
                            <p>Document expliquant la réalisation d'un onboarding pour l'entreprise JICAP Performance (client de ACI Technology).</p>
                            <a href="https://github.com/adriendemange/DEMANGE/tree/main/Projets_ACI/" target="_blank">Voir le projet</a>
                        </div>
                        <div class="project-card">
                            <h3>Projet Samba (serveur de fichier)</h3>
                            <p>Configuration d'un serveur de fichiers Samba pour le partage de ressources dans un environnement réseau.</p>
                            <a href="#" target="_blank">Voir le projet</a>
                        </div>
                        <div class="project-card">
                            <h3>Booter un Windows et configurer un nouveau poste</h3>
                            <p>Installation et configuration d'un système d'exploitation Windows sur un nouveau poste de travail.</p>
                            <a href="#" target="_blank">Voir le projet</a>
                        </div>
                        <div class="project-card">
                            <h3>Automatiser une tâche planifiée pour la société Briand</h3>
                            <p>Création d'un script d'automatisation pour une tâche planifiée au sein de la société Briand.</p>
                            <a href="#" target="_blank">Voir le projet</a>
                        </div>
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