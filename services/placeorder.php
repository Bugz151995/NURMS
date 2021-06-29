<?php require('api/session.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <?php
      confirm_logged_in();
  ?>
  <body class="sb-nav-fixed">
    <!--Top Navbar-->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <div class="d-flex text-white" style="width: 225px">
        <div class="p-3">
          <img src="src/img/logo_light.png" width="30" alt="">
        </div>
      </div>

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
    </nav>
    <!--Contains layout of sidenav and the main content-->
    <div id="layoutSidenav">
      <!--Side Navbar-->
      <div id="layoutSidenav_nav" class="side-nav-bg">
        <nav class="sb-sidenav accordion sb-sidenav-dark" style="opacity: 85%" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="text-center my-3">
                <img class="img-fluid rounded-circle mb-4" src="https://dummyimage.com/150x150/6c757d/dee2e6.jpg" alt="..." />
                <h5 class="text-white fs-6">
                  <?php echo $_SESSION['FIRST_NAME']." ".substr($_SESSION['MIDDLE_NAME'], 0, 1).". ".$_SESSION['LAST_NAME'];?>
                </h5>
                <p class="text-warning">Semi-Verified</p>
            </div>
            <div class="nav">
              <div class="sb-sidenav-menu-heading"><h6>Core</h6></div>
                <a class="nav-link collapsed" href="home.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-home"></i>
                  </div>
                  Home
                </a>
                <a class="nav-link collapsed" href="products.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fab fa-product-hunt"></i>
                  </div>
                  Numismatic Products
                </a>
                <a class="nav-link collapsed" href="products.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-gavel"></i>
                  </div>
                  Auction
                </a>
              <div class="sb-sidenav-menu-heading"><h6>Interface</h6></div>
                <!--Account Verification-->
                <a class="nav-link collapsed active" href="account_verification.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-check"></i>
                  </div>
                  Account Verification
                </a>
                <!--Events-->
                <a class="nav-link collapsed" href="events.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-calendar-check"></i>
                  </div>
                  Events
                </a>
                <!--My Orders-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-list"></i>
                  </div>
                  My Orders
                </a>
                <!--Cart-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  My Cart
                </a>
              <div class="sb-sidenav-menu-heading"><h6>Settings</h6></div>
                <!--My Account-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-circle"></i>
                  </div>
                  My Account
                </a>
                <!--Help-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-question-circle"></i>
                  </div>
                  Help
                </a>
                <!--Logout-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
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
        <!--Main Content container-->
        <div class="p-4">
          <main>
            <!--Breadcrumb-->
            <div class="page__section mb-5">
              <nav class="breadcrumb bg-light breadcrumb_type" aria-label="Breadcrumb">
                <ol class="breadcrumb__list r-list">
                  <li class="breadcrumb__group">
                    <div class="bg-warning rounded p-2 mt">
                      <i class="fas fa-home fa-lg"></i>
                    </div>
                    <a href="home.php" class="breadcrumb__divider r-link ml-3">Home</a>
                    <span class="breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                  <li class="breadcrumb__group">                    
                    <span href="#0" class="breadcrumb__point">Checkout</span>
                    <span class="breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                </ol>
              </nav>
            </div>
            
            <!-- checkoutfill-->
            <hr>
              <div class="pl-2 pr-2"> 
                <p>Address : <u> <span id="user-id">L Pan St. Goa Camarines Sur</span> </u>
                </p>
              </div>
              <div class="pl-2 pr-2">
                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-shipping-fast"></i></span>
                  </div>
                  <div class="dropdown">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      Shipping Option
                    </button>

                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><img class="pr-1 img-fluid rounded-circle"  src="src/img/jrs.png" alt="j&tlogo" width="35" height="35">JRS Express</a>
                      <a class="dropdown-item" href="#">
                      <img class="pr-1 img-fluid rounded-circle"  src="src/img/j&t.jpg" alt="j&tlogo" width="35" height="35">J&T Express</a>
                    </div>
                  </div>
                </div>
              </div>
            <hr style="height:10px">

          <!---------tables1-------->
          <table class="w-100">
        <tbody>
          <tr>
            <td>
              <!--Auctioned Product Row 1-->
              <div class="rounded bg-white shadow mb-3">
                <div class="row align-self-start">
                  <div class="col-4">
                    <img src="src/img/sale-1.png" class="p-3 product-img" alt="">
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
                    <img src="src/img/sale-2.png" class="p-3 product-img" alt="">
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
                    <img src="src/img/sale-3.png" class="p-3 product-img" alt="">
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
                  <hr style="height:10px">
                  <div class="rounded bg-white shadow mb-3">
                <div class="row align-items-center">
                  <div class="col-4 align-self-start">
                    <img src="src/img/logo.png" class="p-3 product-img" alt="">
                  </div>
                  <!--Auctioned Product Detils-->
                  <div class="col-8 small pt-4 pb-4">
                    <div class="row pl-4 pr-4">
                      <!--Auctioned Product Description-->
                      <div class="col-12">
                        <!--Product name-->
                        <div class="Total">
                          <h5>Total:</h5> 
                        </div>
                      
                        <div class="auctioner">
                          <p>
                            <span>Goa, PH</span>
                            <span>|</span>
                            <a href="#">Numisworks Auction Product Trading</a>
                          </p>
                        </div>
                        <!--Bid Status-->
                        <div class="Discount">
                          <div>
                            <p class="fw-bolder">Discount: <span class="font-weight-normal">&#8369;0.00</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row pl-4 pr-4">
                      <div class="Totalpayment">
                      <p class="fw-bolder">Total Payment: <span class="font-weight-normal">&#8369;0.00</span></p>
                        <button class="shadow p-3  btn-sm btn btn-success float-md-right">Place Order</button>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
                   </div> 
              </div>
            </div>
          
          </main>
        </div>
      </div>
    </div>

  <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.8.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.8.0,npm/fullcalendar@5.8.0/locales-all.min.js,npm/fullcalendar@5.8.0/locales-all.min.js,npm/fullcalendar@5.8.0/main.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
