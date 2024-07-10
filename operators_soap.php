<?php

class MyService 
{
  public function sum(...$args): int|float
  {
    $result = 0;

    foreach ($args as $value) {
      $result += $value;
    }
    
    return $result; 
  }

  public function multiply(...$args): int|float
  {
    $result = 1;
    foreach ($args as $value) {
      $result *= $value;
    }

    return $result;
  }
}


$options = [
  'uri' => 'http://localhost/server.php'
];

$server = new SoapServer(null, $options);
$server->setClass('MyService');
$server->handle();
