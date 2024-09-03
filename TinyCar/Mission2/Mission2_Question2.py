#Adrien DEMANGE
#3 Septembre 2024
#Projet Tiny Car Python

rep=input("Voulez-vous rechercher un produit spécifique O/N: ")
if rep=="O" :
    marque=input("Saisir la marque :")
    modele=input("Saisir le modèle:")
    if marque=="asus" and modele=="2024" :
        print("Le prix à payer pour un produit asus de 2024 est de 550 euros.")
        print("Fin du programme")
        
prixht=int(input("Saisir Prix Hors Taxe:"))
#tva=float(input("Saisir la TVA:"))
qte=int(input("Saisir la quantité de produits:"))


if prixht>20000 :
    rep2=input("Bravo vous avez le droit à une remise de 10 pourcent car votre prix est supérieur à 20 000. Votre véhicule est-il électrique ? O/N")
    if rep2=="O" :
        ttc=prixht*(0.05+1)*qte
        ttc=ttc -(ttc*(10/100))
        print("Voici le TTC avec TVA à 5 pourcent car votre véhicule est électrique et la remise de 10 pourcent:", ttc)
        
    else :
        ttc=prixht*(0.2+1)*qte
        ttc=ttc -(ttc*(10/100))
        print("Voici le TTC avec TVA à 20 pourcent car votre véhicule n'est pas électrique:", ttc)
else :
    print("Malheureusement vous n'avez pas le droit à une remise...")

password=input("Faites-vous parti du groupe ?Si non, tapez N. \n Si oui veuillez saisir votre mot de passe :" )
if password=="Padawan" :
    print("Bravo vous êtes rentrés dans l'application !")
    exit
else :
    print("Dommage vous ne faîtes pas parti du groupe... Bonne continuation !")
    exit