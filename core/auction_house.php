<?php 
require('../src/api/session.php');
require('../src/api/connect.php');
require('live_auction/fetch_shops.php');
require('live_auction/fetch_auction_products.php');
$con = openCon();
confirm_logged_in();
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
    <link href="../src/css/styles.css" rel="stylesheet" />
    <link href="../src/css/custom.css" rel="stylesheet" />
  </head>
  <body class="sb-nav-fixed bg-light" onload="responsiveLayout('#on-auction-products'),responsiveNav()">


    <!--Contains layout of sidenav and the main content-->
    <div id="layoutSidenav">

      <!--Side Navbar-->
      <div id="layoutSidenav_nav" class="side-nav-bg">
        <nav class="sb-sidenav accordion sb-sidenav-dark" style="opacity: 85%" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <!-- Top navigation numisworks logo -->
            <div class="d-flex text-white bg-transparent justify-content-start" style="width: 225px; height: 56px;">
              <img src="../src/img/logo_light.png" class="p-1" style="width: 225px; height: 56px; object-fit: contain">
            </div>
            <!--User's Profile Picture-->
            <div class="text-center my-2">
              <img class="img-fluid rounded-circle mb-4" src="https://dummyimage.com/150x150/6c757d/dee2e6.jpg" alt="..." />
              <h5 class="text-white fs-6">
                <?php echo $_SESSION['FIRST_NAME']." ".substr($_SESSION['MIDDLE_NAME'], 0, 1).". ".$_SESSION['LAST_NAME'];?>
              </h5>
              <p class="text-warning">Semi-Verified</p>
            </div>
            <!--Side Navbar's navigation links-->
            <div class="nav">
              <!--Core links Header-->
              <div class="sb-sidenav-menu-heading"><h6>Core</h6></div>
              <!--Home link-->
              <a class="nav-link" href="home.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-home fa-fw"></i>
                </div>
                Home
              </a>
              <!--Numismatic Product Link-->
              <a class="nav-link" href="products.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fab fa-product-hunt fa-fw"></i>
                </div>
                Numismatic Products
              </a>
              <!--Auction Product Link-->
              <a class="nav-link dropdown-toggle active" role="button" href="#" data-toggle="dropdown" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-gavel fa-fw"></i>
                </div>
                Auction <span class="text-right w-100"></span>
              </a>
              <ul class="remove-list-style-type">
                <li class="text-decoration-none">
                  <a class="nav-link active" href="live_auction.php">
                    <div class="sb-nav-link-icon">
                      <i class="fas fa-search-dollar fa-fw"></i>
                    </div>
                    Live Auction
                  </a>
                </li>
                <li class="text-decoration-none">
                  <a class="nav-link" href="closed_auction.php">
                    <div class="sb-nav-link-icon">
                      <i class="fas fa-file-invoice-dollar fa-fw"></i>
                    </div>
                    Closed Auction
                  </a>
                </li>
                <li class="text-decoration-none">
                  <a class="nav-link" href="my_bids.php">
                    <div class="sb-nav-link-icon">
                      <i class="fas fa-bold fa-fw"></i>
                    </div>
                    My Bids
                  </a>
                </li>
              </ul>
                
              <div class="sb-sidenav-menu-heading"><h6>Services</h6></div>
              <!--Account Verification-->
              <a class="nav-link collapsed" href="../services/account_verification.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-user-check fa-fw"></i>
                </div>
                Account Verification
              </a>
              <!--Events-->
              <a class="nav-link collapsed" href="../services/events.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-calendar-check fa-fw"></i>
                </div>
                Events
              </a>
              <!--My Orders-->
              <a class="nav-link collapsed" href="../services/myorders.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-list fa-fw"></i>
                </div>
                My Orders
              </a>
              <!--Cart-->
              <a class="nav-link collapsed" href="../services/mycart.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-shopping-cart fa-fw"></i>
                </div>
                My Cart
              </a>

              <div class="sb-sidenav-menu-heading">
                <h6>Settings</h6>
              </div>
              <!--My Account-->
              <a class="nav-link collapsed" href="../settings/myaccount.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-user-circle fa-fw"></i>
                </div>
                My Account
              </a>
              <!--Help-->
              <a class="nav-link collapsed" href="../settings/help.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-question-circle fa-fw"></i>
                </div>
                Help
              </a>
              <!--Logout-->
              <a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-sign-out-alt fa-fw"></i>
                </div>
                Sign Out
              </a>
            </div>
          </div>
        </nav>
      </div>

      <!--Main Content-->
      <div id="layoutSidenav_content">
        <!--Top Navbar-->
        <nav class=" sb-topnav navbar navbar-expand navbar-dark bg-dark shadow">
          <!-- Top navigation link icons-->
          <div class="navbar-nav">
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-lg-0" id="sidebarToggle" href="#!">
              <i class="fas fa-bars fa-lg"></i>
            </button>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
              <li class="nav-item">
                <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-shopping-cart fa-lg fa-fw"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-bell fa-lg fa-fw"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-question-circle fa-lg fa-fw"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user-circle fa-lg fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                      <div class="d-flex align-items-center">
                        <a class="dropdown-item ml-2 mr-2" href="#!">
                          <i class="fas fa-sliders-h fa-fw"></i><span class="pl-2">My Account</span> 
                        </a>
                      </div>
                    </li>
                    
                    <li>
                      <div class="d-flex align-items-center"> 
                        <a class="dropdown-item ml-2 mr-2" href="#!">
                          <i class="fas fa-sign-out-alt fa-fw"></i><span class="pl-2">Sign Out</span> 
                        </a>
                      </div>
                    </li>
                </ul>
              </li>
            </ul>
          </div>      
        </nav>
        <main class="container">
          <!--Breadcrumb-->
          <div class="page__section pt-4">
            <nav class="breadcrumb breadcrumb_type bg-white" aria-label="Breadcrumb">
              <ol class="breadcrumb__list r-list">
                <li class="breadcrumb__group">

                  <i class="fas fa-home fa-sm ml-2"></i>
                  
                  <a href="home.php" class="breadcrumb__point r-link ml-2">Home</a>
                  <span class="fs-header breadcrumb__divider" aria-hidden="true">›</span>
                </li>
                <li class="breadcrumb__group">
                  <span href="#" class="breadcrumb__point">Live Auction</span>
                </li>
              </ol>
            </nav>
          </div>

          <?php
            $shops = getShops($con);
            $totalShops = count($shops);
          ?>

          <!--Auctioned Item Section-->
          <section>
            <!-- search auction shop -->
            <div class="p-5"> <!-- padding for the search bar -->
              <!-- search bar -->
              <div class="input-group bg-white rounded shadow-sm"> 
                <input type="search" list="shop-list" class="form-control border-0" placeholder="Search shop...">
                <div class="input-group-append">
                  <button class="btn">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div>
            </div>
            
            <?php
              //get all the shops from the database
              $i = 0;
              while($i < $totalShops){
            ?>
              <!-- shops -->
              <div class="bg-white d-flex mt-4 shadow pt-3">
                <!-- container of the shop logo -->
                <div class="col-5">
                  <?php
                    $shopLogo = getShopLogo($con, $shops[$i]['shop_id']);
                    if($shopLogo != NULL){
                      echo '<img src="data:image/jpeg;base64,'.base64_encode($shopLogo).'"/ class="shop-logo-auction-size">';
                    } else {
                      echo '<img src="https://dummyimage.com/300x150/000/fff"/ class="shop-logo-auction-size">';
                    }
                  ?>
                </div>
                <!-- containre of the shop name and description -->
                <div class="col-7">
                  <!-- shop name -->
                  <div>
                    <h6>
                      <?php echo $shops[$i]['shop_name'];?>
                    </h6>
                  <!-- shop description -->
                    <p>
                      <?php echo $shops[$i]['shop_description'];?>
                    </p>
                  </div>
                </div>
              </div>
            <?php
                $i++;
              }
            ?>
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
    <script src="../src/js/toggle-nav-links.js"></script>
    <script src="../src/js/responsive-item-layout.js"></script>
    <script src="../src/js/redirect.js"></script>
    <script src="../src/js/sticky_nav.js"></script>
  </body>
</html>
