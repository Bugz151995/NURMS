<?php
class User {
  private $con;
  private $email;
  private $password;
  private $user_data;

  public function __construct($email, $password){
    $this->email = trim($email);
    $this->password = trim($password);
  }

  public function setDatabase($con){
    $this->con = $con;
  }

  //this returns an associative array containing the data of the user
  public function getUserData(){
    $users_data_query = "SELECT * FROM users u INNER JOIN user_accounts ua ON u.user_id = ua.user_id WHERE u.email = '$this->email'";

    $result = $this->con->query($users_data_query);

    if($result){
      while($row = mysqli_fetch_assoc($result)){
        $this->user_data = $row;
      }
    } else {
      echo '<script type="text/javascript"> alert("Username or Password Not Found! Please contact your administrator."); window.location = "../../index.php"; </script>';
      return mysqli_connect_error($this->con);
    }
  }

  //this is a boolean function that returns true if the user exist, else false if it doesn't.
  //to successfully authenticate the user, the password and all of his user credentials must match.
  public function authenticate(){
    if($this->password !== NULL && $this->email !== NULL){
      $match = password_verify($this->password, $this->user_data['password']);
      if($match){
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  //save the data that was pulled from the database into session.
  //start session with the user.
  public function createSession(){
    session_start();
    //fill the associative array to session variable
    $_SESSION['USER_ID']  = $this->user_data['user_account_id'];
    $_SESSION['FIRST_NAME'] = $this->user_data['first_name'];
    $_SESSION['LAST_NAME']  =  $this->user_data['last_name'];
    $_SESSION['MIDDLE_NAME']  =  $this->user_data['middle_name'];
    $_SESSION['FB_LINK']  =  $this->user_data['fb_link'];
    $_SESSION['CONTACT_NUM']  =  $this->user_data['c_num'];
    $_SESSION['STREET']  =  $this->user_data['street'];
    $_SESSION['BARANGAY']  =  $this->user_data['barangay'];
    $_SESSION['CT_MUN']  =  $this->user_data['ct_mun'];
    $_SESSION['PROVINCE']  =  $this->user_data['province'];
    $_SESSION['ZIP_CODE']  =  $this->user_data['zip_code'];
    $_SESSION['EMAIL']  =  $this->user_data['email'];
  }
}