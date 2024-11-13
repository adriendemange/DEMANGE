def tableau_caractere(tab):
    print("Fonction Tableau : ")
    for i in range(5):
        print("\nSaisir Nom de la case n°", +i , "\n")
        tab[i] = (input())
def tableau_int(tab):
    print("Fonction Tableau : ")
    for i in range(5):
        print("\nSaisir Prix HT du produit de la case n°", +i, "\n")
        tab[i] = int(input())
def lecture(tab1, tab2) : 
    for i in range(5):
        print(tab1[i], " / Prix HT de ce produit ", tab2[i], "€")
def tableau_invente_saisie(tab1, tab2):
    print("Fonction avec le tableau inventé : ")
    for i in range(5):
        print("\nSaisir Prix HT du produit de la case n°", +i, "avec le nom :", tab1[i] ,"\n")
        tab2[i] = int(input())
def tableau_caractere_panier(tab, n):
    print("Fonction Tableau : ")
    for i in range(n):
        print("\nSaisir Nom de la case n°", +i , "\n")
        tab[i] = (input())
def tableau_int_panier(tab, n):
    print("Fonction Tableau : ")
    for i in range(n):
        print("\nSaisir Prix HT du produit de la case n°", +i, "\n")
        tab[i] = int(input())
def lecture_panier(tab1, tab2, n) : 
    somme_totale = 0
    reference_min = 0
    reference_max = 0
    moyenne = 0
    for i in range(n):
        print(tab1[i], " / Prix HT de ce produit ", tab2[i], "€")
        somme_totale = somme_totale + tab2[i]
        reference_min = tab2[0]
        if tab2[i] < reference_min :
            reference_min = tab2[i]
        reference_max = tab2[0]
        if tab2[i] > reference_max :
            reference_max = tab2[i]  
    moyenne = ( somme_totale / n ) 
    print("La somme totale de votre panier est de : ", somme_totale, "€ \n")
    print("Le prix maximum de votre panier est de : ", reference_max, "€ \n")
    print("Le prix minimum de votre panier est de : ", reference_min, "€ \n")
    print("Le prix moyen de votre panier est de : ", moyenne, "€ \n")
tab = [0] * 5  #Nom 
tab2 = [0] * 5   #Prix HT 
tab_invente = ["Ecran", "Souris", "Clavier", "Lunettes", "Chargeur"]
#tableau_caractere(tab)
#tableau_int(tab2)
#print("\nLecture des 2 tableaux : \n")
#lecture(tab, tab2)
#tableau_invente_saisie(tab_invente, tab2)
#lecture(tab_invente, tab2)

n = int(input("De quelle taille sera votre panier (Combien de produits) ?"))

panier_nom = [0] * n 
panier_prix = [0] * n
tableau_caractere_panier(panier_nom, n)
tableau_int_panier(panier_prix, n)
print("\nLecture des 2 tableaux : \n")
lecture_panier(panier_nom , panier_prix, n)


