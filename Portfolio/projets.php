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
        <h2 class="description_projet_1">Red Team OSINT : </h2>
        <div class="description_projet_1_p" style="margin-bottom: 30px; margin-top: 20px;">
            <p class="blue" style="margin-bottom: 5px;"> Recherche d'informations sensibles sur Hackaday </p>
            <p class="blue" style="max-width: 700px; word-wrap: break-word; margin-bottom: 20px;"> Utilisation de <b>SpiderFoot</b>, <b>WhoIs</b>, <b>Shodan</b>, <b>TheHarvester</b> </p>
        </div>
        <a href="https://github.com/adriendemange/DEMANGE/tree/main/CYBERSECURITE_FANGNON" >
            <img src="Img/projet_osint.png" width="700" alt="Projet OSINT" class="positionned-image-osint" style="border-radius: 10px;">
        </a>

       

    
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
    
    </body>
</html>
