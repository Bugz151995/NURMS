<?php
class Lot {
  protected $lot_id;
  protected $lot_estimate_price;
  protected $lot_current_bid;
  protected $lot_bid_inc;
  protected $lot_name;
  protected $lot_comp;
  protected $lot_weight;
  protected $lot_diameter;
  protected $lot_note_desc;
  protected $lot_obverse_img;
  protected $lot_reverse_img;

  private $lot_count;
  private $lot_data;
  private $shop_id;

  public function __construct($shop_id){
    $this->shop_id = $shop_id;
  }

  public function fetchLot($mysqli) {
    $stmt = $mysqli->prepare("SELECT l.lot_id, l.estimate_price, l.current_bid, l.bid_increment FROM lots l INNER JOIN items i ON l.item_id = l.item_id WHERE shop_id = ?");
    $stmt->bind_param("i", $this->shop_id);
    $stmt->execute();

    $result = $stmt->get_result();
    if($result) {
      while($row = $result->fetch_assoc()) {
        $this->lot_data[] = $row;
      }
    }
  }

  public function fetchAllLot($mysqli) {
    $stmt = $mysqli->prepare("SELECT l.lot_id, l.estimate_price, l.current_bid, l.bid_increment FROM lots l INNER JOIN items i ON l.item_id = l.item_id WHERE shop_id = ?");
    $stmt->bind_param("i", $this->shop_id);
    $stmt->execute();

    $result = $stmt->get_result();
    if($result) {
      while($row = $result->fetch_assoc()) {
        $this->lot_data[] = $row;
      }
    }
  }

  public function countLot($mysqli) {
    $stmt = $mysqli->prepare("SELECT count(*)a FROM lots l INNER JOIN items i ON l.item_id = l.item_id WHERE shop_id = ?");
    $stmt->bind_param("i", $this->shop_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) exit("No result");

    $result = $stmt->bind_result($this->lot_count);
    $stmt->fetch();
    $stmt->close();
  }

  //getters
  protected function getLotId() {
    return $this->lot_id;
  }

  protected function getEstimatePrice() {
    return $this->lot_estimate_price;
  }

  protected function getLotCurrentBid() {
    return $this->lot_current_bid;
  }

  protected function getLotBidInc() {
    return $this->lot_bid_inc;
  }

  public function getItemName() {
    return $this->item_name;
  }

  public function getItemCompName() {
    return $this->item_comp;
  }

  public function getItemWeight() {
    return $this->item_weight;
  }

  public function getItemDiameter() {
    return $this->item_diameter;
  }

  public function getItemNoteDesc() {
    return $this->item_note_desc;
  }

  public function getItemObverseImg() {
    return $this->item_obverse_img;
  }

  public function getItemReverseImg() {
    return $this->item_reverse_img;
  }

  //setters
  protected function setLotId($lot_id) {
    $this->lot_id;
  }

  protected function setEstimatePrice($lot_estimate_price) {
    $this->lot_estimate_price;
  }

  protected function setLotCurrentBid($lot_current_bid) {
    $this->lot_current_bid;
  }

  protected function setLotBidInc($lot_bid_inc) {
    $this->lot_bid_inc;
  }
}