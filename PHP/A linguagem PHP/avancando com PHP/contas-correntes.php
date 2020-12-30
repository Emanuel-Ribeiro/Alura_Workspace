<?php

$conta1 = 
[
  'titular' => 'Emanuel',
  'saldo' => 2400
];

$conta2 = 
[
  'titular' => 'Guilherme',
  'saldo' => 100000
];

$conta3 = 
[
  'titular' => 'Alberto',
  'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++)
{
  echo $contasCorrentes[$i]['titular']. PHP_EOL;
}
