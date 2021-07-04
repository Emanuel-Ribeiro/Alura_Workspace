#include <stdio.h>
#include <stdlib.h>

char** mapa;
int linhas;
int colunas;

int main()
{
  FILE* f; //cria o ponteiro que vai indicar o local do arquivo
  f = fopen("mapa.txt", "r"); //abre o arquivo em modo de leitura

  if(f == 0) //se f retornar falso entao o arquivo nao foi aberto
  {
    printf("Erro na leitura do mapa \n");
    exit(1);
  }

  fscanf(f, "%d %d", &linhas, &colunas); //le parte do arquivo
  printf("linhas %d colunas %d\n", linhas, colunas);

  mapa = malloc(sizeof(char*) * linhas);

  for (int i = 0; i < linhas; i++)
  {
    mapa[i] = malloc(sizeof(char) * (colunas + 1));
  }

  // int** v = malloc(sizeof(int) * 50); //alocando memoria dinamicamente
  
  // for (int i = 0; i < 5; i++)
  // {
  //   v[i] = malloc(sizeof(int) * 10);
  // }

  // v[0][0] = 10; //aloca o numero 10 no ponteiro
  // v[1][2] = 12; //aloca o numero 12 no ponteiro

  // printf("inteiro alocado %d %d\n", v[0][0], v[1][0]);

  // for(int i; i < 5; i++)
  // {
  //   free(v[i]);
  // }

  // free(v); //liberando memoria alocada dinamicamente

  for(int i = 0; i < 5; i++) //enquanto i menor que 5 leia o mapa na posiçao i
  {
    fscanf(f, "%s", mapa[i]); //le o mapa na posiçao i
  }

  for(int i = 0; i < 5; i++) //enquanto i menor que 5 leia o mapa na posiçao i
  {
    printf("%s\n", mapa[i]); //imprime o mapa na posiçao i
  }

  fclose(f); //fecha o arquivo

  for (int i = 0; i < linhas; i++)
  {
    free(mapa[i]);
  }

  free(mapa);
}