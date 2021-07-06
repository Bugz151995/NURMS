<?php
class Database {
  private $db_connect = false;
  private $db_host;
  private $db_user;
  private $db_pass;
  private $db_name;

  public function __construct(){
    $this->db_host = "localhost";
    $this->db_user = "root";
    $this->db_pass = "";
    $this->db_name = "nurms_db";
  }

  public function connect(){
    if(!$this->db_connect){
      $con = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

      if(mysqli_connect_error($con)){
        die("Connection Error: " . mysqli_connect_error($con));
      } else return $con;
    }
  }
}