<?php

// OPERATEURS

// Affectation
$a = 'a';
// Opérateur combiné : affection élargie
$nb1 = 6;
$nb1 += 12; // --> $nb1 = $nb1 + 12;
$nb1 /= 15;
$nb1 *= 15;
$nb1 -= 15;
$nb1 %= 3;
$nb1 **= 3;

// Opérateurs arythmétiques
// + - / * % **
$exp = 4 ** 2; // 16

// 10 % 2 = 0; // pair
// 9 % 2 = 1; // impair
// 8 % 2 = 0; // pair
// 7 % 2 = 1; // impair
// 6 % 2 = 0; // pair
// 5 % 2 = 1; // impair

// Comparaison
var_dump(5 == '5'); // true
var_dump(5 === '5'); // false
var_dump(5 != '5'); // false
var_dump(5 !== '5'); // true
var_dump(5 <> '5'); // false

// > < >= <=

var_dump(5 <=> 5); // 0
var_dump(3 <=> 5); // -1
var_dump(8 <=> 5); // 1

// Opérateurs logiques
// && || and or ! xor
var_dump(true || true); // true
var_dump(true or true); // true
var_dump(true xor true); // false

// Opérateur d'exécution --> ``
$output = `pwd`; // Script Shell
echo $output, PHP_EOL;

// Contrôle d'erreur
echo @$none;

// Opérateur peut être unaire, binaire ou ternaire
// unaire --> agit sur une opérande
$a = -1;
$a++;
// binaire --> agit sur deux opérandes
$b = 2 + 4;
// ternaire --> agit sur trois opérandes
$c = 'coco' ? 'ok' : 'pas ok';

// Précédence (priorité) des opérateurs
var_dump(true || false && true || false && false);
var_dump(true || false || false); // true
// Associativité (ordre quand il y a la même priorité)
echo 2 + 1 * 3; // 5
echo (2 + 1) * 3; // 9
