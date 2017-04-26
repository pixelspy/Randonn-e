<!DOCTYPE html>
<?php
include 'bdd.php';
session_start();

$response = $bdd -> prepare('INSERT INTO membres (identifiant, mdp) VALUES (:identifiant, :mdp)');

if(isset($_POST['button'])){
  $_SESSION['login'] = $_POST['login'];
  $_SESSION['pwd'] = $_POST['pwd'];
  $response->execute(array(
    'identifiant' => $_POST['login'],
    'mdp' => $_POST['pwd']
  ));
header ('location: bienvenue.php');
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire d'inscription</title>
  </head>
  <body>
    <form class="" action="" method="post">
      Votre login : <input type="text" name="login">
      Votre mot de passe : <input type="password" name="pwd">
      <input type="submit" name="button" value="Connexion">
    </form>
  </body>
</html>
