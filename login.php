<?php

if(isset($_POST['login']) && ($_POST['pwd'])){

  //se connecter à la bdd

  include 'bdd.php';

  //select les données correspondant à l'identifiant mahana --> SECURISé
  $resp = $bdd -> prepare('SELECT * FROM membres WHERE identifiant = :identifiant AND mdp = :mdp');
  // ou prepare('SELECT * FROM membres WHERE identifiant = ?');

  //verifier que tout corresponde

  $resp->execute(array(
    // ou $_POST['login']));
    'identifiant' =>  $_POST['login'],
    'mdp' => $_POST['pwd']
  ));

  session_start();

  $_SESSION['login'] = $_POST['login'];
  $_SESSION['pwd'] = $_POST['pwd'];
  echo 'ID';

  // alors: ouvrir la page_membre

  header ('location: page_membre.php');



} else {
  echo 'Les variables ne sont pas déclarées.';
}
?>
