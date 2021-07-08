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
                <a class="nav-link active" href="products.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fab fa-product-hunt fa-fw"></i>
                  </div>
                  Numismatic Items
                </a>
              </div>
              
              <!--Auction Product Link-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link dropdown-toggle" role="button" href="#" data-toggle="dropdown" aria-expanded="false" aria-controls="collapseLayouts">
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
                    <span href="#" class="breadcrumb__point">Numismatic Items</span>
                  </li>
                </ol>
              </nav>
            </div>

            <!--Shop Selection-->
            <div class="row">
              <div class="sm-intro-bg container slide-upward">
                <div class="rounded pl-4 pr-4 pt-2 pb-1 shop-details-bg shadow-sm">
                  <label for="#shops" class="fs-header text-center w-100 fw-bolder">Shops</label>
                  <div class="form-group input-group">
                    <span class="input-group-text">
                      <i class="fas fa-store-alt"></i>
                    </span>
                    <select name="" id="shops" class="custom-select fs-header">
                      <option value="">Numisworks Auction Product Trading</option>
                      <option value="">Abe Reyes Auction</option>
                      <option value="">Taimatsu's Collection</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!--Shop Details-->
            <table class="w-100 mt-5 fs-header table table-borderless shop-details-bg">
              <tbody>
                <!--Shop Description-->
                <tr>
                  <td class="pl-3">
                    <img src="../src/img/logo.png" alt="" class="shop-logo shadow rounded-circle mt-n5">
                  </td>
                  <td>
                    <div class="fs-header pt-2">
                      <h5 class="fw-bolder fs-header">Shop Description</h5>
                      <ul>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <!--Shop Products-->
                <tr>
                  <td colspan="2">
                    <div class="text-center">
                      <p>View Shop's Events? <a href="events.php">Click here.</a><p>
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
                <img class="d-block w-100" src="../src/img/sale-1.png" alt="First slide">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum minima similique, optio rem cumque quam perspiciatis nihil autem est. Harum asperiores magni labore eos mollitia eaque quaerat. Voluptatum, alias non!</p>
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

          <!-- Section-->
          <section class="container pl-5 pr-5">
            <div class="row no-gutters bg-light">
              <!-- Carousel for upcoming events-->
              <div id="eventsCarousel" class="p-2 col-md-6 carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#eventsCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#eventsCarousel" data-slide-to="1"></li>
                  <li data-target="#eventsCarousel" data-slide-to="2"></li>
                </ol>
                <a class="carousel-control-prev" href="#eventsCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#eventsCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <!-- Carousel for upcoming products-->
             
            </div>
            
            <div class="row">
                <div class="mb-3 shadow col-md-4">
                  <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-danger text-white position-absolute" id="badges" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="img-resize card-img-top" src="../src/img/sale-1.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                      <div class="text-left">
                        <!-- Product name-->
                        <p class="d-flex fw-bolder">Lapu-Lapu Medal</p>
                        <!-- Product price-->
                        <span class="text muted text-decoration-line-through">&#8369;1,200.00</span>>&#8369;1,000.00
                            <div class="pcard-footer p-4 pt-0 border-top-0 bg-transparent">   
                            </div>
                      <div class="text-center"><a class="bg-primary text-white btn btn-outline-dark mt-auto" href="#">Add to cart</a><span>&nbsp;&nbsp;</span>
                        <a class="bg-success text-white btn btn-outline-dark mt-auto" href="#">Buy now</a></div>
                        </div>
                    </div>
                    <!-- Product actions-->
                  </div>
                </div>
                <div class="mb-3 shadow col-md-4">
                  <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-danger text-white position-absolute" id="badges" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="img-resize card-img-top" src="../src/img/sale-2.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                      <div class="text-left">
                        <!-- Product name-->
                        <p class="d-flex fw-bolder">Araw ng Republika Medal</p>
                        <!-- Product price-->
                        <span class="text muted text-decoration-line-through">&#8369;1,200.00</span>>&#8369;1,000.00
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">   
                            </div>
                      <div class="text-center"><a class="bg-primary text-white btn btn-outline-dark mt-auto" href="#">Add to cart</a><span>&nbsp;&nbsp;</span>
                        <a class="bg-success text-white btn btn-outline-dark mt-auto" href="#">Buy now</a></div>
                        </div>
                    </div>
                    <!-- Product actions-->
                  </div>
                </div>
                <div class="mb-3 shadow col-md-4">
                  <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-danger text-white position-absolute" id="badges" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="img-resize card-img-top" src="../src/img/sale-3.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                      <div class="text-left">
                        <!-- Product name-->
                        <p class="d-flex fw-bolder">Araw ng Kalayaan</p>
                        <!-- Product price-->
                        <span class="text muted text-decoration-line-through">&#8369;1,200.00</span>>&#8369;1,000.00
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">   
                            </div>
                      <div class="text-center"><a class="bg-primary text-white btn btn-outline-dark mt-auto" href="#">Add to cart</a><span>&nbsp;&nbsp;</span>
                        <a class="bg-success text-white btn btn-outline-dark mt-auto" href="#">Buy now</a></div>
                        </div>
                    </div>
                    <!-- Product actions-->
                  </div>
                </div>
                <div class="mb-3 shadow col-md-4">
                  <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-danger text-white position-absolute" id="badges" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="img-resize card-img-top" src="../src/img/sale-4.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                      <div class="text-left">
                        <!-- Product name-->
                        <p class="d-flex fw-bolder">Gabriela Silang Medal</p>
                        <!-- Product price-->
                        <span class="text muted text-decoration-line-through">&#8369;1,200.00</span>>&#8369;1,000.00
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">   
                            </div>
                      <div class="text-center"><a class="bg-primary text-white btn btn-outline-dark mt-auto" href="#">Add to cart</a><span>&nbsp;&nbsp;</span>
                        <a class="bg-success text-white btn btn-outline-dark mt-auto" href="#">Buy now</a></div>
                        </div>
                    </div>
                    <!-- Product actions-->
                  </div>
                </div>
           
          </section>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../src/js/toggle-sidenav.js"></script>
    <script src="../src/js/toggle-nav-links.js"></script>
  </body>
</html>
