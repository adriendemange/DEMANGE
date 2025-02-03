Adrien DEMANGE
20/01/2025
Mission AlwaysData


AlwaysData : 
![image](https://github.com/user-attachments/assets/d04e1659-43af-4583-b2cc-c54bd84b973f)


Alwaysdata propose des services d'hébergement web, de gestion de bases de données, d'enregistrement de noms de domaine et de messagerie, ainsi que des outils de développement et de sécurité. Leur offre est adaptée aux besoins des développeurs et des entreprises, avec une grande flexibilité et un support technique dédié.


Pour déployer un site web utilisant HTML, CSS, JS et PHP, il est nécessaire d'avoir un service d'hébergement web avec prise en charge de PHP, un serveur de bases de données (comme MySQL), un nom de domaine et des outils de gestion de fichiers pour le transfert des contenus. Des certificats SSL pour la sécurité et un serveur de messagerie peuvent aussi être requis selon les besoins.

Le nom de domaine choisi est adriendem.alwaysdata.net

Etape 1 : Activer SSH
Pour ajouter les fichiers de votre site web à votre espace, il faut activer votre accès ssh.

Expliquer l'intérêt du protocole SSH. Sur quel port est-il actif par défaut ?

Le protocole SSH permet de sécuriser les connexions distantes en chiffrant les échanges entre un client et un serveur, garantissant ainsi la confidentialité et l'intégrité des données. Par défaut, il fonctionne sur le port 22.

Quel autre protocole semble avoir les mêmes fonctionnalités ? Que fait SSH qui n'est pas possible avec le 2e ?

Le protocole Telnet semble offrir des fonctionnalités similaires à SSH, permettant une connexion distante à un serveur. Cependant, contrairement à SSH, Telnet n'implémente pas de chiffrement, ce qui expose les données échangées à des risques d'interception. SSH offre ainsi un niveau de sécurité supérieur en chiffrant les communications, ce qui n'est pas possible avec Telnet.

Activer un accès au serveur via ce protocole. Quelles étapes sont nécessaires ?
Se connecter sur AlwaysData -> Accès Distant -> SSH -> Ouvrir avec le l'interface Web ou se connecter à l'aide du terminal avec une commande spéciale.
ssh adriendem@ssh-adriendem.alwaysdata.net

Se connecter à votre espace dédié sur le serveur via ce protocole. Quelle est la ligne de commande nécessaire pour y arriver ?
ssh adriendem@ssh-adriendem.alwaysdata.net (mdp à rentrer)

Dans quel repertoire faut-il déposer vos fichiers du site si vous voulez le voir en ligne ? (chemin complet sur le serveur)
Il faut déposer les fichier dans le répertoire www.
Le chemin complet est : /home/adriendem/www



Etape 2 : Copier notre contenu sur Alwaysdata
Ajouter les fichiers du site sauvegardé en local au répertoire distant dédié.

Quel est le chemin local absolu pour accéder à votre site ?
Le chemin est /home/adriendem/www/PortFolio/

Quel est le chemin absolu du repertoire dédié sur le serveur Alwaysdata ?
Le chemin est /home/adriendem/www

Les commandes scp et rsync peuvent être d'une grande aide à cette étape. Pourquoi ?
Les commandes scp (secure copy) et rsync sont toutes deux utilisées pour transférer des fichiers entre un ordinateur local et un serveur distant, ce qui peut être très utile lors du déploiement ou de la mise à jour d'un site web sur un hébergement comme AlwaysData. Ces commandes permettent de déplacer facilement les fichiers depuis une machine locale vers le serveur.
Quelle est la différence entre les deux commandes ?
scp est utile pour des transferts simples et rapides, tandis que rsync est plus adapté pour des transferts réguliers ou des synchronisations de répertoires, avec une gestion plus efficace des changements de fichiers.


Quelle est la commande complète pour ajouter les fichiers sauvegardés en local sur le serveur dédié ?
Comment vérifier que l'ajout a bien été effectué ? Détailler la procédure et les résultats attendus.
rsync -avz /chemin/vers/fichiers/ utilisateur@serveur:/chemin/vers/le/dossier/cible
Pour vérifier l'ajout il faut se connecter en ssh au serveur et vérifier si les fichiers sont présent dans le dossier cible :
ssh utilisateur@serveur
cd /chemin/vers/le/dossier/cible
ls -l


Quelle URL permet de voir votre site en ligne ?
https://adriendem.alwaysdata.net/PortFolio/


Etape 3 - Gestion des accès à un dossier privé sur un serveur web
Chercher une solution simple pour bloquer l'accès au dossier de votre portefolio le temps de le finir (accès via un secret) Expliciter la mise en oeuvre de la méthode et partager le secret (pour le prof ;-)).
Il faut créer un fichiere .htacess ainsi qu'un fichier .htpasswd à placer dans le répertoire sur le serveur.

Etape 4 - Gestion de paires de clés privée et publique
On souhaiterait se connecter avec une paire de clés privée/public au service SSH accessible sur AlwaysData.

Commande pour générer une clé SSH : ssh-copy-id -i ~/.ssh/id_rsa.pub <username>@<ipaddress>


Voici des liens pour vous y aider :

https://www.remipoignon.fr/authentification-ssh-par-cle-privee/

Expliciter dans vos mots ce principe d'authentification

Notez les avantages à se connecter avec une paire de clé privée et publique vs se connecter avec mot de passe
Il n'y a pas besoin de re-saisir le mdp à chaque connexion, on peut configurer une phrase si besoin à rentrer 

Noter les étapes nécessaires pour y parvenir
Il faut générer une clé publique et une clé privée depuis notre machine. Il faut ensuite envoyer la clé publique sur le serveur hébergant le site, et stocker notre clé privé dans notre dossier .ssh
Il faut ensuite configurer le serveur AlwaysData pour qu'il accepte les clés SSH en connexion.
Notez les étapes pour en tester le bon fonctionnement
![image](https://github.com/user-attachments/assets/5afcbb64-5732-4b65-a62d-c7f47f8cffec)
![image](https://github.com/user-attachments/assets/cd77d23e-a86c-43d1-952b-4288bbc9bbf7)
![image](https://github.com/user-attachments/assets/25c89856-0317-4861-abe1-e5799bb712d8)
![image](https://github.com/user-attachments/assets/9ff0f3a6-7b8e-48b6-aa31-1e0cc78690a0)


![image](https://github.com/user-attachments/assets/bcea4a2d-def2-47cc-a61f-33dd3c000f1e)

Nous n'avons pas les droits avec AlwaysData pour modifier directement dans le dossier ~/ssh/sshd_config/ afin de désactiver l'authentification par mdp 


