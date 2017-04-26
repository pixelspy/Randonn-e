<?php
session_start();

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
  echo '<p>Bonjour ' . $_SESSION['login'] . '!</p>';
  echo '<a href="logout.php"> Deconnection</a>';

  echo '<br/>';
  include 'read.php';
  include 'create.php';

} else {
  echo 'Les variables ne sont pas déclarées.';
}
?>
