<?php
class Bid {
  private $user_id;
  private $username;
  private $bid_price;
  private $bid_log;
  private $lot_id;
  private $bid_count;
  private $next_bid_price;
  private $bidders;
  
  public function __construct($lot_id) {
    $this->lot_id = $lot_id;
  }

  public function fetchAllBidders($mysqli) {
    $stmt = $mysqli->prepare("SELECT u.username, max(b.bid_price), b.bid_log FROM bids b INNER JOIN users u ON u.user_id = b.user_id WHERE lot_id = ? GROUP BY b.user_id");
    $stmt->bind_param("i", $this->lot_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result) {
      while ($row = $result->fetch_assoc()) {
        $this->bidders[] = $row;
      }
    } exit("No result");
    $stmt->close();
  }

  public function fetchCurrentBid($mysqli) {
    $stmt = $mysqli->prepare("SELECT MAX(bid_price), bid_log FROM bids WHERE lot_id = ? GROUP BY user_id ORDER BY bid_price ASC LIMIT 1");
    $stmt->bind_param("i", $this->lot_id);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows === 0) exit("No result");

    $stmt->bind_result($this->bid_price, $this->bid_log);
    $stmt->fetch();
    $stmt->close();
  }

  public function countBid($mysqli) {
    $stmt = $mysqli->prepare("SELECT count(*)a FROM bids WHERE lot_id = ? GROUP BY user_id");
    $stmt->bind_param("i", $this->lot_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) exit("No result");

    $result = $stmt->bind_result($this->bid_count);
    $stmt->fetch();
    $stmt->close();
  }

  public function computeNextBidPrice($current_bid, $increment) {
    $this->next_bid_price = $current_bid + $increment;
    return $this->next_bid_price;
  }

  //getters
  public function getBidder() {
    return $this->username;
  }

  public function getBidPrice() {
    return $this->bid_price;
  }
  
  public function getBidLog() {
    return $this->bid_log;
  }

  public function getBidCount() {
    return $this->bid_count;
  }

  //setters
  public function setBidPrice($bid_price) {
    $this->bid_price = $bid_price;
  }
  
  public function setBidLog($bid_log) {
    $this->bid_log = $bid_log;
  }
}