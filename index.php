<?php

const FILEPATH = __DIR__ . "/books.json";
// define("FILEPATH", __DIR__ . "/books.json");

if (file_exists(FILEPATH)) {
  $filecontent = file_get_contents(FILEPATH);
  $books = json_decode($filecontent, true);

  // Tableau d'objet
  // var_dump($books[0]->title);

  // Tableau associatif
  var_dump($books[0]['title']);

  $books[] = [
    'id' => '70a1a502-44a8-4443-82c5-18b2cce54f04',
    'title' => 'Biographie',
    'price' => 56
  ];

  file_put_contents(FILEPATH, json_encode($books));
}
