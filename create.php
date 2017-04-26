<!DOCTYPE html>
<?php

//include()connexion bvase de données
include 'bdd.php';


  $response = $bdd->prepare('INSERT INTO hiking (name, difficulty, distance, duration, height_difference, available) VALUES(:name, :difficulty, :distance, :duration, :height_difference, :available)');

  if(isset($_POST['button'])){
    $response->execute(array(
      'name' => $_POST['name'],
      'difficulty' => $_POST['difficulty'],
      'distance' => $_POST['distance'],
      'duration' => $_POST['duration'],
      'height_difference' => $_POST['height_difference'],
      'available' => $_POST['available']

    ));
    echo 'Vos infos on été ajoutées.';
  }
// var_dump($_POST['name']);
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Ajouter une randonnée</title>
  <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <a href="page_membre.php">Liste des données</a>
  <h1>Ajouter</h1>
  <form action="" method="post">
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" value="" required>
    </div>

    <div>
      <label for="difficulty">Difficulté</label>
      <select name="difficulty" required>
        <option value="très facile">Très facile</option>
        <option value="facile">Facile</option>
        <option value="moyen">Moyen</option>
        <option value="difficile">Difficile</option>
        <option value="très difficile">Très difficile</option>
      </select>
    </div>

    <div>
      <label for="distance">Distance</label>
      <input type="text" name="distance" value="" required>
    </div>
    <div>
      <label for="duration">Durée</label>
      <input type="duration" name="duration" value="" required>
    </div>
    <div>
      <label for="height_difference">Dénivelé</label>
      <input type="text" name="height_difference" value="" required>
    </div>
    <div>
      <label for="available">Disponibilité</label>
      <input type="text" name="available" value="" required>
    </div>
    <button type="submit" name="button">Envoyer</button>
  </form>


</body>
</html>
