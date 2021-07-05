<?php require('../src/api/session.php');?>
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
  <?php
      confirm_logged_in();
  ?>
  <body class="sb-nav-fixed">
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
              <a class="nav-link" id="auction-toggle" role="button" href="#" aria-expanded="false">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-gavel"></i>
                </div>
                Auction 
                <span class="text-right w-100"> 
                  <i id="auction-toggle-icon" class="fas fa-caret-right"></i>
                </span>
              </a>
              <div style="display: none" id="auction-links">
                <ul class="remove-list-style-type">
                  <li class="text-decoration-none">
                    <a class="nav-link" href="../core/live_auction.php">
                      <div class="sb-nav-link-icon">
                        <i class="fas fa-search-dollar"></i>
                      </div>
                      Live Auction
                    </a>
                  </li>
                  <li class="text-decoration-none">
                    <a class="nav-link" href="../core/closed_auction.php">
                      <div class="sb-nav-link-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                      </div>
                      Closed Auction
                    </a>
                  </li>
                  <li class="text-decoration-none">
                    <a class="nav-link" href="../core/my_bids.php">
                      <div class="sb-nav-link-icon">
                        <i class="fas fa-bold"></i>
                      </div>
                      My Bids
                    </a>
                  </li>
                </ul>
              </div>
                
              <div class="sb-sidenav-menu-heading"><h6>Interface</h6></div>
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
              <a class="nav-link collapsed active" href="../settings/myaccount.php" aria-expanded="false" aria-controls="collapseLayouts">
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
        <!--Main Content container-->
        <div>
          <main>
            <!--Contains Breadcrumbs, shop selection, and shop description-->
          <div class="slide-downward p-3 pb-5">
            <!--Breadcrumb-->
            <div class="page__section mb-4 ">
              <nav class="breadcrumb bg-light breadcrumb_type" aria-label="Breadcrumb">
                <ol class="breadcrumb__list r-list">
                  <li class="breadcrumb__group">
                    <div class="bg-warning rounded p-2 mt">
                      <i class="fas fa-home fa-lg"></i>
                    </div>
                    
                    <a href="../core/home.php" class="fs-header breadcrumb__point r-link ml-3">Home</a>
                    <span class="fs-header breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                  <li class="breadcrumb__group">
                    <span href="#0" class="fs-header breadcrumb__point">My Account</span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
            
          
                <!-- Upload image result-->
                <div class="container w-100">
                    <div class="d-flex justify-self-center flex-wrap rounded bg-warning">
                      <div class="w-100 col-12 d-flex justify-content-center">
                        <img id=imageResult src="https://dummyimage.com/150x150/6c757d/dee2e6.jpg" class="mt-n5 shadow rounded-circle " alt="" width="150" height="150" >
                      </div>
                      <div class="w-100 col-12 d-flex justify-content-center pt-3">
                        <label for="upload" class="btn btn-light m-0 rounded d-flex"> 
                          <i class="fa fa-cloud-upload-alt mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose image</small>
                        </label>
                      </div>
                      <div class="w-100">
                        <input id="upload" type="file" onchange="readURL(this);" >
                      </div>
                    </div>
                </div>
               
              
               

            <!-- Verify Account form-->
            <div class="bg-light shadow"> 
              <div class="row p-2"> 
                <div class="container">
                  <div class="bg-warning rounded">
                    <h1 class="fs-4 p-3">My Account</h1>
                  </div>  
                </div> 
                <form class="p-4">
                    <!-- 1st row of the form-->
                    <div class="pb-3 fs-5"><u>Full Name</u></div>
                    <div class="row form-group"> 
                      <div class="col-md-4">
                       
                        <input type="text" class="shadow rounded-pill form-control form-control-md" id="exampleInputLastname" aria-describedby="LastnameHelp" placeholder="Last Name">
                      </div>
                      <div class="col-md-4">
                        
                        <input type="text" class="shadow rounded-pill form-control form-control-md"  id="exampleInputFirstname" aria-describedby="FirstnameHelp" placeholder="First Name">
                      </div>
                      <div class="col-md-4">
                        
                        <input type="text" class="shadow rounded-pill form-control form-control-md" id="exampleInputMiddlename" aria-describedby="MiddlenameHelp" placeholder="Middle Name">
                      </div>    
                    </div>
                    
                    <!-- 2nd row of the form-->
                    <div class="pb-3 fs-5"><u>Permanent Address</u></div>
                    <div class="row form-group">
                      <div class="col-md-4">
                       
                        <input type="text" class="shadow rounded-pill form-control form-control-md" id="exampleInputStreet" aria-describedby="StreetHelp" placeholder="Street Name">
                      </div>
                      <div class="col-md-4">
                        
                        <input type="text" class="shadow rounded-pill form-control form-control-md" id="exampleInputBarangay" aria-describedby="BarangayHelp" placeholder="Barangay">
                      </div>
                      <div class="col-md-4">
                        
                        <input type="text" class="shadow rounded-pill form-control form-control-md" id="exampleInputMunicipality" aria-describedby="MunicipalityHelp" placeholder="Municipality">
                      </div>
                    </div>
                      <!-- 3rd row of the form-->
                    <div class="row form-group">
                      <div class="col-md-4">
                        
                        <input type="text" class="shadow rounded-pill form-control form-control-md" id="exampleInputProvince" aria-describedby="ProvinceHelp" placeholder="Province">
                      </div>
                      <div class="col-md-4">
                       
                        <input type="text" class="shadow rounded-pill form-control form-control-md" id="exampleInputZip Code" aria-describedby="Zip CodeHelp" placeholder="Zip Code">
                      </div>
                    </div>
                 
                    <!-- 4rd row of the form-->
                    <div class="pb-3 fs-5"><u>Contact Information</u></div>
                    <div class="row form-group ">
                      <div class="col-md-4">
                       
                        <input type="url" class="shadow rounded-pill form-control form-control-md" id="exampleInputFacebooklink" placeholder="http:\\">
                      </div>
                      <div class="col-md-4">
                        
                        <input type="email" class="shadow rounded-pill form-control form-control-md" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="col-md-4">
                       
                        <input type="text" class="shadow rounded-pill form-control form-control-md" id="exampleInputContact Number" aria-describedby="Contact NumberHelp" placeholder="Contact Number">
                      </div>
                    </div>
               
                    <div class="row">
                      <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="shadow-sm btn btn-success">Update</button>
                      </div>
                    </div>
                    
                  </form>
                </div> 
              </div>
            </div>
          </main>
          <footer class="py-5 bg-light mt-auto">
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
    </div>

  <!--===============================================================================================-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../src/js/toggle-sidenav.js"></script>
    <script src="../src/js/toggle-nav-links.js"></script>
    <script src="../src/js/custom.js"></script>
  </body>
</html>
