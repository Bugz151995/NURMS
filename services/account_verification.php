<?php 
require('../src/api/session.php');
require('../src/api/connect.php');
require('../src/api/sign_in_confirm.php');

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
                <a class="nav-link active" href="#" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-check fa-fw"></i>
                  </div>
                  Account Verification
                </a>
              </div>
              <!--Events-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link" href="events.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-calendar-check fa-fw"></i>
                  </div>
                  Events
                </a>
              </div>
              <!--My Orders-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link" href="myorders.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-list fa-fw"></i>
                  </div>
                  My Orders
                </a>
              </div>
              <!--Cart-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link" href="mycart.php" aria-expanded="false" aria-controls="collapseLayouts">
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
                <a class="nav-link" href="../settings/myaccount.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-circle fa-fw"></i>
                  </div>
                  My Account
                </a>
              </div>
              <!--Help-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link" href="../settings/help.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-question-circle fa-fw"></i>
                  </div>
                  Help
                </a>
              </div>
              <!--Logout-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link" href="#" aria-expanded="false" aria-controls="collapseLayouts">
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
        <!--Main Content container-->
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
                    <span href="#" class="breadcrumb__point">Account Verification</span>
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
        </main>
        <footer class="py-3 bg-white mt-auto fs-footer">
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
    <script src="../src/js/custom.js"></script>
  </body>
</html>
