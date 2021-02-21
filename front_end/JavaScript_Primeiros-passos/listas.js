console.log(`Trabalhando com listas`)

const listaDeDestinos = new Array
(
  `Salvador`,
  `Sao Paulo`,
  `Rio de Janeiro`
)

listaDeDestinos.push(`Curitiba`) //adicionando curitiba a lista

console.log("Destinos possíveis:")
console.log(listaDeDestinos)

listaDeDestinos.splice(1,1) //primeiro numero é a posiçao do elemento que eu quero deletar e o segundo numero a quantidade de elementos
console.log(listaDeDestinos)