<!DOCTYPE html>
<?php

//include()connexion bvase de données
include 'bdd.php';


$reponse = $bdd -> query ('SELECT * FROM hiking');

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
    <?php while ($donnees = $reponse -> fetch()){
      echo $donnees['name']; ?><a href="update.php?id=<?php echo $donnees['id'];?>">Modifier </a><a href="delete.php?id=<?php echo $donnees['id'];?>"> Supprimer</a><br/>
      Difficulté : <?php echo $donnees['difficulty'];?><br/>
      Distance en km : <?php echo $donnees['distance']?><br/>
      Duration : <?php echo $donnees['duration'];?><br/>
      Dénivelé en m : <?php echo $donnees['height_difference'];?><br/><br/>
      Disponible : <?php echo $donnees['available'];?><br/><br/>

<?php
    } ?>
    </table>
  </body>
</html>

<?php

$reponse -> closeCursor();
?>
