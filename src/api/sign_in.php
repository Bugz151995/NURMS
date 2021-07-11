<?php
class SignIn {
  protected $email;
  protected $password;
  private $user_data;

  public function __construct($email,$password) {
    $this->email = trim($email);
    $this->password = trim($password);
  }

  //setter
  public function setUserData($user_data) {
    $this->user_data = $user_data;
  }

  //this is a boolean function that returns true if the user exist, else false if it doesn't.
  //to successfully authenticate the user, the password and all of his user credentials must match.
  public function authenticate(){
    if($this->user_data !== NULL && $this->email !== NULL){
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
}