<?php

// BOUCLES

// WHILE, DO WHILE
$i = 0;
while ($i <= 10) {
  echo "Le compteur vaut : ", $i++, PHP_EOL;
}
while ($i <= 10):
  echo "Le compteur vaut : ", $i++, PHP_EOL;
endwhile;

// Pas de syntaxe alternative !!!
do {
  print "Itération $i" . PHP_EOL;
  $i++;
} while ($i <= 15);


// FOR
for ($i = 0; $i <= 10; $i++) {
  echo "Le compteur vaut : ", $i++, PHP_EOL;
}
for ($i = 0; $i <= 10; $i++):
  echo "Le compteur vaut : ", $i++, PHP_EOL;
endfor;

// FOREACH
foreach (str_split("salut") as $char) {
  echo $char, PHP_EOL;
}
