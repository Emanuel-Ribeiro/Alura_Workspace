import { Conta } from "./Conta.js";

export class ContaCorrente extends Conta
{
  constructor(cliente, agencia)
  {
    super(0,cliente, agencia) //chama o metodo da classe extendida que for igual (ex: super dentro de construtor vai chamar um construtor)
  }

  saca(valor) //sobreescrevendo o comportamento do metodo saca (no caso mudando a taxa para 10%)
  {
    let taxa = 0.1
    return this._saca(valor, taxa)
  }
}