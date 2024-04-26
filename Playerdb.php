<?php
require ("Database.php");
session_start();
class Playerdb {
  use Database;
  public function addplayer($name,$runs,$balls) {
    $strikerate = $runs/$balls;
    $query = "INSERT INTO players(name,runs,balls,strikerate) VALUES ('$name','$runs','$balls','$strikerate');";
    $this->query($query);
    echo "<script>alert('Player Added Successfully !'); window.location.href='Dashboard.php';</script>";
  }
  public function displayPlayer() {
    $query = "SELECT * FROM players;";
    $this->query($query);
    $output = $this->response->fetch_all(MYSQLI_ASSOC);
    return $output;
  }
  public function getPlayer($id) {
    $query = "SELECT * FROM players WHERE playerid = '" . $id . "'";
    $this->query($query);
    $output = $this->response->fetch_all(MYSQLI_ASSOC);
    return $output;
  }
  public function display($players){
    ?>
    <table>
    <tr>
    <th>Player Name</th>
    <th>Runs Scored</th>
    <th>Bals Faced</th>
  </tr>
    
    <?php
    foreach ($players as $player) {
      ?>
      <tr>
      <td><?php echo $player['name']?></td>  
      <td><?php echo $player['runs']?></td>
      <td><?php echo $player['balls']?></td> 
      <td><a href='Editplayer.php/' data-postid="<?php echo $player['playerid']; ?>">Edit</a>
    </td> 

    </tr>
      <?php
    }?>
    </table><?php
  }
  public function editPlayer($name,$runs,$balls,$id) {
    $query = "UPDATE players SET name = '$name', runs = '$runs', balls = '$balls' WHERE playerid = '" . $id . "';    ";
    $this->query($query);
    echo "<script>alert('Player Updated Successfully !'); window.location.href='Dashboard.php';</script>";
  }
  public function manofmatch(){

    $query = "SELECT name FROM players WHERE strikerate = (SELECT MAX(strikerate) FROM players);";
    $this->query($query);
    $output = $this->response->fetch_all(MYSQLI_ASSOC);
    return $output;
  }
}
$playerdb = new Playerdb();
if(isset($_POST["submit"])) {
  $playerdb->addplayer($_POST['name'],$_POST['runs'],$_POST['balls']);
}
if(isset($_POST['editsubmit'])) {
  $playerdb->editPlayer($_POST['name'],$_POST['runs'],$_POST['balls'],$_POST['playerid']);
}

