import sympy as sp

def interest (p, r, t):
    return p * (1 + r / 100) ** t

#print("RESULTAT :",interest(3000, 3, 5))


def npv(r,cashFlows):
    total = 0
    for i in range(len(cashFlows)):
        total += cashFlows[i] / (1 + (r/100)) ** i
        print("total anneés "+str(i)+":",'{:,}'.format((round(total,2))))
    
    return total

annesInv = input("Entrez le nombre d'années d'investissement : ")
annesInv = int(annesInv)

invInit = input("Entrez le montant initial de l'investissement : ")
invInit = int(invInit)

cashFlow = [-invInit]

for i in range(annesInv):
    revenu = input("Entrez le revenu annuel : ")
    revenu = int(revenu)
    cashFlow.append(revenu)


taux = input("Entrez le taux d'actualisation : ")
taux = float(taux)




print("NPV :",'{:,}'.format(round(npv(taux,cashFlow),2)))


# 310 k€

# nb anne inv| par année unit | inv init revenu par ans  invest et revenue et le taux 