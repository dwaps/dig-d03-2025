<?php

// TABLEAUX

$array = [
  'one' => 'val1',
  'two' => 'val2',
  'three' => 'val3',
];

var_dump($array);

echo count($array), PHP_EOL;
echo sizeof($array), PHP_EOL;

foreach ($array as $item) {
  echo $item, PHP_EOL;
}

foreach ($array as $key => $value) {
  echo $key, " => ", $value, PHP_EOL;
}
