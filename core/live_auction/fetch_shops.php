<?php
function getShops($con){
  $getShopQuery = "SELECT * FROM `shops` s;";

  $result = mysqli_query($con, $getShopQuery);

  if($result){
    while($row = mysqli_fetch_assoc($result)){
      $shops[] = $row;
    }
    mysqli_free_result($result);
  } else {
    return "<script>console.log(".mysqli_error($con).");</script>";
  }
  
  return $shops;
  mysqli_close($con);
}

function getShopLogo($con, $shopId){
  $shopLogo = "SELECT si.shop_img FROM shops_images si INNER JOIN shops s ON si.shop_id = s.shop_id WHERE si.shop_id = '$shopId'";

  $result = mysqli_query($con, $shopLogo);

  $logo = null;
  if($result){
    while($row = mysqli_fetch_assoc($result)){
      $logo = $row['shop_img'];
    }
  } else {
    return "<script>console.log(".mysqli_error($con).");</script>";
  }
  return $logo;
}