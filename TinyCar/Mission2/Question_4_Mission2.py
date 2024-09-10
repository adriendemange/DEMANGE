   #Adrien DEMANGE
    #3 Septembre 2024
    #Projet Tiny Car Python
def calculprix() :
    rep=input("Voulez-vous rechercher un produit spécifique O/N: ")
    if rep=="O" :
        marque=input("Saisir la marque :")
        modele=input("Saisir le modèle:")
        if marque=="asus" and modele=="2024" :
            print("Le prix à payer pour un produit asus de 2024 est de 550 euros.")
            print("Fin du programme")
        else :
            print("Vous n'avez pas tapé correctement")
    if rep=="N" :        
        carte=int(input("1- Sans carte, 2- avec carte gold et 3- avec carte platinium"))
        #Avec la carte platinium 15% de réduction et avec la carte gold 20% ou 30% si la voiture est électrique         
        prixht=int(input("Saisir Prix Hors Taxe:"))
        #tva=float(input("Saisir la TVA:"))
        qte=int(input("Saisir la quantité de produits:"))
        if prixht>20000 :
            rep2=input("Votre véhicule est-il électrique ? O/N")
            if rep2=="O" :
                if carte==3 : # carte platinium
                    print("Vous avez la carte platinium !")
                    ttc=prixht*(0.2+1)*qte          #TVA de base à 0.2 pour le prix < 20 0000
                    ttc=ttc -(ttc*(15/100))
                    print("Voici le TTC avec TVA à 0.2 pourcent et la remise de 15 pourcent pour la carte platinium:", ttc)
                if carte==2 : # carte gold
                    print("Vous avez la carte gold !")
                    ttc=prixht*(0.2+1)*qte          #TVA de base à 0.2 pour le prix < 20 0000
                    ttc=ttc -(ttc*(30/100))
                    print("Voici le TTC avec TVA à 0.2 pourcent et la remise de 30 pourcent pour la carte gold:", ttc)    
                else :
                    print("Bravo vous avez le droit à une remise de 10 pourcent car votre prix est supérieur à 20 000.")
                    ttc=prixht*(0.05+1)*qte
                    ttc=ttc -(ttc*(10/100))
                    print("Voici le TTC avec TVA à 5 pourcent car votre véhicule est électrique et la remise de 10 pourcent:", ttc)
                
            if rep2=="N" :
                if carte==3 : # carte platinium
                    print("Vous avez la carte platinium !")
                    ttc=prixht*(0.2+1)*qte          #TVA de base à 0.2 pour le prix < 20 0000
                    ttc=ttc -(ttc*(15/100))
                    print("Voici le TTC avec TVA à 0.2 pourcent et la remise de 15 pourcent pour la carte platinium et véhicule non électrique:", ttc)
                    
                if carte==2 : # carte gold
                    print("Vous avez la carte gold !")
                    ttc=prixht*(0.2+1)*qte          #TVA de base à 0.2 pour le prix < 20 0000
                    ttc=ttc -(ttc*(20/100))
                    print("Voici le TTC avec TVA à 0.2 pourcent et la remise de 20 pourcent pour la carte gold et le véhicule non électrique:", ttc)
                else :
                    ttc=prixht*(0.2+1)*qte
                    ttc=ttc -(ttc*(10/100))
                    print("Voici le TTC avec TVA à 20 pourcent car votre véhicule n'est pas électrique:", ttc)
        else :
            print("Malheureusement vous n'avez pas le droit à une remise ou la saisie est incorrecte...")

        password=input("Faites-vous parti du groupe ?Si non, tapez N. \n Si oui veuillez saisir votre mot de passe :" )
        if password=="Padawan" :
            print("Bravo vous êtes rentrés dans l'application !")
            exit
        else :
            print("Dommage vous ne faîtes pas parti du groupe... Bonne continuation !")
            exit

calculprix()
condi=input("Voulez-vous effectuer un nouveau calcul ? O/N ")
while condi=="O" :
    calculprix()
    condi=input("Voulez-vous effectuer un nouveau calcul ? O/N ")
else :
    print("Au revoir !")
