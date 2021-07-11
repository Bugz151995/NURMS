<?php
class Item {
  protected $item_id;
  protected $item_name;
  protected $item_comp;
  protected $item_weight;
  protected $item_diameter;
  protected $item_note_desc;
  protected $item_obverse_img;
  protected $item_reverse_img;
  private $shop_id;

  public function __construct($shop_id) {
    $this->shop_id = $shop_id;
  }

  public function fetchItem($mysqli, $item_id) {
    
  }

  public function fetchAllItem($mysqli) {
    $stmt = $mysqli->prepare("SELECT ");
  }

  //getters
  public function getItemId() {
    return $this->item_id;
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
  public function setItemId($item_id) {
    $this->item_id = $item_id;
  }

  public function setItemName($item_name) {
    $this->item_name = $item_name;
  }

  public function setItemCompName($item_comp) {
    $this->item_comp = $item_comp;
  }

  public function setItemWeight($item_weight) {
    $this->item_weight = $item_weight;
  }

  public function setItemDiameter($item_diameter) {
    $this->item_diameter = $item_diameter;
  }

  public function setItemNoteDesc($item_note_desc) {
    $this->item_note_desc = $item_note_desc;
  }

  public function setItemObverseImg($item_obverse_img) {
    $this->item_obverse_img = $item_obverse_img;
  }

  public function setItemReverseImg($item_reverse_img) {
    $this->item_reverse_img = $item_reverse_img;
  }
}