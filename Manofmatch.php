<?php
require ("Playerdb.php");
use Playerdb;
$playerdb = new Playerdb();
$player = $playerdb->manofmatch();
echo $player[0]["name"];
