<?php
class SignIn{
  private $status;
  
  public function __construct(){
    session_start();
  }

  //returns true if the user is signed in, else false will be returned
  public function status(){
    if(isset($_SESSION['USER_ID'])){
      $this->status = true;
    } else $this->status = false;
  }

  //returns true if the user is signed in, else false will be returned
  public function destroy(){
    if(isset($_SESSION)){
      session_destroy();
    }
  }

  public function confirm(){
    echo "<script type='text/javascript'> console.log(" . $this->status . ") </script>";
    if(!$this->status){
      header("Location: ../../index.php");
    }
  }
}