export class Conta
{
  static numeroDeContas = 0; //precisa ser estatico pois todas as contas precisam ser contadas

  constructor(saldoInicial, cliente, agencia)
  {
    if(this.constructor == Conta)
    {
      throw new Error("Você não deveria instanciar um objeto do tipo Conta de forma direta (classe abstrata)")
    }

    this._saldo = saldoInicial
    this._cliente = cliente
    this._agencia = agencia
    Conta.numeroDeContas += 1
  }

  set cliente(novoValor)
  {
    if(novoValor instanceof Cliente)
    {
      this._cliente = novoValor;
    }
  }

  get cliente()
  {
    return this._cliente
  }

  get saldo()
  {
    return this._saldo
  }

  saca(valor) //metodo abstrato (no typeScript tem como declarar como abtract saca(valor) )
  {
    throw new Error("O método Sacar (da classe conta) é abstrato e precisa ser sobreescrito")
  }
              // o metodo é necessario pois o metodo _saca é privado

  _saca(valor, taxa)
  {
    const valorTaxado = taxa * valor

    if(this._saldo >= (valor + valorTaxado))
    {
      this._saldo -= (valor + valorTaxado)
      return valor
    }

    else
    {
      console.log("Saldo insuficiente para a operação")
    }
  }

  deposita(valor)
  {
    if(valor < 100)
    {
      return("Nao é possivel efetuar depositos de montante inferior a 100 reais")
    }
    
    else
    {
      this._saldo += valor;
      console.log("Deposito efetuado com sucesso!")
    }
  }

  transfere(valor, conta)
  {
    const valorSacado = this.saca(valor)

    conta.deposita(valorSacado)
  }
}