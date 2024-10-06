Adrien DEMANGE 
30-09-2024
Mission 1 Réseau Filius 


Etape 1 : Le masque de sous-réseau est 255.255.0.0 (CIDR=16)

Le sous réseau de l'adresse IP est 198.168 (car 16 bits sont consacrés au réseau). Cela signifie que les machines sont reliés au même réseau.

Il faut un équipement (type switch) pour que les machines puissent communiquer entre elles, et que les machines soient reliés au même réseau. Ici, l'adresse de sous-réseau est bien la même pour les trois machines.

Dans les conditions physiques présentées ci-dessus, les machines ne peuvent pas communiquer entre elles car il n'y a pas d'appareil informatique permettant de relier les machines et transmettre des "paquets" entre elles. Un parc informatique ne peut pas communiquer sans appareil spécifique pour les relier.

La commande "ipconfig" sur Windows permet d'afficher la configuration IP.

La commande "ping" permet d'envoyer des "paquets" à une machine grâce à son adresse IP.

Etape 1 : 
1 - Le masque de sous-réseau est 255.255.0.0 (CIDR=16)
2 - Le sous réseau de l'adresse IP est 198.168 (car 16 bits sont consacrés au réseau). Les machines sont donc connectées sur le même réseau.
Il faut un équipement (type switch) pour que les machines puissent communiquer entre elles.
Non car il n'y a pas d'équipement pour assurer la communication
La commande "ipconfig" sur windows 
La commande ping permet d'envoyer des données à une machine grâce à l'adresse IP


Etape 2 :

Le switch a été ajouté et permet la communication de données entre les machines du même réseau. Avec les différentes adresses IP, le switch relie les machines entre elles en "mémorisant" où se trouvent les postes réseaux.

Un hub permet de concentrer des machines sur un même point et réalise des liaisons en étoile. Il génère beaucoup de traffic du fait qu'il utilise l'adresse de diffusion pour faire communiquer les machines.

Il faut changer l'adresse IP pour que chaque adresse IP soit unique. Dans le cas contraire, il va y avoir un problème dans les communications (envoie de données à deux machines).

On peut faire cela avec l'adresse de diffusion (adresse réservée).

Etape 3 :

La machine 4 appartient au sous réseau "192.169" qui est différent du sous réseau "192.168".

La machine "M4" n'est pas reliée au même réseau que les 3 autres machines, elle ne pourra donc pas communiquer avec celles-ci.

Il faut mettre la même adresse de sous-réseau sur la machine M2 pour communiquer avec M4.

Du fait que M2 n'a plus le même sous-réseau, elle ne peut plus communiquer avec M1 et M3.
