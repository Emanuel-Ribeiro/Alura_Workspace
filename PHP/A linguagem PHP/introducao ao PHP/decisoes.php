<?php

$idade = 20;
$numeroDePessoas = 2;

echo "Você so pode entrar se tiver a partir de 18 anos";
echo " ou a partir de 16 anos acompanhado ". PHP_EOL; //PHP_EOL = end of line("pula linha")

if ($idade >= 18)
{
  echo "Você tem $idade anos.". PHP_EOL;
  echo 'Pode entrar'. PHP_EOL;
}

elseif ($idade >= 16 && $numeroDePessoas > 1)
{
  echo "Você tem $idade anos, está acompanhado, entao pode entrar.". PHP_EOL;
}

else
{
  echo "Você só tem $idade anos. Você não pode entrar!". PHP_EOL;
}

echo 'Fim do programa!';