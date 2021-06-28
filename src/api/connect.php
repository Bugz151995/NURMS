<?php
function openCon(){
  $host = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "nurms_db";
  
  $con = mysqli_connect($host, $user, $pass, $dbname);
  
  if(!$con){
    die("Connection failed: ".mysqli_connect_error());
  }
  return $con;
}
?>