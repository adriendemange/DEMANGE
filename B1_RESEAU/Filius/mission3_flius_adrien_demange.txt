Adrien DEMANGE
28/10/2024
Mission 3 Filius 

1 - Le réseau 1 est 192.168.1.0/24 et le réseau 2 est 172.12.0.0/16.

2 - COnfigurer l'interface du routeur avec les adresses ip switch et les passerelles pour chaque machine !

Etape 2 : 

1 - On trouve le nom wifi du switch selectionné.

2 - On nous affiche une adresse IP et une adresse MAC. Mais l'adresse IP est 255.255.255.255 pour les deux machines et l'adresse MAC est FF:FF:FF:FF

3 - Le chemin part de la machine faisant le ping, ici M1. Au début la requête part au switch puis au routeur pour aller vers M3 et M2 puis les prochains ping vont directement vers M2 en passant par le switch car le switch connaît les adresses IP des machines.


Protocole ICMP -> Couche Internet 


M3 / M6 : le premier ping envoie à tout le réseau R1 puis au routeur puis à tout le réseau R2 pour trouver M6 / Le prochain ping partira directement de M3 pour aller au switch puis au routeur puis vers M6.

Le ping : protocole ARP couche Internet pour trouver l'adresse MAC 
Puis protocole ICMP pour ping et couche Internet 

la commande arp montre l'adresse IP rentrée ans l'interface du routeur avec une adresse MAC associée à celle-ci

