<?php

// CONDITIONS

$mood = "content";

// If, elseif, else
if ($mood === "content") {
  echo "Tu es $mood", PHP_EOL;
} elseif ($mood === "triste") {
  echo "Quel dommage :(", PHP_EOL;
} else {
  echo "Quel est ton humeur ??", PHP_EOL;
}
?>

<?php if ($mood === "content"): ?>
  <p>Tu es <?= $mood ?></p>
<?php elseif ($mood === "triste"): ?>
  <p>Quel dommage :(</p>
<?php else: ?>
  <p>Quel est ton hummeur ??</p>
<?php endif; ?>

<?php

// switch
switch ($mood) {
  case 'content':
    echo 'toi content !', PHP_EOL;
    break;
  case 'triste':
  case 'maussade':
    echo 'dommage', PHP_EOL;
    break;
  default:
    echo 'ton humeur ??', PHP_EOL;
}

// match --> cas stricts
$userChoice = "salade";
$menu = match ($userChoice) {
  "plat principal" => "raviolis",
  "entrée", "salade" => "riz/thon/tomates",
  default => "plat non servi",
};
echo $menu, PHP_EOL;

// match --> cas complexes et ternaire
$age = 56;
$accessAllowed = match (true) {
  $age >= 18 => true,
  default => false,
};
echo $accessAllowed ? "Accès autorisé" : "Accès interdit", PHP_EOL;

// condition avec opérateur de fusion null
// (coalescence des null)
$username;
$userConnected = $username ?? 'anonyme';
$userConnected = isset($username) ? $username : 'anonyme';
echo $userConnected, PHP_EOL;
