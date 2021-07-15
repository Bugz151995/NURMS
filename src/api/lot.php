<?php
class Lot {
  private $lot_id;
  private $lot_estimate_price;
  private $lot_bid_inc;
  private $item_id;

  private $lot_count;

  public function __construct($lot_id){
    $this->lot_id = $lot_id;
  }

  public function fetchLot($mysqli) {
    $stmt = $mysqli->prepare("SELECT estimate_price, bid_increment, item_id FROM lots WHERE lot_id = ?");
    $stmt->bind_param("i", $this->lot_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) exit("No result");

    $result = $stmt->bind_result($this->lot_estimate_price, $this->lot_bid_inc, $this->item_id);
    $stmt->fetch();
    $stmt->close();
  }

  //getters
  public function getLotId() {
    return $this->lot_id;
  }

  public function getLotEstimate() {
    return $this->lot_estimate_price;
  }

  public function getLotBidInc() {
    return $this->lot_bid_inc;
  }

  public function getLotItemId() {
    return $this->item_id;
  }

  //setters
  public function setLotId($lot_id) {
    $this->lot_id = $lot_id;
  }

  public function setLotEstimatePrice($lot_estimate_price) {
    $this->lot_estimate_price = $lot_estimate_price;
  }

  public function setLotBidInc($lot_bid_inc) {
    $this->lot_bid_inc = $lot_bid_inc;
  }

  public function setLotItemId($item_id) {
    $this->item_id = $item_id;
  }
}