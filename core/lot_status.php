<?php 
require('../src/api/header.php');
require('../src/api/shop.php');
require('../src/api/auction.php');
require('../src/api/lot.php');
require('../src/api/item.php');
require('../src/api/bid.php');

if(isset($_POST['SHOP_ID']) && isset($_POST['LOT_ID'])) {
  $shop = new Shop($_SESSION['USER_ID']);
  $shop->fetchShop($mysqli, $_POST['SHOP_ID']);

  $auction = new Auction($_POST['SHOP_ID']);
  $auction->fetchAuctionLot($mysqli, $_POST['LOT_ID']);

  $lot = new Lot($_POST['LOT_ID']);
  $lot->fetchLot($mysqli);

  $item = new Item($_POST['SHOP_ID'], $lot->getLotItemId());
  $item->fetchItem($mysqli);

  $bid = new Bid($lot->getLotId());
  $bid->fetchCurrentBid($mysqli);

  date_default_timezone_set("asia/manila");
  $current_date = date("Y-m-d H:m:i");
} else header("Location: live_auction.php");

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
  <body class="sb-nav-fixed bg-light">
  
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
                <ul class="remove-list-style-type mb-0">
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
                    <a class="nav-link bg-transparent" href="watch_list.php">
                      My Watch List
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
          <div class="main-bg pt-2 pb-4 pl-3 pr-3">
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
                    <a href="live_auction.php" class="breadcrumb__point r-link">Live Auction</a>
                    <span class="fs-header breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                  <li class="breadcrumb__group">
                    <span href="#" class="breadcrumb__point">Lot</span>
                  </li>
                </ol>
              </nav>
            </div>

            <div class="pt-2">
              <div class="fs-alert alert alert-primary rounded shadow-sm">
                <strong>Welcome to the auction lot page!</strong><br>
                <?php
                  if(strtotime($auction->getAuctionStart()) < strtotime($current_date) &&  strtotime($current_date) < strtotime($auction->getAuctionEnd())) {
                ?>
                 The lot that is currently on auction will end on 
                  <!-- date -->
                  <?php 
                    echo "<strong>".date("F d, Y @ h:m a", strtotime($auction->getAuctionEnd()))."</strong>";

                  } else if(strtotime($current_date) < strtotime($auction->getAuctionStart()) && strtotime($current_date) < strtotime($auction->getAuctionEnd())) {

                    echo "The bidding on the lot will start on <strong>".date("F d, Y @ h:m a", strtotime($auction->getAuctionStart()))."</strong>";

                  } else echo "We are sorry to inform you that the bidding for the lot has ended.";
                  ?>
                  <input type="hidden" value="<?php echo $auction->getAuctionStart()?>" id="auctionStartDate">
                  <input type="hidden" value="<?php echo $auction->getAuctionEnd()?>" id="auctionEndDate">
              </div>
              <!-- rules -->
              <div class="fs-alert alert alert-warning">
                <strong>Rules:</strong>
                <div class="pt-2">
                  <?php
                    echo $auction->getAuctionRules();
                  ?>
                </div>
              </div>
            </div>
          </div>

          <!--Auctioned Item Section-->
          <section class="main-bg mt-4 position-relative">
            <div class="text-center bid-product-header position-absolute pl-3 pt-3 pb-1 pr-3 w-100">
              <h4 class="fs-header font-weight-bold">
                <span class="text-capitalize">
                  <?php 
                    echo $item->getItemName();
                  ?>
                </span>
                <span>|</span>
                <a href="live_auction.php">
                  <?php echo $shop->getShopName();?>
                </a>
              </h4>
            </div>
            <div class="container-fluid mt-4">

              <!--Auctioned Item Description-->
              <div class="pt-5">
                <div class="fs-alert alert alert-info p-2 mt-4">
                  <strong>Tip:</strong> Click the bid button and select the desired bid to place your bid. You can also add it to watch list upon clicking the watch button.
                </div>
                <div class="row mb-4 pt-4">
                  <div class="col-md-7">
                    <div id="bidStatusItem" class="row no-gutters align-items-start shadow-sm">
                      <?php
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($item->getItemObverseImg()).'" class="p-2 reverse-img col-6"/>';
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($item->getItemReverseImg()).'" class="p-2 obverse-img col-6"/>';
                      ?>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div id="bidEndDateTime" class="p-2 d-flex align-items-center justify-content-center shadow-sm fs-bid-time">
                      <div id="time" class="bg-secondary rounded text-white d-inline-flex align-items-center time-border">
                        <span class="fs-minute bg-secondary rounded mr-1">
                          Ends in :
                        </span>
                        <span id="days" class="fs-minute time-border bg-dark rounded ">
                        </span>
                        <span class="p-1">:</span>
                        <span id="hours" class="fs-minute time-border bg-dark rounded ">
                        </span>
                        <span class="p-1">:</span>
                        <span id="minutes" class="fs-minute time-border bg-dark rounded">
                        </span>
                        <span class="p-1">:</span>
                        <span id="seconds" class="fs-minute time-border bg-dark rounded">
                        </span>
                      </div>                      
                    </div>
                    <div class="p-4 bid-status-data fs-bid-status">

                      <!-- current bid -->
                      <div class="pb-2">
                        <span>Current Bid:</span>
                        <span class="font-weight-bold">&#8369;
                          <span>
                            <?php
                              echo $bid->getBidPrice();
                            ?>
                          </span>
                        </span>
                      </div>

                      <!-- estimate price -->
                      <div class="pb-2">
                        <span>Estimate:</span>
                        <span class="font-weight-bold">&#8369;
                          <span>
                            <?php
                              echo $lot->getLotEstimate();
                            ?>
                          </span>
                        </span>
                      </div>

                      <!-- bid increment -->
                      <div class="pb-2">
                        <span>Increment:</span>
                        <span class="font-weight-bold">&#8369;
                          <span>
                            <?php
                              echo $lot->getLotBidInc();
                            ?>
                          </span>
                        </span>
                      </div>
                    </div>
                    
                    <!-- button for bidding -->
                    <div class="pt-3">
                      <form action="" class="fs-btn">
                        <!-- container for bid button -->
                        <div class="bid-btn-container input-group form-group shadow-sm">
                          <span class="border-0 input-group-text bid-peso-sign fs-btn pr-0">
                            &#8369;
                          </span>
                          <?php 
                            $next_bid_price =  $bid->computeNextBidPrice($bid->getBidPrice(), $lot->getLotBidInc());
                          ?>
                          <input id="bidInputNumber" value="<?php echo $next_bid_price;?>" type="number" step="100" min="<?php echo $next_bid_price;?>" class="fs-btn form-control-lg form-control input-rounded-2 border-0">
                          <button id="bidBtn" class="fs-btn btn bid-btn">
                            <i class="fas fa-gavel"></i>&nbsp;
                            Bid
                          </button>
                          <div id="watchBtn" class="fs-btn btn bid-btn d-flex align-items-center">
                            <i class="fas fa-binoculars"></i>&nbsp;
                            Watch
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="row mt-3 fs-bid-status-other-info">
                  <div class="col-md-12 mb-4">
                    <div class="bid-status-other-info p-4">
                      <strong>
                        Notes and Description:
                      </strong>
                      <div class="pt-2">
                        <?php
                          echo $item->getItemNoteDesc();
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
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
    <script src="../src/js/disable-keypress.js"></script>
    <script src="../src/js/countdown-timer.js"></script>    
  </body>
</html>
