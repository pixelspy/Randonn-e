<!DOCTYPE html>
<?php

//include()connexion bvase de données
include 'bdd.php';



  $response = $bdd->prepare('UPDATE hiking SET name = :new_name, difficulty = :new_difficulty, distance= :new_distance, duration = :new_duration, height_difference = :new_height_difference, available = :new_available WHERE id = :id');
  $response->execute(array(
    'id'=> $_GET['id'],
    'new_name' => $_POST['name'],
    'new_difficulty' => $_POST['difficulty'],
    'new_distance' => $_POST['distance'],
    'new_duration' => $_POST['duration'],
    'new_height_difference' => $_POST['height_difference'],
    'new_available' => $_POST['available']

  ));echo 'Vos infos on été modifiées.';

  $response = $bdd->prepare('SELECT * FROM hiking WHERE id= :id');
  $response->execute(array(
    'id'=> $_GET['id']
  ));
// }
  while($donnees = $response->fetch())
  {
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Ajouter une randonnée</title>
  <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <a href="read.php">Liste des données</a>
  <h1>Ajouter</h1>
  <form action="" method="post">
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" value="<?= $donnees['name'] ?>">
    </div>

    <div>
      <label for="difficulty">Difficulté</label>
      <select name="difficulty">
        <option value="très facile">Très facile</option>
        <option value="facile">Facile</option>
        <option value="moyen">Moyen</option>
        <option value="difficile">Difficile</option>
        <option value="très difficile">Très difficile</option>
      </select>
    </div>

    <div>
      <label for="distance">Distance</label>
      <input type="text" name="distance" value="<?= $donnees['distance'] ?>">
    </div>
    <div>
      <label for="duration">Durée</label>
      <input type="duration" name="duration" value="<?= $donnees['duration'] ?>">
    </div>
    <div>
      <label for="height_difference">Dénivelé</label>
      <input type="text" name="height_difference" value="<?= $donnees['height_difference'] ?>">
    </div>
    <div>
      <label for="available">Disponibilité</label>
      <input type="text" name="available" value="" required>
    </div>
    <button type="submit" name="button">Envoyer</button>
    <?php
  } ?>
  </form>
</body>
</html>
