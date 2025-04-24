<?php

require_once __DIR__ . "/includes/todos.php";

$id = $_GET['id'] ?? '';

if ($id && count($todos)) {
  $todoIndex = array_search($id, array_column($todos, 'id'));

  if ($todoIndex !== false) {
    array_splice($todos, $todoIndex, 1);
  }
}

header('Location: /');
