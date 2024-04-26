<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="http://mvc.com/public/assets/css/style_login.css">
</head>
<body>
  <form  method="post" action="Playerdb.php" enctype="multipart/form-data">
    <label for="name">Player Name</label>
    <input type="text" name="name" id="name">
    <label for="runs">Runs Scorred</label>
    <input type="text" name="runs" id="runs">
    <label for="balls">Balls Faced</label>
    <input type="text" name="balls" id="balls">

    <input type="submit" name="submit" id="submit">
  </form>
</body>
</html>