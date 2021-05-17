export class Cliente
{
  constructor(nome, cpf, senha)
  {
    this.nome = nome
    this._cpf = cpf
    this._senha = senha
  }

  autentica()
  {
    return true
  }

  get cpf()
  {
    return this._cpf;
  }
}