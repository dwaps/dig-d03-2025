<?php
$todos = [
  ["id" => "a7749a0f-cf14-4b95-9864-8893c695bca2", "name" => "Apprendre le HTML", "done" => false],
  ["id" => "8b9832cf-afa8-4802-8e05-ff4888a5d0a5", "name" => "Apprendre le JavaScript", "done" => false],
  ["id" => "e57be897-96d6-4ee8-98a2-9522d1b324fb", "name" => "Apprendre le PHP", "done" => false],
  ["id" => "04d6f5b9-d027-422f-af57-2910cda8e23f", "name" => "Coder, coder, coder", "done" => false],
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require_once __DIR__ . '/includes/head.php' ?>
  <title>ToraTaTache</title>
</head>

<body>
  <div class="container">

    <?php require_once __DIR__ . '/includes/header.php' ?>

    <div class="content">
      <div class="todo-container">

        <h1>Mes Tâches</h1>

        <ul class="todo-list">
          <?php foreach ($todos as $t): ?>
            <li class="todo-item">
              <span class="todo-name"><?= $t['name'] ?></span>
              <button class="btn btn-primary btn-small">
                Valider
              </button>
              <button class="btn btn-danger btn-small">
                Supprimer
              </button>
            </li>
          <?php endforeach; ?>
        </ul>

      </div>
    </div>

    <?php require_once __DIR__ . '/includes/footer.php' ?>
  </div>
</body>

</html>