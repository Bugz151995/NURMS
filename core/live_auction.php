<?php 
require('../src/api/header.php');
require('../src/api/shop.php');

//if the user selected a shop from the auction house page the get the shop details else get the shop of the web app owner
if(isset($_POST['auction_house_btn'])){
  $shop = new Shop($_SESSION['USER_ID']);
  $shop->fetchShop($mysqli, $_POST['shop_id']);
} else {
  $shop = new Shop($_SESSION['USER_ID']);
  $shop->fetchShop($mysqli, '1');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-ezquiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link href="../src/css/main.css" rel="stylesheet" />
  </head>
  <body class="sb-nav-fixed">

    <!--Top Navbar-->
    <nav id="top-navbar" class="sb-topnav navbar navbar-expand navbar-light bg-white justify-content-between">
      <!-- Top navigation link icons-->
      <div class="navbar-brand">
        <div class="bg-transparent d-flex align-items-center justify-content-between fs-topnav" style="width: 250px">
          <img src="../src/img/logo_dark.png" class="pl-3" width="56" height="56" style="object-fit: contain" id="appLogo" alt="">
          <!-- Sidebar Toggle-->
          <div class="pl-4" id="sidebarToggle">
            <button class="side-nav-toggle-bg btn" style="color: #5E35B1;" href="#!">
              <i class="lni lni-menu"></i>
            </button>
          </div>
        </div>
      </div>
      
      <div class="navbar-nav fs-topnav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="input-group search-bar">
              <button class="search-btn" style="color: #5E35B1;" href="#" role="button" aria-expanded="false">
                <i class="lni lni-search-alt"></i>
              </button>
              <input type="search" class="search-input" placeholder="Search" name="" id="">
            </div>
          </li>
          <li class="nav-item d-none">
            <a class="nav-link top-nav-icons" style="color: #5E35B1;" href="#" role="button" aria-expanded="false">
              <i class="lni lni-search-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link top-nav-icons" style="color: #5E35B1;" href="#" role="button" aria-expanded="false">
              <i class="lni lni-cart"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link top-nav-icons" style="color: #5E35B1;" href="#" role="button" aria-expanded="false">
              <i class="lni lni-alarm"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link top-nav-icons" style="color: #5E35B1;" href="#" role="button" aria-expanded="false">
              <i class="lni lni-question-circle"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link top-nav-icons" style="color: #5E35B1;" href="#" role="button" aria-expanded="false">
              <i class="lni lni-user"></i>
            </a>
          </li>
        </ul>
      </div>      
    </nav>

    <!--Contains layout of sidenav and the main content-->
    <div id="layoutSidenav">

      <!--Side Navbar-->
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light bg-white fs-sidenav" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <!--Side Navbar's navigation links-->
            <div class="nav">
              <!--Core links Header-->
              <div class="sb-sidenav-menu-heading"><h6>Core</h6></div>
              <!--Home link-->
              
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link" href="home.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-home fa-fw"></i>
                  </div>
                  Home
                </a>
              </div>
              <!--Numismatic Product Link-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link" href="products.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fab fa-product-hunt fa-fw"></i>
                  </div>
                  Numismatic Items
                </a>
              </div>
              
              <!--Auction Product Link-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link dropdown-toggle active" role="button" href="#" data-toggle="dropdown" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-gavel fa-fw"></i>
                  </div>
                  Auction <span class="text-right w-100"></span>
                </a>
                <ul class="remove-list-style-type">
                  <li class="text-decoration-none">
                    <a class="nav-link bg-transparent" href="auction_house.php">
                      Auction House
                    </a>
                  </li>
                  <li class="text-decoration-none">
                    <a class="nav-link active bg-transparent" href="live_auction.php">
                      Live Auction
                    </a>
                  </li>
                  <li class="text-decoration-none">
                    <a class="nav-link bg-transparent" href="closed_auction.php">
                      Closed Auction
                    </a>
                  </li>
                  <li class="text-decoration-none">
                    <a class="nav-link bg-transparent" href="my_bids.php">
                      My Bids
                    </a>
                  </li>
                </ul>
              </div>              
              
                
              <div class="sb-sidenav-menu-heading"><h6>Services</h6></div>
              <!--Account Verification-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="../services/account_verification.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-check fa-fw"></i>
                  </div>
                  Account Verification
                </a>
              </div>
              <!--Events-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="../services/events.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-calendar-check fa-fw"></i>
                  </div>
                  Events
                </a>
              </div>
              <!--My Orders-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="../services/myorders.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-list fa-fw"></i>
                  </div>
                  My Orders
                </a>
              </div>
              <!--Cart-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="../services/mycart.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-shopping-cart fa-fw"></i>
                  </div>
                  My Cart
                </a>
              </div>

              <div class="sb-sidenav-menu-heading">
                <h6>Settings</h6>
              </div>
              <!--My Account-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="../settings/myaccount.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-circle fa-fw"></i>
                  </div>
                  My Account
                </a>
              </div>
              <!--Help-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="../settings/help.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-question-circle fa-fw"></i>
                  </div>
                  Help
                </a>
              </div>
              <!--Logout-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-sign-out-alt fa-fw"></i>
                  </div>
                  Sign Out
                </a>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <!--Main Content-->
      <div id="layoutSidenav_content">
        <main id="mainContent">
          <!--Contains Breadcrumbs, shop selection, and shop description-->
          <div class="main-bg p-4">
            <!--Breadcrumb-->
            <div class="page__section">
              <nav class="breadcrumb p-0 pt-1 bg-transparent fs-breadcrumb" aria-label="Breadcrumb">
                <ol class="breadcrumb__list r-list">
                  <li class="breadcrumb__group">
                    <i class="fas fa-home fa-sm ml-2"></i>
                    
                    <a href="home.php" class="breadcrumb__point r-link ml-2">Home</a>
                    <span class="fs-header breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                  <li class="breadcrumb__group">
                    <a href="auction_house.php" class="breadcrumb__point r-link">Auction House</a>
                    <span class="fs-header breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                  <li class="breadcrumb__group">
                    <span href="#" class="breadcrumb__point">Live Auction</span>
                  </li>
                </ol>
              </nav>
            </div>

            <!-- shop information -->
            <div class="row pb-3 pt-2">
              <div class="col-8 row no-gutters">
                <!-- shop logo -->
                <div class="col-md-5 col-sm-5">
                  <?php                    
                    if($shop->getShopLogo() !== NULL){
                      echo '<img src="data:image/jpeg;base64,'.base64_encode($shop->getShopLogo()).'"/ class="shop-logo-auction-size pb-3 rounded">';
                    } else echo '<img src="https://dummyimage.com/300x150/000/fff"/ class="shop-logo-auction-size pb-3 rounded">';                    
                  ?>
                </div>
                <!-- shop name and chat button -->
                <div class="col-md-7 col-sm-7 d-flex align-items-center">
                  <!-- shop name -->
                  <h6 class="fs-shop-name p-3"><?php echo $shop->getShopName()?></h6>
                </div>
              </div>
              
              <div class="col-4 w-100 d-inline-flex flex-column align-items-end justify-content-center">
                <!-- view profile button -->
                <a class="fs-btn btn btn-sm shadow-sm view-profile-btn mb-3" href="products.php"><i class="fas fa-eye"></i> View</a>
                <!-- chat button -->
                <button class="fs-btn btn btn-sm shadow-sm chat-btn"><i class="fas fa-comment-dots"></i> Chat</button>
              </div>
            </div>
            
            <!-- alert info -->
            <div class="alert alert-success shadow-sm">
              <h5 class="fs-header font-weight-bold">Ongoing Live Auction!</h5>
              <p class="fs-alert">
                Welcome to the 
                  <span>
                    <?php echo $shop->getShopName()?>
                  </span> 
                Auction House! Please feel free to browse and bid in any of our numismatic items. 
              </p>
            </div>

            <!-- alert info -->
            <div class="alert alert-primary shadow-sm fs-alert">
              <strong>Tip:</strong> Click the image of the catalog to view the item and start bidding.
            </div>
          </div>

          <!-- auctioned items -->
          <div class="main-bg p-4 mt-4">
            <!-- pagination -->
            <nav aria-label="Page Navigation" class="pt-3 pb-2">
              <ul class="pagination align-items-center justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="fas fa-angle-double-left fa-sm"></i>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="fas fa-angle-double-right fa-sm"></i>
                  </a>
                </li>
              </ul>
            </nav>           

            <!-- catalogs of products -->
            <div class="pt-2 pb-4">
              <!-- flexbox container of the products -->
              <div id="on-auction-products" class="d-flex flex-wrap no-gutters">
              <?php 

                //initialization of the auction products, images, and bid status
                $auctionProducts = getAuctionProducts($con, "1");
                $auctionProductImg = getAuctionProductImg($con, "1");
                $totalProducts = count($auctionProducts);

                $i = 0;
                while($i < $totalProducts){
              ?>
                <!-- product catalog -->
                <div class="p-1 col-md-6">
                  <div class="card position-relative shadow-sm">
                  
                    <div class="card-header mb-n3 border-0 bg-white" onclick="redirect('bid_status.php')">
                      <!-- container for the product image -->
                      <div class="product-img d-inline-flex w-100 justify-content-around pt-3">
                        <?php
                          //call the obverse and reverse images from the result set with variable name $auctionProductImg.
                          echo '<img src="data:image/jpeg;base64,'.base64_encode( $auctionProductImg[$i]['obverse_img'] ).'" class="p-2"/>';
                          echo '<img src="data:image/jpeg;base64,'.base64_encode( $auctionProductImg[$i]['reverse_img'] ).'" class="p-2"/>';
                        ?>
                      </div>
                    </div>

                    <!-- badge that displays the total bidders -->
                    <?php
                      //get the total count of bids of an auctioned item
                      $bidStatus = countTotalBid($con, $auctionProducts[$i]['lot_id']);
                    ?>
                    <h6>
                      <span class="bid-status badge badge-success position-absolute p-to-tl shadow-sm">
                        <span>
                          <?php 
                            echo $bidStatus;
                          ?>
                        </span>
                        BIDDERS
                      </span>
                    </h6>
                    
                    <!-- badge that displays the maximum bid -->
                    <h5>
                      <span class="bid-price badge badge-danger shadow-sm position-absolute p-to-br d-flex align-items-center">
                        <span>
                          &#8369;
                          <?php echo $auctionProducts[$i]['current_bid'];?>
                        </span>
                      </span>
                    </h5>

                    <!-- badge that displays ongoing -->
                    <div class="bg-warning card-body">
                      <!-- container for the product name -->
                      <div class="lh-sm">
                        <span class="product-name">
                          <?php echo $auctionProducts[$i]['product_name'];?>
                        </span>
                      </div>
                      <!-- container for the auctioner -->
                      <div class="lh-1">
                        <a href="" class="auctioner">
                          <?php echo $auctionProducts[$i]['shop_name'];?>
                        </a>
                      </div>
                    </div>
                    
                    <!-- container with a bg-warning -->
                    <div class="card-footer border-0 bg-warning">
                      <!-- status of the auction -->
                      <div class="bid-status pt-3">
                        <!-- estimate and current price of the item -->
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="">
                            <strong>Estimate:</strong>
                            <span>
                              &#8369;
                              <?php echo $auctionProducts[$i]['estimate_price'];?>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
                  $i++;
                }
              ?>
              </div>
            </div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">&copy; Numisworks Auction Product Trading est. 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
      </div>
    </div>

  <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../src/js/toggle-sidenav.js"></script>
    <script src="../src/js/redirect.js"></script>
  </body>
</html>
