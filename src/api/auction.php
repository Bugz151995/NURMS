<?php
class Auction {
  private $auction_start;
  private $auction_end;
  private $auction_rules;
  private $auction_data;
  private $auction_date;

  private $shop_id;
  private $lot_id;
  private $lot_count;

  public function __construct($shop_id) {
    $this->shop_id = $shop_id;
  }

  //fetch an auction lot
  public function fetchAuctionLot($mysqli, $lot_id) {
    $stmt = $mysqli->prepare("SELECT auction_start, auction_end, auction_rule, lot_id FROM auctions WHERE shop_id = ? AND lot_id = ?");
    $stmt->bind_param("ii", $this->shop_id, $lot_id);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows === 0) exit("No result");
    $stmt->bind_result($this->auction_start, $this->auction_end, $this->auction_rules, $this->lot_id);
    $stmt->fetch();
    $stmt->close();
  }

  //fetch all auction lot
  public function fetchAllAuctionLot($mysqli) {
    $stmt = $mysqli->prepare("SELECT auction_start, auction_end, auction_rule, lot_id FROM auctions WHERE shop_id = ?");
    $stmt->bind_param("i", $this->shop_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result) {
      while ($row = $result->fetch_assoc()) {
        $this->auction_data[] = $row;
      }
    } else exit("No result");
    $stmt->close();
  }

  public function countLot($mysqli) {
    $stmt = $mysqli->prepare("SELECT count(*)a FROM lots WHERE shop_id = ?");
    $stmt->bind_param("i", $this->shop_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) exit("No result");

    $result = $stmt->bind_result($this->lot_count);
    $stmt->fetch();
    $stmt->close();
  }

  public function fetchOngoingEvents($mysqli, $date){
    $stmt = $mysqli->prepare("SELECT min(auction_start)ast, max(auction_end)aen FROM auctions WHERE shop_id = ? GROUP BY shop_id HAVING min(auction_start) < ? AND max(auction_end) > ?");
    $stmt->bind_param("iss", $this->shop_id, $date, $date);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result) {
      while ($row = $result->fetch_assoc()) {
        $this->auction_date = $row;
      }
    } else exit("No result");
    $stmt->close();
  }

  public function fetchUpcommingEvents($mysqli, $date){
    $stmt = $mysqli->prepare("SELECT min(auction_start)ast, max(auction_end)aen FROM auctions WHERE shop_id = ? GROUP BY shop_id HAVING min(auction_start) > ? AND max(auction_end) < ?");
    $stmt->bind_param("iss", $this->shop_id, $date, $date);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result) {
      while ($row = $result->fetch_assoc()) {
        $this->auction_date = $row;
      }
    } else exit("No result");
    $stmt->close();
  }

  //getters
  public function getAuctionStart() {
    return $this->auction_start;
  }
  
  public function getAuctionEnd() {
    return $this->auction_end;
  }

  public function getAuctionRules() {
    return $this->auction_rules;
  }

  public function getLotCount() {
    return $this->lot_count;
  }

  public function getAuctionLot() {
    return $this->auction_data;
  }

  public function getAuctionDate() {
    return $this->auction_date;
  }

  //setters
  public function setAuctionStart($auction_start) {
    $this->auction_start = $auction_start;
  }
  
  public function setAuctionEnd($auction_end) {
    $this->auction_end = $auction_end;
  }

  public function setAuctionRule($auction_rule) {
    $this->auction_rule = $auction_rule;
  }

  public function setLotCount($lot_count) {
    $this->lot_count = $lot_count;
  }

  public function setAuctionLot($auction_data) {
    $this->auction_data = $auction_data;
  }
}