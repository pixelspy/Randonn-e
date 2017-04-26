<?php
try {
  $bdd = new PDO('mysql:host=localhost; dbname=reunion_island;charset=utf8', 'phpmyadmin', 'simplon');
}
catch (Exception $e){
  die('Erreur:' . $e -> getMessage());
}
?>
