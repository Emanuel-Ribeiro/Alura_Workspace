<?php

$contasCorrentes = 
[
  12345678910 => [
    'titular' => 'Emanuel',
    'saldo' => 2400
  ],

  12345678911 => [
    'titular' => 'Guilherme',
    'saldo' => 100000
  ], //chave - valor

  12345678912 => [
    'titular' => 'Alberto',
    'saldo' => 300
  ]
];

$contasCorrentes['132.654.987-82'] =
[
  'titular' => 'Claudia',
  'saldo' => 100
];
                          //indice - valor
foreach ($contasCorrentes as $cpf => $conta) //para cada conta corrente pegando o indice de cada e passando para a variavel cpf e pegando o valor de cada e passando para a variavel conta executa esse loop
{
  echo $cpf. " " .$conta['titular']. PHP_EOL; //posso pegar o indice tambem, nesse caso o cpf
}