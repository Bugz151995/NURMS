<?php
require('connect.php');
require('session.php');

if (isset($_POST['btnlogin'])) {

  //instantiate a new database object
  $db = new Database();

  //access the database class method to connect to the database
  $con = $db->connect();
  
  //instantiate a new user object
  $user = new User($_POST['email'],$_POST['pass']);
  //set the database connection to prepare the query for user data
  $user->setDatabase($con);

  //get the user data, store it into the $user_data variable
  $user->getUserData();

  $valid = $user->authenticate();

  if($valid){
    $user->createSession();
    header("Location: ../../core/home.php");
  } else {
    echo '<script type="text/javascript"> alert("Username or Password Not Found! Please contact your administrator."); window.location = "../../index.php"; </script>';
  }
}