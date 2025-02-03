<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page projets de Adrien</title>
        <link href="index.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
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
        <h2 class="fade-in-text">Les modules étudiés en BTS :</h2>
        <ul class="fade-in-text">
            <li>Mathématiques Physique-Chimie</li>
            <li>Cybersécurité</li>
            <li>Programmation informatique</li>
            <li>Base de données et gestion de projets</li>
            <li>Administration et systèmes réseaux</li>
            <li>Réseau informatique</li>
        </ul>
        <h2 class="description_projet_1" style="margin-left: 50px;">Red Team OSINT : </h2>
        <div class="description_projet_1_p" style="margin-top: 50px; margin-left: 50px;">
            <p class="blue"> Recherche d'informations sensibles sur Hackaday </p>
            <p class="blue"> Utilisation de <b>SpiderFoot</b>, <b>WhoIs</b>, <b>Shodan</b>, <b>TheHarvester</b> </p>
        </div>
        
        <div style="height: 220px;"></div>
        
        <a href="https://github.com/adriendemange/DEMANGE/tree/main/CYBERSECURITE_FANGNON" >
            <img src="Img/projet_osint.png" width="700" alt="Projet OSINT" class="positionned-image-osint" style="border-radius: 10px;">
        </a>    
        <div style="display: flex; gap: 20px; align-items: flex-start;">
            <div style="flex: 0 0 300px;">
                <h3 style="color: yellow;">Fonctionnement du Terminal</h3>
                <p style="color: white;">
                    Ce terminal interactif permet de tester un programme Java qui permet de vérifier si l'utilisateur est majeur ou non.
                    <ul>
                        <li>Demande votre prénom</li>
                        <li>Vérifie votre âge</li>
                        <li>Confirme votre majorité</li>
                    </ul>
                    Appuyez sur votre touche "entrée" pour tester le programme !
                </p>
            </div>
            
            <div class="terminal-container" style="margin-top: 50px;">
                <div class="controls">
                    <button class="toggle-button" onclick="toggleEditor()">Voir/Masquer le code source</button>
                </div>
                <div class="editor" id="editor" style="display: none;">
                    import java.util.Scanner;
public class Hello2 {
    public static void main(String[] args) {
        System.out.printf("Bonjour et bienvenue sur mon programme ! \n");
        Scanner sc = new Scanner(System.in);
        String name;
        boolean isValid;
        do {
            System.out.println("Veuillez entrer votre prénom :");
            name = sc.nextLine();
            
            // Validation avec une regex (uniquement des lettres et espaces)
            isValid = name.matches("[A-Za-zÀ-ÖØ-öø-ÿ\\s'-]+");
            
            if (!isValid) {
                System.out.println("Saisie incorrecte du prénom, veuillez le resaisir.");
            }
        } while (!isValid);

        System.out.println("D'accord. Bonjour " + name + "! \n");
        System.out.println("Êtes-vous majeur ? (Vous pouvez rentrer votre âge, notre robot s'occupera du reste)");
        int age = sc.nextInt();
        while (age <= 0 || age > 100) {
            System.out.println("Veuillez saisir un âge correct.\nSi la saisie est incorrecte, il est impossible de poursuivre le programme. (CTRL+C pour quitter) \n");
            age = sc.nextInt();
            sc.nextLine();
        }
        if (age >= 18) {
            if (age === 100) {
                System.out.println("" + name + " est centenaire. Il a " + age + " ans !!!\n");
            } else {
                System.out.println("" + name + " est majeur. Il a " + age + " ans \n");
            }
        } else {
            System.out.println(" " + name + " n'est pas majeur" + "\n");
        }
        System.out.println("Juste pour être sûr... Êtes-vous vraiment majeur ? O/N ");
        String rep = sc.next();
        sc.nextLine();
        while ((!(rep.equals("O"))) && (!(rep.equals("N")))) {
            System.out.println("Veuillez saisir O pour Oui ou N pour non. Si la saisie est incorrecte, il est impossible de poursuivre le programme. (CTRL+C pour quitter) \n");
            rep = sc.next();
            sc.nextLine();
        }
        if ((rep.equals("O"))) {
            if (age < 18) {
                System.out.println("" + name + " est un menteur !! Il n'est pas majeur :( \n");
            } else {
                System.out.println("" + name + " est en effet majeur. \n");
            }
        } else if (rep.equals("N")) {
            if (age > 18) {
                System.out.println("" + name + " a oublié qu'il était majeur ! La viellesse sûrement... \n");
            } else {
                System.out.println("" + name + " n'est pas majeur ni un menteur !\n");
            }
        }
        
        System.out.println("Le programme s'est déroulé avec succès.\n");
    }
}</div>
                <div class="terminal" id="terminal"></div>
                <input type="text" id="userInput" class="terminal-input" placeholder="Entrez votre réponse ici...">
                <div class="terminal-controls">
                    <button class="execute-button" onclick="executeCode()">Exécuter</button>
                    <button class="clear-button" onclick="clearTerminal()">Effacer le terminal</button>
                </div>
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
            
            window.executeCode = function() {
                terminal.innerHTML = '';
                currentStep = 0;
                userData = {
                    name: '',
                    age: 0,
                    confirmation: ''
                };
                
                terminal.innerHTML += `<span class="command">> Compilation et exécution de majeur_projet.java...</span><br>`;
                terminal.innerHTML += `<span class="output">Bonjour et bienvenue sur mon programme ! Il permet de vérifier si l'utilisateur est majeur ou non.\n</span><br>`;
                terminal.innerHTML += `<span class="output">Veuillez entrer votre prénom :</span><br>`;
                
                userInput.style.display = 'block';
                userInput.focus();
                waitingForInput = true;
                terminal.scrollTop = terminal.scrollHeight;
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

        .project-card {
            background-color: #2c3e50; /* Couleur de fond */
            color: white; /* Couleur du texte */
            padding: 15px; /* Espacement interne */
            border-radius: 8px; /* Coins arrondis */
            margin-bottom: 20px; /* Espacement entre les cartes */
            width: 250px; /* Largeur fixe */
            height: auto; /* Hauteur automatique */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Ombre */
        }

        .projects-section {
            display: flex;
            flex-wrap: wrap; /* Permet aux cartes de passer à la ligne si l'espace est insuffisant */
            gap: 20px; /* Espace entre les cartes */
        }

        .project-card {
            background-color: #2c3e50; /* Couleur de fond */
            color: white; /* Couleur du texte */
            padding: 15px; /* Espacement interne */
            border-radius: 8px; /* Coins arrondis */
            width: 250px; /* Largeur fixe */
            height: auto; /* Hauteur automatique */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Ombre */
        }
        </style>
    
        <div class="projects-section" style="margin-top: 50px;">
            <h2 style="color: yellow; width: 100%;">Mes Projets</h2>
            <div class="project-card">
                <h3>Filius/Cisco Packet Tracer</h3>
                <p>Mise en place d'un réseau sur Filius et Cisco Packet Tracer.</p>
                <a href="https://github.com/adriendemange/DEMANGE/tree/main/B1_RESEAU/" target="_blank">Voir le projet</a>
            </div>
            <div class="project-card">
                <h3>ZooTickoon</h3>
                <p>Mise en place d'un site web à propos d'un Zoo.</p>
                <a href="https://github.com/adriendemange/DEMANGE/tree/main/ZooTickoon" target="_blank">Voir le projet</a>
            </div>
            <div class="project-card">
                <h3>TinyCar</h3>
                <p>Programmation en JAVA / Python permettant de gérer un panier d'achat.</p>
                <a href="https://github.com/adriendemange/DEMANGE/tree/main/JAVA/TinyCar/TinyCar/src/fr/hecten" target="_blank">Voir le projet</a>
            </div>
            <div class="project-card">
                <h3>Système Windows : Droits, fichiers, ...</h3>
                <p>Mise en place d'un portail d'authentification pour accéder à une page web.</p>
                <a href="https://github.com/adriendemange/DEMANGE/tree/main/SYSTEME_T" target="_blank">Voir le projet</a>
            </div>
            <div class="project-card">
                <h3>Code source du PortFolio </h3>
                <p>Programmation en HTML / CSS de ce PortFolio puis mise en ligne avec AlwaysData.</p>
                <a href="https://github.com/adriendemange/DEMANGE/tree/main/Portfolio" target="_blank">Voir le projet</a>
            </div>
            <div class="project-card">
                <h3>Publication du PortFolio avec AlwaysData</h3>
                <p>Configuration d'un serveur afin d'héberger notre site Web.</p>
                <a href="https://github.com/adriendemange/DEMANGE/tree/main/AP" target="_blank">Voir le projet</a>
                
            </div>
        </div>
    </body>
</html>
