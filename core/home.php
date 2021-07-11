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
    <link rel="stylesheet" href="../src/css/carousel.css">
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

    <!-- Contains layout of sidenav and the main content -->
    <div id="layoutSidenav">
      <!-- Side Navbar -->
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light bg-white fs-sidenav" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <!--Side Navbar's navigation links-->
            <div class="nav">
              <!--Core links Header-->
              <div class="sb-sidenav-menu-heading"><h6>Core</h6></div>
              <!--Home link-->
              
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link active" href="#" aria-expanded="false" aria-controls="collapseLayouts">
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
                <a class="nav-link dropdown-toggle" role="button" href="#" data-toggle="dropdown" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-gavel fa-fw"></i>
                  </div>
                  Auction <span class="text-right w-100"></span>
                </a>
                <ul class="remove-list-style-type">
                  <li class="text-decoration-none">
                    <a class="nav-link bg-transparent" href="live_auction.php">
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

    <!-- Main Content -->
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
                    
                    <span href="home.php" class="breadcrumb__point ml-2">Home</span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="container">
                    <span class="text-center">
                      <h3>View More events?</h3>
                      <div><a href="../services/events.php">Click HERE</a></div>
                    </span>
              </div>
          <div class="container">
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus laboriosam assumenda illum odio! Impedit cupiditate, sequi harum expedita at non optio consectetur praesentium, corrupti quae necessitatibus adipisci dolor ducimus labore!                   
            </p>
          </div>

          
            <!--Header-->
            <div class="container">
              <header>
                <h1>Top Hottest Product</h1>
                  <p>
                    <span>&#139;</span>
                    <span>&#155;</span> 
                  </p>
              </header>
              </div>

            <!--Product 1-->
              <section>
                <div class="product">
                  <picture>
                      <img src="../src/img/sale-1.png" alt="">
                  </picture>
                  <div class="details">
                     <p>
                        <b>Product One</b>
                        <small>New arrival</small>
                     </p>
                     <samp>P 4,000</samp>
                  </div>
                  <div class="button">
                      <p class="star">
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                      </p>
                      <a href="#">Add-Cart</a>
                  </div>
                </div>

                <!--Product 2-->
                <div class="product">
                  <picture>
                      <img src="../src/img/sale-1.png" alt="">
                  </picture>
                  <div class="details">
                     <p>
                        <b>Product two</b>
                        <small>New arrival</small>
                     </p>
                     <samp>P 4,000</samp>
                  </div>
                  <div class="button">
                      <p class="star">
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                      </p>
                      <a href="#">Add-Cart</a>
                  </div>
                </div>

                  <!--Product 3-->
                <div class="product">
                  <picture>
                      <img src="../src/img/sale-1.png" alt="">
                  </picture>
                  <div class="details">
                     <p>
                        <b>Product three </b>
                        <small>New arrival</small>
                     </p>
                     <samp>P 4,000</samp>
                  </div>
                  <div class="button">
                      <p class="star">
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                      </p>
                      <a href="#">Add-Cart</a>
                  </div>
                </div>

                  <!--Product 4-->                
                <div class="product">
                  <picture>
                      <img src="../src/img/sale-1.png" alt="">
                  </picture>
                  <div class="details">
                     <p>
                        <b>Product four</b>
                        <small>New arrival</small>
                     </p>
                     <samp>P 4,000</samp>
                  </div>
                  <div class="button">
                      <p class="star">
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                      </p>
                      <a href="#">Add-Cart</a>
                  </div>
                </div>

                  <!--Product 5-->                
                <div class="product">
                  <picture>
                      <img src="../src/img/sale-1.png" alt="">
                  </picture>
                  <div class="details">
                     <p>
                        <b>Product five</b>
                        <small>New arrival</small>
                     </p>
                     <samp>P 4,000</samp>
                  </div>
                  <div class="button">
                      <p class="star">
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                      </p>
                      <a href="#">Add-Cart</a>
                  </div>
                </div>
              </section>

              <div class="container">
                    <span class="text-center">
                      <h3>View More events?</h3>
                      <div><a href="../services/events.php">Click HERE</a></div>
                    </span>
              </div>
                 <div class="container">
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus laboriosam assumenda illum odio! Impedit cupiditate, sequi harum expedita at non optio consectetur praesentium, corrupti quae necessitatibus adipisci dolor ducimus labore!                   
                    </p>
                 </div>

              <div class="container">
                  <header>
                    <h1>Top Hottest Product</h1>
                    <p>
                      <span>&#139;</span>
                      <span>&#155;</span> 
                    </p>
                  </header>                  
              </div>

              <!--Second Carousel-->
              <section>
                <div class="product">
                  <picture>
                      <img src="../src/img/sale-1.png" alt="">
                  </picture>
                <div class="details">
                  <p>
                    <b>Product One</b>
                    <small>New arrival</small>
                  </p>
                  <samp>P 4,000</samp>
                </div>
                  <div class="button">
                      <p class="star">
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                      </p>
                      <a href="#">Add-Cart</a>
                  </div>
                </div>

                <!--Product 2-->
               <div class="product">
                  <picture>
                      <img src="../src/img/sale-1.png" alt="">
                  </picture>
                  <div class="details">
                    <p>
                      <b>Product two</b>
                      <small>New arrival</small>
                    </p>
                     <samp>P 4,000</samp>
                  </div>
                  <div class="button">
                      <p class="star">
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                      </p>
                      <a href="#">Add-Cart</a>
                    </div>
                </div>

                  <!--Product 3-->
                <div class="product">
                  <picture>
                      <img src="../src/img/sale-1.png" alt="">
                  </picture>
                  <div class="details">
                     <p>
                        <b>Product three </b>
                        <small>New arrival</small>
                     </p>
                     <samp>P 4,000</samp>
                  </div>
                  <div class="button">
                      <p class="star">
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                      </p>
                      <a href="#">Add-Cart</a>
                  </div>
                </div>

                <!--Product 3-->                
                <div class="product">
                  <picture>
                      <img src="../src/img/sale-1.png" alt="">
                  </picture>
                  <div class="details">
                     <p>
                        <b>Product four</b>
                        <small>New arrival</small>
                     </p>
                     <samp>P 4,000</samp>
                  </div>
                  <div class="button">
                      <p class="star">
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                          <strong>&star;</strong>
                      </p>
                          <a href="#">Add-Cart</a>
                  </div>
                </div>

               <!--Product 4-->                
                <div class="product">
                  <picture>
                      <img src="../src/img/sale-1.png" alt="">
                  </picture>
                  <div class="details">
                     <p>
                        <b>Product five</b>
                        <small>New arrival</small>
                     </p>
                     <samp>P 4,000</samp>
                  </div>
                      <div class="button">
                          <p class="star">
                              <strong>&star;</strong>
                              <strong>&star;</strong>
                              <strong>&star;</strong>
                              <strong>&star;</strong>
                              <strong>&star;</strong>
                          </p>
                          <a href="#">Add-Cart</a>
                      </div>
                  </div>                                
               </div>  
          </section>        
      </main>
  </div>  
      
  

  
  <!--===============================================================================================-->
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../src/js/toggle-sidenav.js"></script>
  </body>
</html>
