<?php 
require('../src/api/session.php');
require('../src/api/connect.php');
require('../src/api/sign_in_confirm.php');
require('live_auction/fetch_shops.php');
require('live_auction/fetch_auction_products.php');

$sign_in = new SignIn();
$sign_in->status();
$sign_in->confirm();

//instantiate a new database object
$db = new Database();
//access the database class method to connect to the database
$con = $db->connect();
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

    <!--Top Navbar-->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Top navigation numisworks logo -->
      <div class="d-flex text-white bg-transparent" style="width: 225px">
        <div class="p-2">
          <img src="../src/img/logo_light.png" width="30" alt="">
        </div>
      </div>
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

    <!--Contains layout of sidenav and the main content-->
    <div id="layoutSidenav">

      <!--Side Navbar-->
      <div id="layoutSidenav_nav" class="side-nav-bg">
        <nav class="sb-sidenav accordion sb-sidenav-dark" style="opacity: 85%" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
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
        <main >
          <!--Contains Breadcrumbs, shop selection, and shop description-->
          <div class="slide-downward bg-home p-3">
            <!--Breadcrumb-->
            <div class="page__section mb-4 ">
              <nav class="breadcrumb bg-light breadcrumb_type" aria-label="Breadcrumb">
                <ol class="breadcrumb__list r-list">
                  <li class="breadcrumb__group">
                    <div class="bg-warning rounded p-2 mt">
                      <i class="fas fa-home fa-lg"></i>
                    </div>
                    
                    <a href="home.php" class="fs-header breadcrumb__point r-link ml-3">Home</a>
                    <span class="fs-header breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                  <li class="breadcrumb__group">
                    <span href="#" class="fs-header breadcrumb__point">Live Auction</span>
                  </li>
                </ol>
              </nav>
            </div>

            <!--Shop Selection-->
            <div class="row">
              <div class="sm-intro-bg container slide-upward">
                <div class="rounded pl-4 pr-4 pt-2 pb-1 shop-details-bg shadow">
                  <label for="#shops" class="mt-n5 fs-header text-center w-100 fw-bolder">Shops</label>
                  <div class="form-group input-group">
                    <span class="input-group-text">
                      <i class="fas fa-store-alt"></i>
                    </span>
                    <?php
                      //initialization of the decoded shops data
                      //decoding the json into an associative array
                      $shops = getShops($con);
                      $totalShops = count($shops);
                    ?>
                    <select name="" id="shops" class="custom-select fs-header">
                      <?php
                        //display the shops in option tag using while loop
                        $i = 0;
                        while ($i < $totalShops){
                          ?> 
                            <option value="<?php echo $shops[$i]['shop_id'];?>">
                              <?php echo $shops[$i]['shop_name'];?>
                            </option>
                          <?php
                          $i++;
                        }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!--Shop Details-->
            <table class="w-100 mt-5 rounded fs-header table table-borderless shop-details-bg">
              <tbody>
                <!--Shop Description-->
                <tr>
                  <?php 
                    $shopLogo = getShopLogo($con, '1');
                  ?>
                  <td class="pl-3 w-25 pr-5">
                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($shopLogo).'"/  class="shop-logo shadow rounded-circle mt-n5">';?>
                  </td>
                  <td>
                    <div class="fs-header pt-2">
                      <h5 class="fw-bolder fs-header">Shop Description</h5>
                      <p>
                          <?php echo $shops[0]['shop_description']?>
                      </p>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Carousel for upcoming products-->
          <div id="upcomingProductCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#upcomingProductCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#upcomingProductCarousel" data-slide-to="1"></li>
              <li data-target="#upcomingProductCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../src/img/default_banner_1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../src/img/default_banner_2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../src/img/default_banner_3.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#upcomingProductCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#upcomingProductCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <!--Auctioned Item Section-->
          <section>
            <!-- navigation links -->
            <div class="fs-nav pt-2">
              <!-- nav-tabs container -->
              <div id="other-nav" class="nav nav-tabs no-gutters row">
                <!-- live auction link -->
                <div id="live-au-link" class="nav-item col-4 text-center text-nowrap active">
                  <a href="#" class="nav-link active">Live Auction</a>
                </div>
                <!-- closed auction link -->
                <div id="closed-au-link" class="nav-item col-4 text-center text-nowrap">
                  <a href="closed_auction.php" class="nav-link">Closed Auction</a>
                </div>
                <!-- my bids link -->
                <div id="my-bid-link" class="nav-item col-4 text-center text-nowrap">
                  <a href="my_bids.php" class="nav-link">My Bids</a>
                </div>
              </div>
            </div>
            
            <!-- page number and search bar -->
            <div class="bg-white">
              <div class="container">
                <div class="row other-nav-fs">
                  <!--Page number navigation -->
                  <div class="col-md-6 pt-4 other-nav-fs" id="page-nav">
                    <ul class="nav nav-pills justify-self-end align-self-center">
                      <li class="nav-item shadow-sm">
                        <a class="nav-link border border-primary border-2" href="#">
                        <i class="fas fa-angle-double-left"></i></a>
                      </li>
                      <li class="nav-item ml-2 shadow-sm">
                        <a class="nav-link border border-primary border-2" href="#">Prev</a>
                      </li>
                      <li class="nav-item ml-2 shadow-sm bg-primary rounded">
                        <a class="nav-link active rounded" href="#">2</a>
                      </li>
                      <li class="nav-item ml-2 border border-primary border-2 rounded bg-white shadow-sm">
                        <a class="nav-link bg-white rounded" href="#">Next</a>
                      </li>
                      <li class="nav-item shadow-sm">
                        <a class="nav-link ml-2 border border-primary border-2" href="#">
                        <i class="fas fa-angle-double-right"></i></a>
                      </li>
                    </ul>
                  </div>

                  <!-- Search Bar -->
                  <div class="col-md-6 pt-4" id="comp-auction-btn">
                    <div class="d-flex rounded border border-2 border-primary shadow-sm">
                      <div class="w-100">
                        <input type="search" id="form1" class="border-0 form-control rounded-left other-nav-fs" placeholder="Search an item in this Shop...">
                      </div>
                      <button type="button" class="btn">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>              
            </div>

            <!-- catalogs of products -->
            <div class="bg-white">
              <div class="container pt-4 pb-4">
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
                    <div class="card position-relative shadow">
                    
                      <div class="card-header mb-n3 border-0 bg-white" onclick="redirect('bid_status.php')">
                        <!-- container for the product image -->
                        <div class="product-img d-inline-flex w-100 justify-content-around pt-3">
                          <?php
                            //call the obverse and reverse images from the result set with variable name $auctionProductImg.
                            echo '<img src="data:image/jpeg;base64,'.base64_encode( $auctionProductImg[$i]['obverse_img'] ).'"/>';
                            echo '<img src="data:image/jpeg;base64,'.base64_encode( $auctionProductImg[$i]['reverse_img'] ).'"/>';
                          ?>
                        </div>
                      </div>

                      <!-- badge that displays the total bidders -->
                      <?php
                        //get the total count of bids of an auctioned item
                        $bidStatus = countTotalBid($con, $auctionProducts[$i]['auction_id']);
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
                            <?php echo $auctionProducts[$i]['maximum_bid'];?>
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
