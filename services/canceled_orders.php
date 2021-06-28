<?php require('api/session.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/custom.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>   
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <div class="d-flex text-white" style="width: 225px">
        <div class="p-3">
          <img src="src/img/logo.png" width="30" alt="">
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
                <a class="nav-link collapsed active" href="home.php" aria-expanded="false" aria-controls="collapseLayouts">
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
                <a class="nav-link collapsed" href="account_verification.php" aria-expanded="false" aria-controls="collapseLayouts">
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
                <a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-list"></i>
                  </div>
                  My Orders
                </a>
                <!--Cart-->
                <a class="nav-link collapsed" href="cart.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  My Cart
                </a>
              <div class="sb-sidenav-menu-heading"><h6>Settings</h6></div>
                <!--My Account-->
                <a class="nav-link collapsed" href="my_account.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-circle"></i>
                  </div>
                  My Account
                </a>
                <!--Help-->
                <a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapseLayouts">
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
        <main>
          <div class="bg-home p-3 pb-5">
            <!--Breadcrumb-->
            <div class="page__section mb-4 ">
              <nav class="breadcrumb bg-light breadcrumb_type" aria-label="Breadcrumb">
                <ol class="breadcrumb__list r-list">
                  <li class="breadcrumb__group">
                    <div class="bg-warning rounded p-2 mt">
                      <i class="fas fa-home fa-lg"></i>
                    </div>
                    
                    <span href="#0" class="breadcrumb__point ml-3">Home</span>
                    <span class="breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <!--Company Logo-->
              <div class="col-md-4">
                <div class="container d-flex justify-content-center pb-3">
                  <img src="src/img/logo.png" width="100%" alt="" class="company-logo shadow rounded-circle">
                </div> 
              </div>      
            </div>
          </div>
          
            <div class="container-fluid px-4">
                      <div class="card mb-6">
                          <div class="card-header">                              
                          </div>
                          <!--navigation-tab-->
                          <div>
                            <div>
                              <ul class="nav nav-tabs">
                                <li class="nav-item">
                                  <a class="nav-link " href="myorders.php">Pending</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link" href="to_receive.php">To receive</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active" href="canceled_orders.php">Cancelled</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="completed_orders.php">Completed</a>
                                </li>
                              </ul> 
                               <!--Pending orders table-->
                              <table class="table table-borderless">
                                <tbody>
                                  <tr class="shadow">
                                    <td width="150"><img src="src/img/sale-1.png" width="150" alt=""></td>
                                    <td>
                                      <span class="fw-bolder">Product Name</span><br>
                                      <span>Quantity: 1</span><br>
                                      <span>Price: P100</span><br>
                                      <span>Shipping option: JNT</span>

                                      <div class="pt-2">
                                        <button class="btn btn-danger w-100">Buy Again</button>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>         
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
                  
               
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
