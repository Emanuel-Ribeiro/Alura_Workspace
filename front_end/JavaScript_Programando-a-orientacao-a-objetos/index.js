import {Cliente} from "./Cliente.js"
import {ContaCorrente} from "./ContaCorrente.js"
  
const cliente1 = new Cliente("Emanuel", 12345678910); //as linhas abaixo nao sao mais necessarias devido ao construtor (ver Cliente.js)
// cliente1.nome = "Emanuel";
// cliente1.cpf = 12345678910;

const cliente2 = new Cliente("Alice", 98765432150);

const conta1 = new ContaCorrente(1001, cliente1);
const conta2 = new ContaCorrente(1001, cliente2);

conta1.deposita(2400);
conta1.transfere(400, conta2);

console.log(ContaCorrente.numeroDeContas);