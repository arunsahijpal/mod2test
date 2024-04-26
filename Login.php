<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
  <form  method="post" action="Verify.php" enctype="multipart/form-data">
    <label for="uname">Username</label>
    <input type="text" name="uname" id="uname">
    <label for="pass">Password</label>
    <input type="text" name="pass" id="pass">
    <a href="">Forgot Password</a>
    <a href="">Create new account</a>
    <a href="Dashboard.php">Switch to Dashboard</a>

    <input type="submit" name="loginsubmit" id="loginsubmit">
  </form>
</body>
</html>