<?php
require ("Database.php");
session_start();

class Verify{
  use Database;
  public $username;
  public $password;
  public function login($uname, $pass)
  {
    $query = "SELECT username,password FROM admin_data WHERE username = '$uname' ";
    $this->query($query);
    $output = $this->response->fetch_assoc();
    if ($output) {
      $this->username = $output["username"];
      $this->password = $output["password"];
    }
  }
  public function verify($uname, $pass)
  {
    // $pass = hash('sha256', $pass);
    if ($this->username == $uname && $this->password == $pass) {
      session_start();
      $_SESSION['logedin'] = true;
      $_SESSION['uname'] = $uname;
      header('Location: Dashboard.php');
    } else {
      echo "<script>alert('Please check your credentials ')</script>";
    }
  }
  public function checkAdmin($pass){
      $query = "SELECT common_password FROM admin_data WHERE common_password = '$pass' ";
      $this->query($query);
      $output = $this->response->fetch_assoc();
      if($output){
        if($output["common_password"] == $pass){
          header("Location:Login.php");
      }else{
        echo "<script>alert('Unauthenticated Admin'); window.location.href='Checkadmin.php';</script>";
      }
    }else{
      echo "<script>alert('Unauthenticated Admin'); window.location.href='Checkadmin.php';</script>";
    }
  }
}

$user = new Verify();
if(isset($_POST['submit'])){
  $user->checkAdmin($_POST['comm_pass']);
}
if(isset($_POST['loginsubmit'])){
  $user->login($_POST['uname'],$_POST['pass']);
  $user->verify($_POST['uname'],$_POST['pass']);
}

