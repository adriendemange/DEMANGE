import numpy as np
import matplotlib.pyplot as plt

# Générer les données pour la courbe
x = np.linspace(-10, 10, 500)  # Génère 500 points entre -10 et 10
y = np.arctan(x)  # Appliquer la fonction arctan à chaque point

# Tracer la courbe
plt.figure(figsize=(10, 6))
plt.plot(x, y, label=r'$\arctan(x)$', color='green')

# Ajouter des titres et légendes
plt.title('Courbe de la fonction $\mathrm{arctan}(x)$')
plt.xlabel('x')
plt.ylabel('$\mathrm{arctan}(x)$')
plt.grid(True)
plt.legend()
plt.savefig('arctan_curve.png')
plt.show()
