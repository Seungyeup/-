import numpy as np
import matplotlib.pylab as plt


def sigmoid(x) :
    return 1/(1+np.exp(-x))
A = np.array([0.3, 0.7, 1.1])
print(sigmoid(A))

