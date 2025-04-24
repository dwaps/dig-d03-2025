<?php

session_start();

require_once __DIR__ . "/includes/todos.php";

$id = $_GET['id'] ?? '';
$todos = &$_SESSION['todos'] ?? [];

if ($id && count($todos)) {
  $todoIndex = array_search($id, array_column($todos, 'id'));

  if ($todoIndex !== false) {
    array_splice($todos, $todoIndex, 1);
  }
}

header('Location: /');

// KISS --> Keep It Simple, Stupid
// DRY --> Don't Repeat Yourself
// YAGNI --> You Aren't Gonna Need It
