package br.com.alura.algoritimos;

public class TestaMenorPreco
{
private static int carroMaisBarato(Produto[] produtos)
{
  int maisBarato = 0;
  int carroAtual = 0;

  for(carroAtual = 0; carroAtual<=(produtos.length -1); carroAtual++) //executa do 0 ate o 4 (incluindo o 4) (passa por todos os carros)
  {
    if (produtos[carroAtual].getPreco() < produtos[maisBarato].getPreco())  //se o preço do carroAtual for menor que o preco do carro maisBarato
    //produtos[0] < produtos[0] || 1000000 < 1000000 = oq da falso mas o mais barato ja fica setado no 1000k
    {
      maisBarato = carroAtual;  //O novo carro maisBarato sera o carroAtual
    }
  }
  return maisBarato;
}

private static int carroMaisCaro(Produto[] produtos)
{
  int maisCaro = 0;
  int carroAtual = 0;

  for(carroAtual = 0; carroAtual<=(produtos.length -1); carroAtual++) //executa do 0 ate o 4 (incluindo o 4) (passa por todos os carros)
  {
    if (produtos[carroAtual].getPreco() > produtos[maisCaro].getPreco())  //se o preço do carroAtual for maior que o preco do carro maisCaro
    //produtos[0] > produtos[0] || 1000000 > 1000000 = oq da falso mas o mais maisCaro ja fica setado no 1000k
    {
      maisCaro = carroAtual;  //O novo carro maisCaro sera o carroAtual
    }
  }
  return maisCaro;
}
  public static void main(String[] args) 
  {
    Produto produtos[] =
    {
      new Produto("Jipe", 46000),
      new Produto("Brasília", 16000),
      new Produto("Smart", 46500),
      new Produto("Fusca", 17000)
    };

    System.out.println("O carro mais barato é o carro: " + produtos[carroMaisBarato(produtos)].getNome());
    System.out.println("E ele custa: " + produtos[carroMaisBarato(produtos)].getPreco());

    System.out.println("O carro mais caro é o carro: " + produtos[carroMaisCaro(produtos)].getNome());
    System.out.println("E ele custa: " + produtos[carroMaisCaro(produtos)].getPreco());
  }
}
