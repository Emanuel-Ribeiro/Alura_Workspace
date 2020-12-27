<?php

for($contador = 1; $contador <= 15; $contador++)
{
  if($contador == 13)
  {
    continue; //pula pra proxima iteracao do for
  }

  echo "#$contador". PHP_EOL;
}