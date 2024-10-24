Adrien DEMANGE
17 / 10 / 2024
FILIUS MISSION 2 : 

On s'intéressera aux 4 machines suivantes : M1,M2,M3 et M4

Quel est le CIDR de chaque machine ? Justifier.
Le CIDR est 255.255.0.0. On le sait en cliquant sur chaque machine et en regardant le masque (voir capture 01)

A quel sous-réseau IP appartient chacune de ces 4 machines ? Justifier.
M1 et M4 -> 10.10.0.0/16 / M2 -> 10.0.0.0/16 / M3 -> 10.0.0.0/16
On prend les 16 premiers bits qui correspondent au masque de sous-réseau, et on met à 0 ce qui reste à droite.

Combien de machines maximums peuvent accueillir chacun des sous-réseaux identifiés ?
(2^32-16) - 4 = 65532
On soustrait par 4 au lieu de 2 car il y a déjà 2 STA inscrites dans le réseau.

Quelles machines peuvent potentiellement communiquer entre elles ? Justifier.
M1 et M4 car elles appartiennent au même sous réseau.
M2 et M3 car elles appartiennent au même sous réseau.


Peuvent elles dans les conditions physiques présentées ci-dessus communiquer entre elles ? Justifier.
M1 et M4 peuvent communiquer entre elles car il y a le switch qui permet de faire la liaison. Pareil pour M2 et M3 qui peuvent communiquer entre elles.

Quelle est la commande complète qui permet à M1 de tester la liaison avec M2.
Sur le terminal M1 : ping 10.0.1.255

Etape 2 : 

Compléter la configuration des machines M5 et M6 pour permettre à M5 d'échanger avec M1 et permettre à M6 d'échanger avec M2.
M5 -> Changement adresse IP en 10.10.1.101/16 et le masque de sous-réseau en 255.255.0.0/16.
M6 -> Changement adresse IP en 10.0.1.254/16 et le masque de sous-réseau en 255.255.0.0/16.

Quelles sont les adresses IP possibles pour M5 et M6 ?
Pour M5 : De 10.10.0.1/16 jusqu'à 10.10.255.254/16 sauf l'adresse IP de M1 et M4 (65532 machines)
Pour M6 : De 10.0.0.1/16 jusqu'à 10.0.255.254/16 sauf l'adresse IP de M2 et M3 (65532 machines)

Combien de machines peut-on encore ajouter dans chaque sous-réseau ?
Pour le sous-réseau 10.10.0.0/16 on peut avoir 65 534 - 3 = 65 531 machines.
Pour le sous-réseau 10.0.0.0/16 on peut avoir 65 534 - 3 = 65 531 machines.

Si M6 veut envoyer un message à toutes les machines de son sous-réseau, quelle adresse IP peut-elle utiliser ?
L'adresse de diffusion qui est : 10.0.255.255.

Quel média d'interconnexion est nécessaire pour permettre à toutes les machines d'échanger des messages ?

Un routeur est nécessaire pour permettre aux machines de sous-réseaux différents de communiquer entre elles. Le switch permet les communications dans le même sous-réseau, mais un routeur est indispensable pour connecter plusieurs réseaux logiques.

Etape 3 : 

Ajouter un routeur à la configuration physique précedente.
Expliquer brièvement le fonctionnement d’un routeur.

Un routeur est un équipement réseau qui permet de relier plusieurs réseaux différents entre eux. Il transmet les paquets de données entre les réseaux en utilisant des passerelles et des tables de routage pour déterminer le meilleur chemin pour chaque paquet.

Compléter la configuration physique pour permettre aux différentes machines des différents réseaux logiques de communiquer.

Combien d’interfaces réseaux sont nécessaires ?
Il faut 2 ports pour connecter 2 switch au routeur.

Quelle adresse IP aura chaque interface ?
L'adresse IP de chaque interface est 192.168.0.10

Est-ce que toutes les machines peuvent maintenant communiquer entre elles ? Justifier.
Non il reste à configurer le routeur.

Quelle nouvelle configuration est nécessaire pour permettre aux machines de communiquer avec des machines appartenant à d’autres réseaux (M5 avec M6 par exemple)?
Il faut configurer le routage sur le routeur pour permettre la communication entre les sous-réseaux. Chaque machine doit également avoir une passerelle par défaut pointant vers l'interface du routeur qui dessert son réseau. 

