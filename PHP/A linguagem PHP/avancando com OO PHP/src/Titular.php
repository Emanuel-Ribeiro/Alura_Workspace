<?php

class Titular
{
  private Cpf $cpf;
  private string $nome;
  private Endereco $endereco;

  public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
  {
    $this -> cpf = $cpf;
    $this -> validaNomeTitular($nome);
    $this -> nome = $nome;
    $this-> endereco = $endereco;
  }

  public function recuperaCpf(): string
  {
    return $this -> cpf -> resgataCpf();
  }

  public function recuperaNome(): string
  {
    return $this -> nome;
  }

  private function validaNomeTitular(string $nomeTitular)
  {
    if (strlen($nomeTitular) < 5)
    {
      echo "Nome precisa ter pelo menos 5 caracteres";
      exit();
    }
  }

  public function recuperaEndereco(): Endereco
  {
    return $this -> endereco;
  }
}