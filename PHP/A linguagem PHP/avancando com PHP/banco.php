<?php

$contasCorrentes = 
[
  '123.456.789-10' => [
    'titular' => 'Emanuel',
    'saldo' => 2400
  ],

  '123.456.789-11' => [
    'titular' => 'Guilherme',
    'saldo' => 100000
  ], //chave - valor

  '123.456.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
  ]
];


// "Sacando" 500 conto
$contasCorrentes['123.456.789-10'] ['saldo'] -= 500; 

                          //indice - valor
foreach ($contasCorrentes as $cpf => $conta) //para cada conta corrente pegando o indice de cada e passando para a variavel cpf e pegando o valor de cada e passando para a variavel conta executa esse loop
{
  echo $cpf. " " .$conta['titular']. " " . $conta['saldo'] . PHP_EOL; //posso pegar o indice tambem, nesse caso o cpf
}