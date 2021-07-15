<?php
require('mysqli_connect.php');
require('session.php');
require('query.php');
require('sign_in.php');

if (isset($_POST['btnlogin'])) {

  //instantiate a new database object
  $db = new Database();
  $mysqli = $db->connect();

  //fetch the user data
  $stmt = $mysqli->prepare("SELECT * FROM users u INNER JOIN user_accounts ua ON u.user_id = ua.user_id WHERE u.email = ?");
  $stmt->bind_param("s", $_POST["email"]);
  $stmt->execute();

  $result = $stmt->get_result();

  while($row = $result->fetch_assoc()){
    $user_data = $row;
  }
  if(!$user_data) exit('No rows');
  $stmt->close();

  //instantiate anew sign in object
  //authenticate if the password input of the user matches the database
  $sign_in = new SignIn($_POST["email"], $_POST["pass"]);
  $sign_in->setUserData($user_data);
  $valid = $sign_in->authenticate();

  if($valid){
    //create a new session object to instantiate a new session for the user
    $session = new Session($user_data);
    header("Location: ../../core/home.php");
  } else {
    echo '<script type="text/javascript"> alert("Username or Password Not Found! Please contact your administrator."); window.location = "../../index.php"; </script>';
  }
}