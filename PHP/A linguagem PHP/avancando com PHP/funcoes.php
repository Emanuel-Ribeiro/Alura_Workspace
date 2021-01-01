<?php

function depositar(array $conta, float $valorADepositar): array
{
  if ($valorADepositar > 0)
  {
    $conta['saldo'] += $valorADepositar;
  }
  else
  {
    exibeMensagem("$conta[titular] Impossivel depositar valores negativos");
  }

  return $conta;
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo'])
  {
    exibeMensagem("$conta[titular] Você nao pode sacar esse valor");
  }
  else
  {
    $conta['saldo'] -= $valorASacar;
  }

  return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
  $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeMensagem($mensagem)
{
  echo $mensagem . PHP_EOL . '<br>';
}

function exibeConta(array $conta)
{
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  echo "<li>Titular $titular. Saldo: $saldo</li>";
}