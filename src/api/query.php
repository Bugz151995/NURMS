<?php
class Query {
  private $stmt;
  private $result_data;

  public function __constructor(mysqli $stmt) {
    $this->stmt = $stmt;
  }

  public function fetchData() {
    $this->result = $this->stmt->get_result();

    while($row = $this->result->fetch_assoc()){
      $this->result_data = $row;
    }
    if(!$this->result_data) exit('No rows');
    $this->stmt->close();
  }

  public function getResult(){
    return $this->result_data;
  }

  public function insertResult() {
    if($this->stmt->affected_rows === 0) exit('No rows inserted');
    $this->stmt->close();
  }

  public function updateResult() {
    if($this->stmt->affected_rows === 0) exit('No rows updated');
    $this->stmt->close();
  }

  public function deleteResult() {
    if($this->stmt->affected_rows === 0) exit('No rows deleted');
    $this->stmt->close();
  }
}