def tableau(tab):
    print("Fonction Tableau : ")
    for i in range(10):
        print("\nSaisir case du tableau\n")
        tab[i] = int(input())
    
def lecture(tab) : 
    print("\nLecture du tableau : \n")
    for i in range(10):
        print("Case", i+1, ":", tab[i])
def negatif(tab) : 
    print("\nLecture du tableau des valeurs négatives : \n")
    for i in range(10):
        if tab[i] < 0 :
            print("Case", i+1, ":", tab[i])
def last_to_one(tab) :
    print("\nLecture du tableau de la dernière vers la première case : \n")
    for i in range(9, -1, -1) :
        print("Case", i+1, ":", tab[i])

tab = [0] * 10     
tableau(tab)
lecture(tab)
negatif(tab)
last_to_one(tab)
print("\nFIN DU PROGRAMME\n")