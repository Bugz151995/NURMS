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
              <a class="nav-link" href="../core/home.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-home"></i>
                </div>
                Home
              </a>
              <!--Numismatic Product Link-->
              <a class="nav-link" href="../core/products.php" aria-expanded="false" aria-controls="collapseLayouts">
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
                    <a class="nav-link" href="../core/completed_auction.php">
                      <div class="sb-nav-link-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                      </div>
                      Completed Auction
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
              <a class="nav-link collapsed active" href="#" aria-expanded="false" aria-controls="collapseLayouts">
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
              <a class="nav-link collapsed" href="myorders.php" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-list"></i>
                </div>
                My Orders
              </a>
              <!--Cart-->
              <a class="nav-link collapsed" href="mycart.php" aria-expanded="false" aria-controls="collapseLayouts">
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
        <!--Main Content container-->
        <div class="p-4">
          <main>
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
                    
                    <span href="#0" class="fs-header breadcrumb__divider ml-3">Home</span>
                    <span class="fs-header breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                  <li class="breadcrumb__group">
                    <span href="#0" class="fs-header breadcrumb__point">Auction</span>
                    <span class="fs-header breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
            
            <!-- Upload Profile picture-->
            <div class="mb-4">
              <div class="row p-2 pt-5"> 
                <!-- Upload image result-->
                <div class="container col-md-3 pb-3 bg-warning rounded-left">
                  <img id="imageResult" src="https://dummyimage.com/150x150/6c757d/dee2e6.jpg" alt="" width="150" height="150" class="mt-n5 rounded shadow rounded-circle">
                </div>
                <!-- Upload image input-->
                <div class="container col-md-9 pb-4 pt-3 bg-warning rounded-right">
                  <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                    <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                    <div class="input-group-append">
                      <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload-alt mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose image</small></label>
                    </div>
                  </div>
                  <span class="small"><em><span class="text-danger">*</span> Choose an image for your profile picture.</em></span>
                </div>
              </div>
            </div>

            <!-- Verify Account form-->
            <div class="bg-light shadow"> 
              <div class="row p-2"> 
                <div class="container">
                  <div class="bg-warning rounded">
                    <h1 class="fs-4 p-3">Verify Account</h1>
                  </div>  
                </div> 
                  <form class="p-4">
                    <!-- 1st row of the form-->
                    <div class="fs-5"><u>Full Name</u></div>
                    <div class="row form-group"> 
                      <div class="col-md-4">
                        <label for="exampleInputLastname">Last Name</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputLastname" aria-describedby="LastnameHelp" placeholder="Last Name">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputFirstname">First Name</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputFirstname" aria-describedby="FirstnameHelp" placeholder="First Name">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputMiddlename">Middle Name</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputMiddlename" aria-describedby="MiddlenameHelp" placeholder="Middle Name">
                      </div>    
                    </div>
                    <hr class="p-2">
                    <!-- 2nd row of the form-->
                    <div class="fs-5"><u>Permanent Address</u></div>
                    <div class="row form-group">
                      <div class="col-md-4">
                        <label for="exampleInputStreet">Street Name</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputStreet" aria-describedby="StreetHelp" placeholder="Street Name">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputBarangay">Barangay</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputBarangay" aria-describedby="BarangayHelp" placeholder="Barangay">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputCity/Municipality">Municipality</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputMunicipality" aria-describedby="MunicipalityHelp" placeholder="Municipality">
                      </div>
                    </div>
                      <!-- 3rd row of the form-->
                    <div class="row form-group">
                      <div class="col-md-4">
                        <label for="exampleInputProvince">Province</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputProvince" aria-describedby="ProvinceHelp" placeholder="Province">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputZip Codee">Zip Code</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputZip Code" aria-describedby="Zip CodeHelp" placeholder="Zip Code">
                      </div>
                    </div>
                    <hr class="p-2">
                    <!-- 4rd row of the form-->
                    <div class="fs-5"><u>Contact Information</u></div>
                    <div class="row form-group ">
                      <div class="col-md-4">
                        <label for="exampleInputFacebooklink">Facebook Link</label>
                        <input type="url" class="form-control form-control-sm" id="exampleInputFacebooklink" placeholder="http:\\">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputContact Number">Contact Number</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputContact Number" aria-describedby="Contact NumberHelp" placeholder="Contact Number">
                      </div>
                    </div>
                    <hr class="p-2">
                    <div class="row">
                      <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="shadow-sm btn btn-primary">Submit</button>
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
