<?php 
require('../src/api/session.php');
require('../src/api/sign_in_confirm.php');
$sign_in = new SignIn();
$sign_in->status();
$sign_in->confirm();
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
    <link href="../src/css/custom.css" rel="stylesheet" />
    <link href="../src/css/layout.css" rel="stylesheet" />
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
                <a class="nav-link" href="../core/home.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-home fa-fw"></i>
                  </div>
                  Home
                </a>
              </div>
              <!--Numismatic Product Link-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link" href="../core/products.php" aria-expanded="false" aria-controls="collapseLayouts">
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
                    <a class="nav-link bg-transparent" href="../core/auction_house.php">
                      Auction House
                    </a>
                  </li>
                  <li class="text-decoration-none">
                    <a class="nav-link bg-transparent" href="../core/live_auction.php">
                      Live Auction
                    </a>
                  </li>
                  <li class="text-decoration-none">
                    <a class="nav-link bg-transparent" href="../core/closed_auction.php">
                      Closed Auction
                    </a>
                  </li>
                  <li class="text-decoration-none">
                    <a class="nav-link bg-transparent" href="../core/my_bids.php">
                      My Bids
                    </a>
                  </li>
                </ul>
              </div>              
              
                
              <div class="sb-sidenav-menu-heading"><h6>Services</h6></div>
              <!--Account Verification-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="account_verification.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-check fa-fw"></i>
                  </div>
                  Account Verification
                </a>
              </div>
              <!--Events-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="events.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-calendar-check fa-fw"></i>
                  </div>
                  Events
                </a>
              </div>
              <!--My Orders-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="myorders.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-list fa-fw"></i>
                  </div>
                  My Orders
                </a>
              </div>
              <!--Cart-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed active" href="#" aria-expanded="false" aria-controls="collapseLayouts">
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
                    <span href="#" class="breadcrumb__point">My Cart</span>
                  </li>
                </ol>
              </nav>
            </div>
          </div> 
          <div class="p-2">
            <table class="w-100">
              <tbody>
                <tr>
                  <td>
                    <!--Auctioned Product Row 1-->
                    <div class="rounded bg-white shadow mb-3">
                      <div class="row align-self-start">
                        <div class="col-4">
                          <img src="../src/img/sale-1.png" class="p-3 product-img" alt="">
                        </div>
                        <!--Auctioned Product Detils-->
                        <div class="col-8 small pt-4 pb-4 ">
                          <div class="row pl-4 pr-4">
                            <!--Auctioned Product Description-->
                            <div class="col-12">
                              <!--Product name-->
                              <div class="product-name">
                                Lapu-Lapu Medal
                              </div>
                              <!--Shop Location-->
                              <div class="auctioner">
                                <p>
                                  <span>Goa, PH</span>
                                  <span>|</span>
                                  <a href="#">Numisworks Auction Product Trading</a>
                                </p>
                              </div>
                              <!--Bid Status-->
                              <div class="bid-status">
                                <div>
                                  <p class="fw-bolder">Unit Price: <span class="font-weight-normal">&#8369;0.00</span></p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row pl-4 pr-4">
                            <div class="bid-duration">
                              <p>Quantity:
                                <span class="fw-bolder"></span>
                              </p>
                              <div>
                                  <p class="fw-bolder">Composition: <span class="font-weight-normal"></span></p>
                                </div>
                                <div>
                                  <p >Specification: <span></span></p>
                                </div>
                                
                              <div class="mx-auto"  style="width: 200px;">
                              <button class="float-ms-right btn-sm btn btn-success ">Buy now</button>
                              <button class="float-ms-right btn-sm btn btn-warning">Remove</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <!--Auctioned Product Row 2-->
                    <div class="rounded bg-white shadow mb-3">
                      <div class="row align-items-center">
                        <div class="col-4 align-self-start">
                          <img src="../src/img/sale-2.png" class="p-3 product-img" alt="">
                        </div>
                        <!--Auctioned Product Detils-->
                        <div class="col-8 small pt-4 pb-4">
                          <div class="row pl-4 pr-4">
                            <!--Auctioned Product Description-->
                            <div class="col-12">
                              <!--Product name-->
                              <div class="product-name">
                                Araw ng Republika Medal
                              </div>
                              <!--Shop Location-->
                              <div class="auctioner">
                                <p>
                                  <span>Goa, PH</span>
                                  <span>|</span>
                                  <a href="#">Numisworks Auction Product Trading</a>
                                </p>
                              </div>
                              <!--Bid Status-->
                              <div class="bid-status">
                                <div>
                                  <p class="fw-bolder">Unit Price: <span class="font-weight-normal">&#8369;0.00</span></p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row pl-4 pr-4">
                            <div class="bid-duration">
                            <p>Quantity:
                                <span class="fw-bolder"></span>
                              </p>
                              <div>
                                  <p class="fw-bolder">Composition: <span class="font-weight-normal"></span></p>
                                </div>
                                <div>
                                  <p >Specification: <span></span></p>
                                </div>
                              <div class="mx-auto"  style="width: 200px;">
                              <button class="float-ms-right btn-sm btn btn-success ">Buy now</button>
                              <button class="float-ms-right btn-sm btn btn-warning">Remove</button>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>               
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <!--Auctioned Product Row 3-->
                    <div class="rounded bg-white shadow mb-3">
                      <div class="row align-items-center">
                        <div class="col-4 align-self-start">
                          <img src="../src/img/sale-3.png" class="p-3 product-img" alt="">
                        </div>
                        <!--Auctioned Product Detils-->
                        <div class="col-8 small pt-4 pb-4">
                          <div class="row pl-4 pr-4">
                            <!--Auctioned Product Description-->
                            <div class="col-12">
                              <!--Product name-->
                              <div class="product-name">
                                Araw ng Kalayaan Medal
                              </div>
                              <!--Shop Location-->
                              <div class="auctioner">
                                <p>
                                  <span>Goa, PH</span>
                                  <span>|</span>
                                  <a href="#">Numisworks Auction Product Trading</a>
                                </p>
                              </div>
                              <!--Bid Status-->
                              <div class="bid-status">
                                <div>
                                  <p class="fw-bolder">Unit Price: <span class="font-weight-normal">&#8369;0.00</span></p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row pl-4 pr-4">
                            <div class="bid-duration">
                              <p>Quantity:
                              <span class="fw-bolder"></span>
                            </p>
                            <div>
                                  <p class="fw-bolder">Composition: <span class="font-weight-normal"></span></p>
                                </div>
                                <div>
                                  <p >Specification: <span></span></p>
                                </div>
                            <div class="mx-auto"  style="width: 200px;">
                              <button class="float-ms-right btn-sm btn btn-success ">Buy now</button>
                              <button class="float-ms-right btn-sm btn btn-warning">Remove</button>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>               
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../src/js/toggle-sidenav.js"></script>
    <script src="../src/js/toggle-nav-links.js"></script>
</body>
</html>
