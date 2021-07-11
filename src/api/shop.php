<?php
class Shop{
  protected $user_id;  
  protected $shop_id;
  private $shop_name;
  private $shop_desc;
  private $shop_logo;
  private $shop_data_arr;

  public function __constructor($user_id){
    $this->user_id = $user_id;
  }

  public function fetchShop($mysqli, $shop_id) {
    $stmt = $mysqli->prepare("SELECT s.shop_id, s.shop_name, s.shop_description, i.shop_img FROM shops s LEFT JOIN shops_images i ON s.shop_id = i.shop_id WHERE s.shop_id = ?");
    $stmt->bind_param("i", $shop_id);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows === 0) exit('No rows');
    
    $stmt->bind_result($this->shop_id, $this->shop_name, $this->shop_desc, $this->shop_logo);
    $stmt->fetch();
    $stmt->close();
  }

  public function fetchMyShop($mysqli) {
    $stmt = $mysqli->prepare("SELECT s.shop_id, s.shop_name, s.shop_description, i.shop_img FROM shops s LEFT JOIN shops_images i ON s.shop_id = i.shop_id WHERE s.user_id = ?");
    $stmt->bind_param("i", $this->user_id);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows === 0) exit('No rows');
    
    $stmt->bind_result($this->shop_id, $this->shop_name, $this->shop_desc, $this->shop_logo);
    $stmt->fetch();
    $stmt->close();
  }

  public function fetchAllShop($mysqli) {
    $stmt = $mysqli->prepare("SELECT s.shop_id, s.shop_name, s.shop_description, i.shop_img FROM shops s LEFT JOIN shops_images i ON s.shop_id = i.shop_id");
    $stmt->execute();
    $result = $stmt->get_result();

    if($result) {
      while($row = $result->fetch_assoc()){
        $this->shop_data_arr[] = $row;
      }
    } else exit('No rows');
    $stmt->close();
  }

  //getter of shops
  public function getShopArr(){
    return $this->shop_data_arr;
  }

  //getters of a shop
  public function getShopId(){
    return $this->shop_id;
  }

  public function getShopName(){
    return $this->shop_name;
  }

  public function getShopDesc(){
    return $this->shop_desc;
  }

  public function getShopLogo(){
    return $this->shop_logo;
  }

  //setters of a shop
  public function setShopId($shop_id){
    $this->shop_id;
  }

  public function setShopName($shop_name){
    $this->shop_name;
  }

  public function setShopDesc($shop_desc){
    $this->shop_desc;
  }

  public function setShopLogo($shop_logo){
    $this->shop_logo;
  }
}