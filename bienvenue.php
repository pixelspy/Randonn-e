<!DOCTYPE html>
<?php
include 'bdd.php';
session_start();

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>bienvenue</title>
  </head>
  <body>
    <h1>Bienvenue <?= $_SESSION['login']?> sur ce site de randonnée!</h1>
  </body>

</html>


<?php } ?>
