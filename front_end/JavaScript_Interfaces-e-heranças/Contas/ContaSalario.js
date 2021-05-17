import { Conta } from "./Conta.js";

export class ContaSalario extends Conta
{
  constructor(cliente)
  {
    super(0, cliente, 1001)
  }

  saca(valor)
  {
    const taxa = 0.01
    return this._saca(valor, taxa)
  }
}