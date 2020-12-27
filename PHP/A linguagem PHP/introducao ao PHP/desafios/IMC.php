<?php

$peso = 58;
$altura = 1.78;
$imc = $peso / ($altura ** 2);

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5)
{
  echo "abaixo";
}

elseif ($imc < 25)
{
  echo "Dentro";
}

else
{
  echo "acima";
}

echo " do recomendado";