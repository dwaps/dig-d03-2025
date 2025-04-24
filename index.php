<?php
session_start();
// session_unset();
// session_destroy();

require_once __DIR__ . '/data.php';

$_SESSION['newTitle'] = $_SESSION['newTitle'] ?? $title;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $_SESSION['newTitle'] ?></title>
</head>

<body>

  <h1><?= $_SESSION['newTitle'] ?></h1>

  <a href="./cible.php?newTitle=Bienvenue">
    Modifier la variable $title
  </a>

</body>

</html>