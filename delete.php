<?php


//include()connexion bvase de données
include 'bdd.php';



if (isset($_GET['id'])){
  $response = $bdd->prepare('DELETE FROM hiking WHERE id = :id');
  $response -> execute(array('id' => $_GET['id']));
}

header("Location: http://localhost/~mahana/php/php-training-mysql/read.php");
?>
