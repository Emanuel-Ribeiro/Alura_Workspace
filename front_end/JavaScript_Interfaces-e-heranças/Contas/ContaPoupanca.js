import { Conta } from "./Conta.js";

export class ContaPoupanca extends Conta
{
  constructor(saldoInicial, cliente, agencia)
  {
    super(saldoInicial, cliente, agencia)
  }

  saca(valor)
  {
    const taxa = 0.02
    return this._saca(valor, taxa)
  }
}