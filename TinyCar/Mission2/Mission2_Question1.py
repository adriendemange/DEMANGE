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
        exit()
prixht=int(input("Saisir Prix Hors Taxe:"))
tva=float(input("Saisir la TVA:"))
qte=int(input("Saisir la quantité de produits:"))
ttc=prixht*(tva+1)*qte
print("Voici le TTC :", ttc)

if prixht>=20000 :
    remise=int(input("Bravo vous avez le droit à une remise. Votre véhicule est-il électrique  "))
    ttc=ttc - (ttc*(remise/100))
    print("Voici le TTC avec remise:", ttc)
    exit()
print("Malheureusement vous n'avez pas le droit à une remise...")