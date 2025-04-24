<?php require_once __DIR__ . "/includes/todos.php" ?>

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
          <?php foreach ($todos as $todo): ?>
            <li class="todo-item <?= $todo['done'] ? 'low-opacity' : '' ?>">
              <span class="todo-name"><?= $todo['name'] ?></span>
              <button class="btn btn-primary btn-small">
                <?= $todo['done'] ? 'Annuler' : 'Valider' ?>
              </button>
              <a href="/remove-todo.php?id=<?= $todo['id'] ?>">
                <button class="btn btn-danger btn-small">
                  Supprimer
                </button>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>

      </div>
    </div>

    <?php require_once __DIR__ . '/includes/footer.php' ?>
  </div>
</body>

</html>