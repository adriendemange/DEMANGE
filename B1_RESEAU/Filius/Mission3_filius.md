Adrien DEMANGE
28/10/2024
Mission 3 Filius 
(voir photo img/Mission3)

1 - Le réseau 1 est 192.168.1.0/24 et le réseau 2 est 172.12.0.0/16.

2 - Il faut mettre les 2 adresses IP sur le routeur. C'est-à-dire 192.168.1.1/24 pour le sous-réseau 1 et 172.12.0.1/16 pour le sous-réseau 2. Ensuite il faut mettre sur toutes les machines la passerelle, c'est-à-dire par quel équipement la machine va passer pour communiquer aux autres réseaux (Internet par exemple).


3. La commande ping permet de tester la connexion entre 2 machines connectés.



Etape 2 : 

1 - On trouve l'adresse MAC, le port attribué, la dernière mise à jour(voir photo img/Mission3)

2 - On nous affiche une adresse IP et une adresse MAC.
La commande arp (Address Resolution Protocol) est utilisée pour afficher ou manipuler la table ARP, qui est une table locale stockant les correspondances entre les adresses IP et les adresses MAC. On voit les adresses IP et adresses MAC des machines qui ont eu des échanges de packets avec la machine.



3 - Le chemin part de la machine faisant le ping, ici M1. Au début la requête part au switch puis au routeur pour aller vers M3 et M2 puis les prochains ping vont directement vers M2 en passant par le switch car le switch connaît les adresses IP des machines. Dans la table du switch R1 on voit les adresses MAC de M1 et M2 et l'heure à laquelle il y a eu des échanges. En faisant "arp" sur chaque machine on voit aussi les adresses IP et MAC de la machine avec laquelle on a ping.


Protocole ICMP -> Couche Internet 

Si on échange un nouveau ping entre M1 et M2 le switch a mémorisé la machine qui correspond à l'adresse IP de M2. Les échanges vont donc directement de M1 vers le Switch puis M2, sans passer par les autres machines du sous-réseau.

M3 / M6 : le premier ping envoie au Switch R1 puis au routeur puis à tout le réseau R2 pour trouver M6 / Le prochain ping partira directement de M3 pour aller au switch puis au routeur puis vers M6.

En faisant arp, on trouve seulement l'adresse IP du routeur mais pas de la machine appartenant à l'autre sous-réseau.
