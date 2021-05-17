import {Cliente} from "./Cliente.js";
import { Gerente } from "./Funcionarios/Gerente.js";
import { Diretor } from "./Funcionarios/Diretor.js";
import { SistemaAutenticacao } from "./SistemaAutenticacao.js";

const diretor = new Diretor("Emanuel", 10000, 12345678910)
diretor.cadastrarSenha("123")

const gerente = new Gerente("Ricardo", 5000, 98765432195)

const logado = SistemaAutenticacao.login(diretor, "123")

console.log(logado)