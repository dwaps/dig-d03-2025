<?php

session_start();

require_once __DIR__ . "/includes/todos.php";

$id = $_GET['id'] ?? '';
$todos = &$_SESSION['todos'] ?? [];

if ($id && count($todos)) {
  $todoIndex = array_search($id, array_column($todos, 'id'));

  if ($todoIndex !== false) {
    $todos[$todoIndex]['done'] = !$todos[$todoIndex]['done'];
  }
}

header('Location: /');
exit;
