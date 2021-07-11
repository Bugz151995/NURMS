<?php
final class Database {
  protected const DB_HOST = "localhost";
  protected const DB_USER = "root";
  protected const DB_PASS = "";
  protected const DB_NAME = "nurms_db";
  private $mysqli;

  public function __construct(){
    try {
      $this->mysqli = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
      
    } catch(Exception $e) {
      error_log($e->getMessage());
      exit('Error connecting to database');
    }
  }

  public function connect(){
    return $this->mysqli;
  }
}