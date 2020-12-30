<?php

$array =
[
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true =>  'd'
  /*todos os items desse array 
  vao se sobrescrever pois o
  PHP vai converter tudo pra 1 */
];

foreach ($array as $item) 
{
  echo $item . PHP_EOL;
}