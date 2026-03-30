import numpy as np
import matplotlib.pyplot as plt

# Paramètres de la fibre
P0 = 1.0  # Puissance initiale (W)
alpha1 = 0.2  # Coefficient d'atténuation 1 (dB/km)
alpha2 = 0.1  # Coefficient d'atténuation 2 (dB/km)
distances = np.linspace(0, 100, 500)  # Distance en km

# Calcul de l'atténuation pour les deux coefficients
attenuation1 = P0 * 10 ** (-alpha1 * distances / 10)
attenuation2 = P0 * 10 ** (-alpha2 * distances / 10)

# Tracé des atténuations
plt.figure(figsize=(10, 6))
plt.plot(distances, attenuation1, label=r'$P(z) = P_0 \cdot 10^{-\alpha_1 z / 10}$', color='blue')
plt.plot(distances, attenuation2, label=r'$P(z) = P_0 \cdot 10^{-\alpha_2 z / 10}$', color='red')

# Ajout des titres et légendes
plt.title('Atténuation de la puissance optique dans une fibre optique')
plt.xlabel('Distance (km)')
plt.ylabel('Puissance (W)')
plt.grid(True)
plt.legend()
plt.savefig('attenuation_fibre_double.png')
plt.show()
