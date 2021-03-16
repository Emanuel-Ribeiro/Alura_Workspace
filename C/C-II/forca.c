#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>
#include "forca.h"

char palavraSecreta[TAMANHO_PALAVRA];
char chutes[26];
int chutesDados = 0;

int main() 
{
  abertura();
  escolhePalavra();

  do 
  {
    desenhaForca();
    capturaChute();
  } while (!ganhou() && !enforcou());

  if(ganhou())
  {
    printf("\nParabens voce ganhou!\n");
    printf("A palavra era **%s**\n\n", palavraSecreta);
  }

  else
  {
    printf("\nVoce falhou miseravelmente\n");
    printf("A palavra era **%s**\n\n", palavraSecreta);
  }

}

void abertura() 
{
  printf("/****************/\n");
  printf("/ Jogo de Forca */\n");
  printf("/****************/\n\n");
}

void capturaChute() 
{
    char chute;
    printf("Qual letra? ");
    scanf(" %c", &chute);

    chutes[chutesDados] = chute;
    chutesDados++;
}

int jaChutou(char letra) 
{
  int achou = 0;
  for(int j = 0; j < chutesDados; j++) 
  {
    if(chutes[j] == letra) 
    {
      achou = 1;
      break;
    }
  }
  return achou;
}

void desenhaForca()
{
  int erros = chutesErrados();

    printf("  _______       \n");
    printf(" |/      |      \n");
    printf(" |      %c%c%c  \n", (erros>=1?'(':' '), (erros>=1?'_':' '), (erros>=1?')':' ')); //se erros for maior ou igual a 1 entao imprima "(" se nao imprima " "
    printf(" |      %c%c%c  \n", (erros>=3?'\\':' '), (erros>=2?'|':' '), (erros>=3?'/': ' '));
    printf(" |       %c     \n", (erros>=2?'|':' '));
    printf(" |      %c %c   \n", (erros>=4?'/':' '), (erros>=4?'\\':' '));
    printf(" |              \n");
    printf("_|___           \n");
    printf("\n\n");

  printf("Voce ja deu %d chutes\n", chutesDados);

  for(int i = 0; i < strlen(palavraSecreta); i++) 
  {
    if(jaChutou(palavraSecreta[i])) 
    {
      printf("%c ", palavraSecreta[i]);
    } 

    else 
    {
      printf("_ ");
    }
  }
  printf("\n");
}

void escolhePalavra() 
{
  FILE* f;

  f = fopen("palavras.txt", "r"); //abre o arquivo no modo de leitura ("r" = leitura)
  if(f == 0)
  {
    printf("Desculpe, banco de dados nao disponivel !\n\n");
    exit(1);
  }

  int qtdpalavra;
  fscanf(f, "%d", &qtdpalavra); //"descobre" a quantidade de palavras do meu arquivo (pois a primeira linha do meu arquivo é a quantidade de palavras existentes)

  srand(time(0));
  int randomico = rand() % qtdpalavra; //calcula um numero randomico

  for(int i = 0; i<= randomico; i++)
  {
    fscanf(f, "%s", &palavraSecreta);
  }

  fclose(f);
}

int chutesErrados()
{
  int erros = 0;
  for(int i = 0; i < chutesDados; i++)
  {
    int existe = 0;
    for(int j = 0; j < strlen(palavraSecreta); j++)
    {
      if(chutes[i] == palavraSecreta[j])
      {
        existe = 1;
        break;
      }
    }
    if(!existe)
    {
      erros++;
    }
  }
  return erros;
}

int enforcou()
{
  return chutesErrados() >= 5;
}

int ganhou()
{
  for(int i = 0; i < strlen(palavraSecreta); i++)
  {
    if(!jaChutou(palavraSecreta[i]))
    {
      return 0;
    }
  }
  return 1;
}

void adicionaPalavra()
{
  char quer;

  printf("Voce deseja adicionar uma nova palavra no jogo? (S/N)");
  scanf(" %c", &quer);

  if(quer == 'S' || quer == 's')
  {
    char novaPalavra[TAMANHO_PALAVRA];

    printf("Qual a nova palavra?");
    scanf("%s", &novaPalavra);

    FILE* f;

    f = fopen("palavras.txt", "r+"); //o r+ significa leitura e escrita
    if(f == 0)
    {
      printf("Desculpe, banco de dados nao disponivel !\n\n");
      exit(1);
    }

    int qtd;
    fscanf(f, "%d", &qtd);
    qtd++;

    fseek(f, 0, SEEK_SET);
    fprintf(f, "%d", qtd);

    fseek(f, 0, SEEK_END);
    fprintf(f, "\n%s", novaPalavra);

    fclose(f);
  }
}