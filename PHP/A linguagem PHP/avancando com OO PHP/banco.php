<?php
//assistir A Classe Funcionario
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
require_once 'src/Endereco.php';

$emanuel = new Titular(new Cpf('123.456.789-10'), 'Emanuel Ribeiro', new Endereco('Brasilia', 'Taquari', 'rua da jeep', '8'));

$primeiraConta = new Conta($emanuel); // composiçao de objetos
$primeiraConta -> deposita(500);
$primeiraConta -> saca(300);

echo $primeiraConta -> recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta -> recuperaCpfTitular(). PHP_EOL;
echo $primeiraConta -> recuperaSaldo(). PHP_EOL;

$patricia = new Titular(new Cpf('698.549.548-10'), 'Patricia', new Endereco('Brasilia', 'Taquari', 'rua do oba', '2'));
$segundaConta = new Conta($patricia);

var_dump($segundaConta). PHP_EOL;

echo Conta::recuperaNumeroDeContas();