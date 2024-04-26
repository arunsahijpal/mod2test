<?php
require ("Playerdb.php");
use Playerdb;
$playerdb = new Playerdb();
$players = $playerdb->displayPlayer();
// print_r($players);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
  <h1>Player Statisticks</h1>
  <?php
  $playerdb->display($players);
  ?>
  <br><br>

<?php
session_start();
if(isset($_SESSION["logedin"]) && $_SESSION["logedin"]==true){?>
  <a href="Logout.php">Logout</a>
  <a href="Addplayer.php">Add a player</a>

  <?php
}else{
  ?><a href="Checkadmin.php">Edit Stats</a>
  <a href="Manofmatch.php"> Man of the match</a>
  <?php

}
?>
</body>
</html>
