<form method="POST" action="/">
  <input type="text" placeholder="Votre nom ?" value="Michael" name="name">
  <input type="text" placeholder="Votre $age ?" value="88" name="age">
  <button type="submit">Go!</button>
</form>


<h2>Méthode GET</h2>
<p>Bonjour <?= $_GET['name'] ?? '' ?></p>

<h2>Méthode POST</h2>
<p>Bonjour <?= $_POST['name'] ?? '' ?></p>