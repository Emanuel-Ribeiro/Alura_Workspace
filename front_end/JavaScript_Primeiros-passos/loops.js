console.log("Trabalhando com loops")

const listaDeDestinos = new Array
(
  `Salvador`,
  `Curitiba`,
  `Sao Paulo`
)

const idadeComprador = 15
const maiorDeIdade = idadeComprador >= 18
const estaAcompanhada = true
const podeComprar = (maiorDeIdade || estaAcompanhada)
const destino = "Curitiba"
let temPassagemComprada = false
let contador = 0
let destinoExiste = false

console.log("Destinos possiveis:")
console.log(listaDeDestinos)

for(contador = 0; contador < 3; contador++)
{
  if(listaDeDestinos[contador] == destino)
  {
    console.log(`Destino = ${destino}`)
    destinoExiste = true
    break
  }
}

if (podeComprar && destinoExiste)
{
  console.log("Boa viagem")
}
else
{
  console.log("Sistema fora do ar")
}