def jogar_forca():

  print("*********************************")
  print("   Bem vindo ao jogo de Forca!   ")
  print("*********************************")

  palavra_secreta = "python"

  enforcou = False
  acertou  = False
  #enquanto nao enforcou e nao acertou
  #enquanto (True E True)
  while(not enforcou and not acertou):
    
    chute = input("Qual letra?\n")
    chute = chute.strip()

    index = 0

    for letra in palavra_secreta:
      if(chute.upper() == letra.upper()): 
        print(f"foi encontrada a letra {chute} na posicao {index}")
      index += 1

  print("Fim do jogo")

if(__name__ == "__main__"):
  jogar_forca()