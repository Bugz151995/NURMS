<?php
class Auction {
  private $shop_id;
  private $lot_id;

  public function __construct($shop_id, $lot_id) {
    $this->shop_id = $shop_id;
    $this->lot_id = $lot_id;
  }

  //fetch one auction lot
  public function fetchAuctionLot($mysqli) {

  }

  //fetch all auction lot
  public function fetchAllAuctionLot($mysqli) {

  }
}