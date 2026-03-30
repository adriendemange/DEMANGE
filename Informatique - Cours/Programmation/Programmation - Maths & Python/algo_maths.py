def pgcd_iteratif(a, b):
    while b > 0:
        a, b = b, a % b
    return a
def pgcd_recursif(a, b):
    if b == 0:
        return a
    return pgcd_recursif(b, a % b)


print(pgcd_iteratif(385, 216))  
print(pgcd_recursif(0, 43))  

