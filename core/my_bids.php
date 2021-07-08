<?php 
require('../src/api/session.php');
require('../src/api/connect.php');
require('../src/api/sign_in_confirm.php');
require('live_auction/fetch_shops.php');
require('live_auction/fetch_auction_products.php');

//start session and confirm sign in status of a user
$sign_in = new SignIn();
$sign_in->status();
$sign_in->confirm();

//instantiate a new database object
$db = new Database();
//access the database class connect() method to connect to the database
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
                    <a class="nav-link bg-transparent" href="live_auction.php">
                      Live Auction
                    </a>
                  </li>
                  <li class="text-decoration-none">
                    <a class="nav-link bg-transparent" href="closed_auction.php">
                      Closed Auction
                    </a>
                  </li>
                  <li class="text-decoration-none">
                    <a class="nav-link active bg-transparent" href="my_bids.php">
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
                    <span href="#" class="breadcrumb__point">My Bids</span>
                  </li>
                </ol>
              </nav>
            </div>
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
            <div class="fs-nav pt-2 pl-2">
              <!-- nav-tabs container -->
              <div id="other-nav" class="nav nav-tabs no-gutters row">
                <!-- live auction link -->
                <div id="live-au-link" class="nav-item col-4 text-center text-nowrap ">
                  <a href="live_auction.php" class="nav-link ">Live Auction</a>
                </div>
                <!-- closed auction link -->
                <div id="closed-au-link" class="nav-item col-4 text-center text-nowrap">
                  <a href="closed_auction.php" class="nav-link">Closed Auction</a>
                </div>
                <!-- my bids link -->
                <div id="my-bid-link" class="nav-item col-4 text-center text-nowrap active">
                  <a href="#" class="nav-link active">My Bids</a>
                </div>
              </div>
            </div>

            <div class="bg-white">
              <div class="container">
                <div class="row other-nav-fs">
                  <!--Page number navigation -->
                  <div class="col-md-7 pt-4 other-nav-fs" id="page-nav">
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
                  <div class="col-md-5 pt-4" id="comp-auction-btn">
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

            <div class="bg-white">
              <div class="container pt-4 pb-4">
                <!-- flexbox container of the products -->
                <div id="on-auction-products" class="d-flex flex-wrap no-gutters">
                  <!-- product number 1 -->
                  <div class="p-1 col-md-6">
                    <div class="card position-relative shadow">
                      <div class="card-header mb-n3 border-0 bg-white" onclick="redirect('bid_status.php')">
                        <!-- container for the product image -->
                        <div class="product-img d-inline-flex w-100 justify-content-center pt-2">
                          <img src="../src/img/sale-1.png" alt="">
                        </div>
                      </div>

                      <h6><span class="bid-status badge badge-success position-absolute p-to-tl shadow-sm">2 BIDDERS</h6>
                      
                      <h5><span class="bid-price badge badge-danger shadow-sm position-absolute p-to-br">&#8369;<span>500.00</span></span></h5>

                      <!-- badge that displays ongoing -->
                      <div class="bg-warning card-body">
                        <!-- container for the product name -->
                        <div class="lh-sm">
                          <span class="product-name">Lapu-Lapu Medal</span>
                        </div>
                        <!-- container for the auctioner -->
                        <div class="lh-1">
                          <a href="" class="auctioner">Numisworks Auction Product Trading</a>
                        </div>
                      </div>
                      
                      <!-- container with a bg-warning -->
                      <div class="card-footer border-0 bg-warning">
                        <!-- status of the auction -->
                        <div class="bid-status pt-3">
                          <!-- estimate and current price of the item -->
                          <div class="d-flex justify-content-between align-items-center">
                            <div class=""><strong>Estimate:</strong> &#8369;<span>1,200</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- product number 2 -->
                  <div class="p-1 col-md-6">
                    <div class="card rounded bg-white position-relative shadow">
                      <div class="card-header mb-n3 border-0 bg-white" onclick="redirect('bid_status.php')">
                        <!-- container for the product image -->
                        <div class="product-img d-inline-flex w-100 justify-content-center pt-2">
                          <img src="../src/img/sale-2.png" alt="">
                        </div>
                      </div>

                      <h6><span class="bid-status badge badge-success position-absolute p-to-tl shadow-sm">5 BIDDERS</h6>
                      
                      <h5><span class="bid-price badge badge-danger shadow-sm position-absolute p-to-br">&#8369;<span>700.00</span></span></h5>

                      <!-- badge that displays ongoing -->
                      <div class="bg-warning card-body">
                        <!-- container for the product name -->
                        <div class="lh-sm">
                          <span class="product-name">Araw ng Republika Medal</span>
                        </div>
                        <!-- container for the auctioner -->
                        <div class="lh-1">
                          <a href="" class="auctioner">Numisworks Auction Product Trading</a>
                        </div>
                      </div>
                      
                      <!-- container with a bg-warning -->
                      <div class="card-footer border-0 bg-warning">
                        <!-- status of the auction -->
                        <div class="bid-status pt-3">
                          <!-- estimate and current price of the item -->
                          <div class="d-flex justify-content-between align-items-center">
                            <div class=""><strong>Estimate:</strong> &#8369;<span>1,500</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- product number 3 -->
                  <div class="p-1 col-md-6">
                    <div class="card rounded bg-white position-relative shadow">
                      <div class="card-header mb-n3 border-0 bg-white">
                        <!-- container for the product image -->
                        <div class="product-img d-inline-flex w-100 justify-content-center pt-2">
                          <img src="../src/img/sale-3.png" alt="">
                        </div>
                      </div>

                      <h6><span class="bid-status badge badge-success position-absolute p-to-tl shadow-sm">2 BIDDERS</h6>
                      
                      <h5><span class="bid-price badge badge-danger shadow-sm position-absolute p-to-br">&#8369;<span>800.00</span></span></h5>

                      <!-- badge that displays ongoing -->
                      <div class="bg-warning card-body">
                        <!-- container for the product name -->
                        <div class="lh-sm">
                          <span class="product-name">Araw ng Kalayaan Medal</span>
                        </div>
                        <!-- container for the auctioner -->
                        <div class="lh-1">
                          <a href="" class="auctioner">Numisworks Auction Product Trading</a>
                        </div>
                      </div>
                      
                      <!-- container with a bg-warning -->
                      <div class="card-footer border-0 bg-warning">
                        <!-- status of the auction -->
                        <div class="bid-status pt-3">
                          <!-- estimate and current price of the item -->
                          <div class="d-flex justify-content-between align-items-center">
                            <div class=""><strong>Estimate:</strong> &#8369;<span>1,200</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- product number 4 -->
                  <div class="p-1 col-md-6">
                    <div class="card rounded bg-white position-relative shadow">
                      <!-- card header -->
                      <div class="card-header mb-n3 border-0 bg-white" onclick="redirect('bid_status.php')">
                        <!-- container for the product image -->
                        <div class="product-img d-inline-flex w-100 justify-content-center pt-2">
                          <img src="../src/img/sale-4.png" alt="">
                        </div>
                      </div>

                      <!-- badges -->
                      <h6><span class="bid-status badge badge-success position-absolute p-to-tl shadow-sm">9 BIDDERS</h6>
                      <h5><span class="bid-price badge badge-danger shadow-sm position-absolute p-to-br">&#8369;<span>1,000.00</span></span></h5>

                      <!--card body -->
                      <div class="bg-warning card-body">
                        <!-- container for the product name -->
                        <div class="lh-sm">
                          <span class="product-name">Gabriela Silang Medal</span>
                        </div>
                        <!-- container for the auctioner -->
                        <div class="lh-1">
                          <a href="" class="auctioner">Numisworks Auction Product Trading</a>
                        </div>
                      </div>
                      
                      <!-- card footer -->
                      <div class="card-footer border-0 bg-warning">
                        <!-- status of the auction -->
                        <div class="bid-status pt-3">
                          <!-- estimate and current price of the item -->
                          <div class="d-flex justify-content-between align-items-center">
                            <div class=""><strong>Estimate:</strong> &#8369;<span>1,200</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- product number 4 -->
                  <div class="p-1 col-md-6">
                    <div class="card rounded bg-white position-relative shadow">
                      <!-- card header -->
                      <div class="card-header mb-n3 border-0 bg-white" onclick="redirect('bid_status.php')">
                        <!-- container for the product image -->
                        <div class="product-img d-inline-flex w-100 justify-content-center pt-2">
                          <img src="../src/img/sale-4.png" alt="">
                        </div>
                      </div>

                      <!-- badges -->
                      <h6><span class="bid-status badge badge-success position-absolute p-to-tl shadow-sm">9 BIDDERS</h6>
                      <h5><span class="bid-price badge badge-danger shadow-sm position-absolute p-to-br">&#8369;<span>1,000.00</span></span></h5>

                      <!--card body -->
                      <div class="bg-warning card-body">
                        <!-- container for the product name -->
                        <div class="lh-sm">
                          <span class="product-name">Gabriela Silang Medal</span>
                        </div>
                        <!-- container for the auctioner -->
                        <div class="lh-1">
                          <a href="" class="auctioner">Numisworks Auction Product Trading</a>
                        </div>
                      </div>
                      
                      <!-- card footer -->
                      <div class="card-footer border-0 bg-warning">
                        <!-- status of the auction -->
                        <div class="bid-status pt-3">
                          <!-- estimate and current price of the item -->
                          <div class="d-flex justify-content-between align-items-center">
                            <div class=""><strong>Estimate:</strong> &#8369;<span>1,200</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- product number 4 -->
                  <div class="p-1 col-md-6">
                    <div class="card rounded bg-white position-relative shadow">
                      <!-- card header -->
                      <div class="card-header mb-n3 border-0 bg-white" onclick="redirect('bid_status.php')">
                        <!-- container for the product image -->
                        <div class="product-img d-inline-flex w-100 justify-content-center pt-2">
                          <img src="../src/img/sale-4.png" alt="">
                        </div>
                      </div>

                      <!-- badges -->
                      <h6><span class="bid-status badge badge-success position-absolute p-to-tl shadow-sm">9 BIDDERS</h6>
                      <h5><span class="bid-price badge badge-danger shadow-sm position-absolute p-to-br">&#8369;<span>1,000.00</span></span></h5>

                      <!--card body -->
                      <div class="bg-warning card-body">
                        <!-- container for the product name -->
                        <div class="lh-sm">
                          <span class="product-name">Gabriela Silang Medal</span>
                        </div>
                        <!-- container for the auctioner -->
                        <div class="lh-1">
                          <a href="" class="auctioner">Numisworks Auction Product Trading</a>
                        </div>
                      </div>
                      
                      <!-- card footer -->
                      <div class="card-footer border-0 bg-warning">
                        <!-- status of the auction -->
                        <div class="bid-status pt-3">
                          <!-- estimate and current price of the item -->
                          <div class="d-flex justify-content-between align-items-center">
                            <div class=""><strong>Estimate:</strong> &#8369;<span>1,200</span></div>
                          </div>
                        </div>
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
    <script src="../src/js/toggle-nav-links.js"></script>
    <script src="../src/js/responsive-item-layout.js"></script>
    <script src="../src/js/redirect.js"></script>
    <script src="../src/js/sticky_nav.js"></script>
  </body>
</html>
