<?php
//get auctioned products based on the selected shop
//join tables 
function getLot($con, $shop){
  $auctionDescQuery = "SELECT * FROM lots au INNER JOIN shops s ON au.shop_id = s.shop_id INNER JOIN products p ON au.product_id = p.product_id WHERE au.shop_id = '$shop'";

  $result = mysqli_query($con, $auctionDescQuery);

  //fetch the result, if there is a result then store the data to an array else display the error in console.log
  $auctionProducts = array();
  if($result){
    while($row = mysqli_fetch_assoc($result)){
      $auctionProducts[] = $row;
    }
    mysqli_free_result($result);
  } else {
    return "<script>console.log(".mysqli_error($con).");</script>";
  }
  return $auctionProducts;
  mysqli_close($con);
}

function getLotImg($con, $shop){
  $auctionImageQuery = "SELECT pg.obverse_img, pg.reverse_img FROM lots au INNER JOIN shops s ON au.shop_id = s.shop_id INNER JOIN products p ON au.product_id = p.product_id INNER JOIN products_images pg ON pg.product_id = p.product_id WHERE au.shop_id = '$shop'";

  $result = mysqli_query($con, $auctionImageQuery);

  //fetch the result, if there is a result then store the data to an array else display the error in console.log
  $productImg = array();
  if($result){
    while($row = mysqli_fetch_assoc($result)){
      $productImg[] = $row;
    }
    mysqli_free_result($result);
  } else {
    return "<script>console.log(".mysqli_error($con).");</script>";
  }
  return $productImg;
  mysqli_close($con);
}

function getBidStatus($con, $lotId){
  $biddersQuery = "SELECT * FROM bids WHERE lot_id = '$lotId'";

  $result = mysqli_query($con, $biddersQuery);

  $bidders = array();
  if($result){
    while($row = mysqli_fetch_assoc($result)){
      $bidders[] = $row;
    }
  } else {
    return "<script>console.log(".mysqli_connect_error().");</script>";
  }
  return $bidders;
}

function countTotalBid($con, $lotId){
  $biddersQuery = "SELECT count(*)c FROM bids WHERE lot_id = '$lotId'";

  $result = mysqli_query($con, $biddersQuery);

  $count = 0;
  if($result){
    while($row = mysqli_fetch_assoc($result)){
      $count = $row['c'];
    }
  } else {
    return "<script>console.log(".mysqli_connect_error().");</script>";
  }
  return $count;
}
?>