import forca
import adivinhacao

def escolhe_jogo():

  print("*********************************")
  print("       Escolha o seu jogo!       ")
  print("*********************************")

  print("[1] forca, [2] adivinhacao")

  jogo = int(input())

  if(jogo == 1):
    print("Jogando forca")
    forca.jogar_forca
  elif(jogo == 2):
    print("Jogando adivinhacao")
    adivinhacao.jogar_adivinhacao


if(__name__ == "__main__"):
  escolhe_jogo()