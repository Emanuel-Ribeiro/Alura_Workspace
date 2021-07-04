package br.com.alura.algoritimos;

public class TestaOrdenacao 
{
  public static void main(String[] args) 
  {
    Produto produtos[] = 
    {
      new Produto("Lamborghini", 1000000),
      new Produto("Jeep", 46000),
      new Produto("Brasília", 16000),
      new Produto("Smart", 48000),
      new Produto("Fusca", 17000)
    };

    //selectionSort(produtos, produtos.length);
    insertionSort(produtos, produtos.length);

    for(Produto produto : produtos)
    {
      System.out.println(produto.getNome() + " custa " + produto.getPreco());
    }
  }

  public static int buscaMenorValor(Produto[] produtos, int inicio, int fim)
  {
    int maisBarato = inicio;
    int indiceAtual = 0;

    for(indiceAtual = inicio; indiceAtual <= fim; indiceAtual++)
    {
      if(produtos[indiceAtual].getPreco() < produtos[maisBarato].getPreco())
      {
        maisBarato = indiceAtual;
      }
    }
    return maisBarato;
  }

  // private static void selectionSort(Produto[] produtos, int qtdElementos) 
  // {
  //   for(int indiceAtual = 0; indiceAtual < qtdElementos - 1; indiceAtual++)
  //   {
  //     System.out.println("Estou na posiçao " + indiceAtual);

  //     int menorValor = buscaMenorValor(produtos, indiceAtual, qtdElementos -1);

  //     System.out.println("Trocando " + indiceAtual + " com o " + menorValor);

  //     Produto produtoAtual = produtos[indiceAtual];
  //     Produto produtoMenor = produtos[menorValor];

  //     System.out.println("Trocando " +produtoAtual.getNome() + " com o " + produtoMenor.getNome());

  //     produtos[indiceAtual] = produtoMenor;
  //     produtos[menorValor] = produtoAtual;
  //   }  
  // }

  private static void insertionSort(Produto[] produtos, int qtdElementos) 
  {
    for (int atual = 0; atual < qtdElementos; atual++)
    {
      int analise = atual;

      System.out.println("Estou na posiçao " + atual);

      while(analise > 0 && produtos[analise].getPreco() < produtos[analise - 1].getPreco())
      {
        System.out.println("Estou trocando " + analise + " com " + (analise - 1));

        Produto produtoAnalise = produtos[analise];
        Produto produtoAnaliseMenos1 = produtos[analise - 1];

        System.out.println("Estou trocando " + produtoAnalise.getNome() + " com " + produtoAnaliseMenos1.getNome());

        produtos[analise] = produtoAnaliseMenos1;
        produtos[analise - 1] = produtoAnalise;
        analise--;
      }
    }
  }
}