import { Cliente } from "./Cliente.js";

export class ContaCorrente
{
  static numeroDeContas = 0; //precisa ser estatico pois todas as contas precisam ser contadas
  agencia;

  // metodos privados abaixo
  _saldo = 0; // o simbolo # significa que é privado mas a comunidade deixa publico com um underline para falar q é privado
  _cliente;

  set cliente(novoValor) //serve para atribuir um valor a propiedade _cliente (pois como ela é "privada" nao é possivel atribuir valores a ela fora da classe) 
  {
    if(novoValor instanceof Cliente) //se o parametro for uma instancia de cliente entao esse cliente vai ser igual a instancia
    {
      this._cliente = novoValor;
    }
  }

  get cliente()
  {
    return this._cliente;
  }

  get saldo()
  {
    this._saldo;
  }

  constructor(agencia, cliente)
  {
    this.agencia = agencia;
    this.cliente = cliente; //usando o metodo assessor get cliente (caso contrario deveria ser this._cliente = cliente)
    ContaCorrente.numeroDeContas += 1;
  }

  saca(valor)
  {
    if(this._saldo >= valor)
    {
      this._saldo -= valor;
      return valor;
    }
  }

  deposita(valor)
  {
    if(valor <= 0)
    {
      return;
    } 
    this._saldo += valor;           
  }

  transfere(valor, conta)
  {
    const valorSacado = this.saca(valor);
    conta.deposita(valorSacado);
  }

}