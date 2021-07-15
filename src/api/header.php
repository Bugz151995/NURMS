<?php
require('mysqli_connect.php');

//instantiate a new database object which automatically connects to the database.
$db = new Database();
$mysqli = $db->connect();

session_start();

if(!isset($_SESSION['IS_SIGNED_IN'])){
  header("Location: ../../index.php");
}