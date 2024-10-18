from random import choice
from time import sleep
cores = {'limpa': '\033[m', 
         'amarelo': '\033[33m',
         'azul': '\033[34m', 
         'vermelho': '\033[31m',
         'ciano': '\033[36m',
         'verde': '\033[32m'
         }


## MENU
print('{}-={}'.format(cores['amarelo'], cores['limpa']) * 20)
print('{}JOKENPO{}'.format(cores['azul'], cores['limpa']))


## JOKENPO
print('{}-={}'.format(cores['amarelo'], cores['limpa']) * 20)
print('{}O computador vai escolher uma jogada aleatória, faça a sua:{}'.format(cores['verde'], cores['limpa']))
jogador = str(input('{}PEDRA\nPAPEL\nTESOURA\n:{} '.format(cores['ciano'], cores['limpa'])).split()[0].upper())
print('{}-={}'.format(cores['amarelo'], cores['limpa']) * 20)
print('{}JO'.format(cores['azul']))
sleep(1)
print('KEN')
sleep(1)
print('PO{}'.format(cores['limpa']))
      

print('{}-={}'.format(cores['amarelo'],cores['limpa'])*20)

jogadas = ["PEDRA", "PAPEL", "TESOURA"]

## Escolha do computador
computador = choice(jogadas)

if 'PEDRA' in jogador:
    if 'PEDRA' in computador:
        print('{}EMPATE! EU ESCOLHI {} {}'.format(cores['amarelo'], computador, cores['limpa']))
    elif 'PAPEL' in computador:
        print('{}PERDEU! EU ESCOLHI {} {}'.format(cores['vermelho'], computador, cores['limpa']))
    elif 'TESOURA' in computador:
        print('{}GANHOU! EU ESCOLHI {} {}'.format(cores['verde'], computador, cores['limpa']))
elif 'PAPEL' in jogador:
    if 'PEDRA' in computador:
        print('{}GANHOU! EU ESCOLHI {} {}'.format(cores['verde'], computador, cores['limpa']))
    elif 'PAPEL' in computador:
        print('{}EMPATE! EU ESCOLHI {} {}'.format(cores['amarelo'], computador, cores['limpa']))
    elif 'TESOURA' in computador:
        print('{}PERDEU! EU ESCOLHI {} {}'.format(cores['vermelho'], computador, cores['limpa']))
elif 'TESOURA' in jogador:
    if 'PEDRA' in computador:
        print('{}PERDEU! EU ESCOLHI {} {}'.format(cores['vermelho'], computador, cores['limpa']))
    elif 'PAPEL' in computador:
        print('{}GANHOU! EU ESCOLHI {} {}'.format(cores['verde'], computador, cores['limpa']))
    elif 'TESOURA' in computador:
        print('{}EMPATE! EU ESCOLHI {} {}'.format(cores['amarelo'], computador, cores['limpa']))
else:
    print('{}JOGADA INVALIDA!{}'.format(cores['vermelho'], cores['limpa']))