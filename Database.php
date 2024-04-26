<?php
require ("Config.php");
session_start();
trait Database 
{
  public $error_message;
  public $response;
  function connect()
  {
    $con = mysqli_connect(servername, username, password, dbname);
    if (mysqli_error($con)) {
      die ("Connection failed: " . $con->connect_error);
    }
    return $con;
  }
  function query($query)
  {

    try {
      $con = $this->connect();
      $this->response = mysqli_query($con, $query);

      if (!$this->response) {
        throw new \Exception(mysqli_error($con));
      } else {
        
        return true;
      }
    } catch (\Exception $e) {
      $this->error_message = $e->getMessage();
      return $this->error_message;
      
    }

  }
}