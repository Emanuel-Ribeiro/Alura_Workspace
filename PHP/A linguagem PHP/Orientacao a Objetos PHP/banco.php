<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$emanuel = new Titular(new Cpf('123.456.789-10'), 'Emanuel Ribeiro');
$primeiraConta = new Conta($emanuel); // composiçao de objetos

$primeiraConta -> deposita(500);
$primeiraConta -> saca(300);

echo $primeiraConta -> recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta -> recuperaCpfTitular(). PHP_EOL;
echo $primeiraConta -> recuperaSaldo(). PHP_EOL;

$patricia = new Titular(new Cpf('698.549.548-10'), 'Patricia');
$segundaConta = new Conta($patricia);

var_dump($segundaConta). PHP_EOL;

echo Conta::recuperaNumeroDeContas();