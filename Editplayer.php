<?php
require ("Playerdb.php");
echo $data['playerid'];
// use Playerdb;
// $playerdb = new Playerdb();
// $player = $playerdb->getPlayer($_POST['playerid']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
  <form  method="post" action="Playerdb.php" enctype="multipart/form-data">
    <label for="name">Player Name</label>
    <input type="text" name="name" id="name" placeholder="<?php echo $player['name']?>">
    <label for="runs">Runs Scorred</label>
    <input type="text" name="runs" id="runs" placeholder="<?php echo $player['runs']?>">
    <label for="balls">Balls Faced</label>
    <input type="text" name="balls" id="balls" placeholder="<?php echo $player['balls']?>">

    <input type="submit" name="editsubmit" id="submit">
  </form>
</body>
</html>