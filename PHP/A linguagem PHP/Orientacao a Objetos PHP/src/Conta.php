<?php

class Conta //a classe é como se fosse a "forma do bolo" e o objeto é o bolo em si 
//ex: $variavel = new nomeDaClass(); (isso é um "bolo")

// $umaConta = new Conta(); (o valor da variavel $umaConta vai ser um endereço de memoria que aponta para o objeto Conta)
{
  //tudo aqui dentro sao atributos
  private $titular;
  private float  $saldo;
  private static $numeroDeContas;

  public function __construct(Titular $titular)
  {
    $this -> titular = $titular;
    $this -> saldo = 0;

    self::$numeroDeContas++;
  }

  public function __destruct()
  {
    self::$numeroDeContas--;
  }

  public function saca(float $valorASacar): void // $variavel -> sacar(valor);
  {
    if ($valorASacar > $this -> saldo)
    {
      echo "Saldo insuficiente";
      return;
    }

    $this -> saldo -= $valorASacar;
  }

  public function deposita(float $valorADepositar): void
  {
    if ($valorADepositar <= 0)
    {
      echo "Esse valor precisa ser positivo";
      return;
    }

    $this->saldo += $valorADepositar;
  }

  public function transfere(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this -> saldo)
    {
      echo "Saldo insuficiente";
      return;
    }

    $this -> saca($valorATransferir);
    $contaDestino -> deposita($valorATransferir);
  }

  public function recuperaSaldo(): float
  {
    return $this -> saldo;
  }

  public static function recuperaNumeroDeContas(): int
  {
    return self::$numeroDeContas;
  }

  public function recuperaNomeTitular(): string
  {
    return $this -> titular -> recuperaNome();
  }

  public function recuperaCpfTitular(): string
  {
    return $this -> titular -> recuperaCpf();
  }
}
