<?php
class Item {
  private $item_id;
  private $item_name;
  private $item_comp;
  private $item_weight;
  private $item_diameter;
  private $item_note_desc;
  private $item_obverse_img;
  private $item_reverse_img;
  private $shop_id;

  public function __construct($shop_id, $item_id) {
    $this->shop_id = $shop_id;
    $this->item_id = $item_id;
  }

  public function fetchItem($mysqli) {
    $stmt = $mysqli->prepare("SELECT n.item_name, n.item_composition, n.item_weight, n.item_diameter, n.item_note_description, i.obverse_img, i.reverse_img FROM shops_has_items sn INNER JOIN items n ON sn.item_id = n.item_id INNER JOIN items_images i ON n.item_id = i.item_id WHERE sn.shop_id = ? AND sn.item_id = ?");
    $stmt->bind_param("ii", $this->shop_id, $this->item_id);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows === 0) exit("No result");

    $stmt->bind_result($this->item_name, $this->item_composition, $this->item_weight, $this->item_diameter, $this->item_note_desc, $this->item_obverse_img, $this->item_reverse_img);
    $stmt->fetch();
    $stmt->close();
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