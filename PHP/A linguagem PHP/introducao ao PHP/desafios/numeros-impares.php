<?php

for($i = 1; $i <= 100; $i++)
{
  $impar = (($i % 2) != 0); 
  if($impar)
  {
    echo "$i". PHP_EOL;
  }
}