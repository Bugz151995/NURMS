<?php require('../src/api/session.php');?>
<?php
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
  <body class="sb-nav-fixed bg-light" onload="responsiveLayout('#off-auction-products'),responsiveNav()">

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
                  <i class="fas fa-home"></i>
                </div>
                Home
              </a>
              <!--Numismatic Product Link-->
              <a class="nav-link" href="products.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fab fa-product-hunt"></i>
                </div>
                Numismatic Products
              </a>
              <!--Auction Product Link-->
              <a class="nav-link dropdown-toggle active" role="button" href="#" data-toggle="dropdown" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-gavel"></i>
                </div>
                Auction <span class="text-right w-100"></span>
              </a>
              <ul class="remove-list-style-type">
                <li class="text-decoration-none">
                  <a class="nav-link" href="live_auction.php">
                    <div class="sb-nav-link-icon">
                      <i class="fas fa-search-dollar"></i>
                    </div>
                    Live Auction
                  </a>
                </li>
                <li class="text-decoration-none">
                  <a class="nav-link active" href="closed_auction.php">
                    <div class="sb-nav-link-icon">
                      <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    Closed Auction
                  </a>
                </li>
                <li class="text-decoration-none">
                  <a class="nav-link" href="my_bids.php">
                    <div class="sb-nav-link-icon">
                      <i class="fas fa-bold"></i>
                    </div>
                    My Bids
                  </a>
                </li>
              </ul>
                
              <div class="sb-sidenav-menu-heading"><h6>Services</h6></div>
              <!--Account Verification-->
              <a class="nav-link collapsed" href="../services/account_verification.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-user-check"></i>
                </div>
                Account Verification
              </a>
              <!--Events-->
              <a class="nav-link collapsed" href="../services/events.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-calendar-check"></i>
                </div>
                Events
              </a>
              <!--My Orders-->
              <a class="nav-link collapsed" href="../services/myorders.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-list"></i>
                </div>
                My Orders
              </a>
              <!--Cart-->
              <a class="nav-link collapsed" href="../services/mycart.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                My Cart
              </a>

              <div class="sb-sidenav-menu-heading">
                <h6>Settings</h6>
              </div>
              <!--My Account-->
              <a class="nav-link collapsed" href="../settings/myaccount.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-user-circle"></i>
                </div>
                My Account
              </a>
              <!--Help-->
              <a class="nav-link collapsed" href="../settings/help.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-question-circle"></i>
                </div>
                Help
              </a>
              <!--Logout-->
              <a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-sign-out-alt"></i>
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
          <div class="slide-downward bg-home p-3 pb-5">
            <!--Breadcrumb-->
            <div class="page__section mb-4 ">
              <nav class="breadcrumb bg-light breadcrumb_type" aria-label="Breadcrumb">
                <ol class="breadcrumb__list r-list">
                  <li class="breadcrumb__group">
                    <div class="bg-warning rounded p-2 mt">
                      <i class="fas fa-home fa-lg"></i>
                    </div>
                    
                    <a href="home.php" class="fs-header breadcrumb__point r-link ml-3">Home</a>
                    <span class="fs-header breadcrumb__divider" aria-hidden="true">???</span>
                  </li>
                  <li class="breadcrumb__group">
                    <a href="#" class="fs-header breadcrumb__point r-link">Auction</a>
                    <span class="fs-header breadcrumb__divider" aria-hidden="true">???</span>
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
                <div id="live-au-link" class="nav-item col-4 text-center text-nowrap">
                  <a href="live_auction.php" class="nav-link">Live Auction</a>
                </div>
                <!-- closed auction link -->
                <div id="closed-au-link" class="nav-item col-4 text-center text-nowrap active">
                  <a href="#" class="nav-link active">Closed Auction</a>
                </div>
                <!-- my bids link -->
                <div id="my-bid-link" class="nav-item col-4 text-center text-nowrap">
                  <a href="my_bids.php" class="nav-link">My Bids</a>
                </div>
              </div>
            </div>

            <div class="container bg-white">
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

            <div class="container bg-white pt-4 pb-4">
              <!-- flexbox container of the products -->
              <div id="off-auction-products" class="d-flex flex-wrap no-gutters">
                <!-- product number 1 -->
                <div class="p-1 col-md-6">
                  <div class="card position-relative shadow">
                    <div class="card-header mb-n3 border-0 bg-white" onclick="redirect('bid_status.php')">
                      <!-- container for the product image -->
                      <div class="product-img d-inline-flex w-100 justify-content-center pt-2">
                        <img src="../src/img/sale-1.png" alt="">
                      </div>
                    </div>

                    <h6><span class="bid-status badge badge-dark position-absolute p-to-tl shadow-sm">CLOSED</h6>
                    
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

                    <h6><span class="bid-status badge badge-dark position-absolute p-to-tl shadow-sm">CLOSED</h6>
                    
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

                    <h6><span class="bid-status badge badge-dark position-absolute p-to-tl shadow-sm">CLOSED</h6>
                    
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
                    <h6><span class="bid-status badge badge-dark position-absolute p-to-tl shadow-sm">CLOSED</h6>
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
                    <h6><span class="bid-status badge badge-dark position-absolute p-to-tl shadow-sm">CLOSED</h6>
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
                    <h6><span class="bid-status badge badge-dark position-absolute p-to-tl shadow-sm">CLOSED</h6>
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
