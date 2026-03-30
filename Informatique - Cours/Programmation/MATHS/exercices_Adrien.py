import numpy as np
def puissance(a) :
    if a < 10 :
        print(a**2)
    else :
            print(a**3)

def equation_second(a,b,c) :
    delta = b**2-4*a*c
    if delta > 0 :
        x1 = (-b + np.sqrt(delta) ) / 2*a
        x2 = (-b - np.sqrt(delta)) / 2*a
        print(x1)
        print(x2)
    if delta == 0 :
        x = -b/2*a
        print(x)
    if delta < 0 :
         print("Il n'y a pas de solution possible dans l'ensemble des Réels")    

def demande_nombre() :
    a = int(input("saisir a : "))
    while a > 20 or a < 10 :
        if a > 20 :
            print("Plus petit !")  

        if a < 10 :
            print("Plus grand !")

        print("Saisir valeur correcte")
        a = int(input())

    print("Bravo !\n")
def afficher_10_nombres() :
    a = int(input("Saisir la valeur de a : "))
    for i in range(a,a+11,1) :
        print(i)
def multiplication():
    a = int(input("Saisir la valeur de a :"))
    print("Voici la table de multiplication de ", a)
    for i in range(1,11,1) :
        print(a*i)
    print("----------------------------------------")    
    print("Table de multiplication de 1 à 10 :")
    a = 1
    for j in range (1,11,1) :
        for i in range(1,11,1) :
            print(a*i)
        a = a + 1
        print("////")
def exercice_3() :
    i = 1
    a = int(input("Saisir une valeur pour a : "))
    while i <= 10 :
        a = a + 1
        print(a)
        i = i + 1
def factorielle() :
    i = 0
    fact = 1
    a = int(input("Saisir une valeur pour a pour sa factorielle: "))
    while i < a :
        fact = fact * (i+1)
        i = i+1
        print(fact)

#demande_nombre()
#afficher_10_nombres()
#multiplication()
#exercice_3()
factorielle()
