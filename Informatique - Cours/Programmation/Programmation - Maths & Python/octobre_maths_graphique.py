import numpy as np
import matplotlib.pyplot as plt

def heaviside(t):
        return np.heaviside(t, 1)
def rect(t) :
        return np.where(np.abs(t) <= 0.5, 1, 0)
t = np.linspace(-2, 2, 400)


plt.plot(t, heaviside(t), label='Heaviside u(t)')
plt.plot(t, rect(t), label='Rect(T)', linestyle='dashed')
plt.axhline(0, color='black', linewidth=0.5)
plt.axvline(0, color='black', linewidth=0.5)
plt.grid(True)
plt.legend()
plt.show()
