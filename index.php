<?php

// TYPES SCALAIRES

echo gettype(true), PHP_EOL;
echo gettype(67), PHP_EOL;
echo gettype('coco'), PHP_EOL;
echo gettype(`ls`), PHP_EOL;

echo `ls ..`;

// TYPES COMPOSES
$friends = ['coco', 'jaco', 'pedro'];
echo gettype($friends), PHP_EOL;
// echo $friends;
print_r($friends);
var_dump($friends);

// TYPES SPECIAUX
// resource (référence)
$user = null;
$user = NULL;
echo gettype($user), PHP_EOL;

// Vérification
// is_xxx()
print is_int(78); // true --> 1
print is_numeric("78"); // true --> 1
print is_scalar("78"); // true --> 1
