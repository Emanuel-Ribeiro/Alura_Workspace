console.log("Trabalhando com condicionais")

const listaDeDestinos = new Array
(
  `Salvador`,
  `Curitiba`,
  `Sao Paulo`
)

const idadeComprador = 15
const maiorDeIdade = idadeComprador >= 18
const estaAcompanhada = true

console.log("Destinos possiveis:")
console.log(listaDeDestinos)

if(maiorDeIdade || estaAcompanhada)
{
  console.log("Passagem comprada")
  listaDeDestinos.splice(1,1) //removendo item
}

else
{
  console.log("voce e menor de idade e nao pode comprar passagens")
}

console.log(listaDeDestinos)