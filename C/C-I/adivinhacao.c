#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main()
{
  printf("******************************************\n");
  printf("* Bem-vindo ao nosso jogo de adivinhacao *\n");
  printf("******************************************\n");

  int segundos = time(0);
  srand(segundos);

  int numeroGrande = rand();

  int chute;
  int tentativas = 1;
  double pontos = 1000;
  int numeroSecreto = numeroGrande % 100;

  while(1)
  {

    printf("Tentativa %d\n", tentativas);
    printf("Qual eh o seu chute?\n");
    scanf("%d", &chute);

    printf("seu chute foi: %d\n", chute);

    if(chute < 0)
    {
      printf("Voce nao pode chutar numeros negativos!\n");
      continue;
    }

    int acertou = (chute == numeroSecreto);
    int maior = (chute > numeroSecreto);

    if(acertou)
    {
      printf("Parabens voce acertou!\n");
      break;
    }

    else if(maior)
    {
      printf("Seu chute foi maior que o numero secreto\n");
    } 

    else
    {
      printf("Seu chute foi menor que o numero secreto\n");
    }

    tentativas += 1;

    double pontosPerdidos = abs(chute - numeroSecreto) / (double)2;

    pontos -= pontosPerdidos;
  }
  printf("Fim de jogo! \n");
  printf("Voce acertou em %d tentativas!\n", tentativas);
  printf("Total de pontos: %.2f\n", pontos);
}