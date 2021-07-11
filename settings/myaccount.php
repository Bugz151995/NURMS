<?php 
require('../src/api/header.php');
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
    <link href="../src/css/myaccount.css" rel="stylesheet" />
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
                    <a class="nav-link bg-transparent" href="../core/auction_products.php">
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
                <a class="nav-link collapsed active" href="#" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-circle fa-fw"></i>
                  </div>
                  My Account
                </a>
              </div>
              <!--Help-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link collapsed" href="help.php" aria-expanded="false" aria-controls="collapseLayouts">
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
                    <span href="#" class="breadcrumb__point">My Account</span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          
          <!-- Upload Profile picture-->
          <div class=" shadow"> 
              <div class="row justify-content-center myaccnt-body"> 
                <div class="container">
                  
                    <div class="my-account-heading text-center text-secondary shadow-sm fs-4 p-3">My Account</div>
                    
                </div> 
               
            <form action="#" class=" p-5">
                    <!-- 1st row of the form-->
                          <div class="row  px-5 align-items-center">
                                <div class="img-upload-bg-color shadow-sm col-md-5 pr-lg-5 p-4 mb-md-0">
                              <div class="d-flex justify-content-center col-sm-12">             
                                  <div class=""><img id="imageResult" src="https://dummyimage.com/150x150/6c757d/dee2e6.jpg" 
                                    alt=""  width="200" height="200" class="img-fluid rounded-circle shadow-md "></div>
                              </div>
                              <div class="d-flex justify-content-center col-sm-12 pt-3">
                                    <div class="input-group upload-img  rounded-pill bg-white shadow-sm">
                                      <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                                        <label id="upload-label" for="upload"  class="font-weight-light text-muted">Choose Image</label> 
                                    </div>
                                  </div>  
                            </div>

                              	<!-- Registeration Form -->
                              	<div class="col-sm-6 col-sm-7 ml-auto">
                                      <div class="pt-4 row">

                                      <div class="row fullname-bg-color shadow-sm ">
                                      <!-- Divider Text -->
                                      <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                              <div class="border-bottom w-100 ml-5"></div>
                                              <span class="px-2 small text-muted font-weight-bold text-muted">Full.Name</span>
                                              <div class="border-bottom w-100 mr-5"></div>
                                          </div>

                                          <!-- First Name -->
                                          <div class="col-sm-6 mb-3">
                                              
                                              <input id="firstName" type="text" name="firstname" placeholder="First Name"
                                               class="rounded-pill shadow-sm form-control bg-white border-0">
                                          </div>

                                          <!-- Middle Name -->
                                          <div class="col-sm-6 mb-4">
                                        
                                              <input id="middleName" type="text" name="middlename" placeholder="Middle Name" 
                                              class="rounded-pill shadow-sm form-control bg-white border-0">
                                          </div>

                                          <!-- Last Name -->
                                          <div class="col-sm-6 mb-4">
                                             
                                              <input id="lastName" type="text" name="lastname" placeholder="Last Name" 
                                              class="rounded-pill shadow-sm form-control bg-white border-0">
                                          </div>

                                          <!--Name Extension-->
                                          <div class=" col-lg-6 mb-4">
                                              
                                              <input id="nameExtension" type="text" name="nameextensio" placeholder="Name Extension" 
                                              class="rounded-pill shadow-sm form-control bg-white border-0">
                                          </div>
                                         </div> 

                                         <div class="row contact-bg-color shadow-sm">
                                          <!-- Divider Text -->
                                         <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                              <div class="border-bottom w-100 ml-5"></div>
                                              <span class="px-2 small text-muted font-weight-bold text-muted">Contact.Info</span>
                                              <div class="border-bottom w-100 mr-5"></div>
                                          </div>

                                           <!-- Facebook -->
                                           <div class="input-group col-lg-12 mb-4">
                                              
                                              <input id="url" type="url" name="facebook" placeholder="Facebook" 
                                              class="rounded-pill form-control shadow-sm bg-white border-0 border-md">
                                          </div>


                                          <!-- Email Address -->
                                          <div class="input-group col-lg-12 mb-4">
                                              
                                              <input id="email" type="email" name="email" placeholder="Email Address"
                                               class="rounded-pill form-control shadow-sm bg-white border-0 border-md">
                                          </div>

                                         

                                           <!-- Phone Number -->
                                           <div class="input-group col-lg-12 mb-4">
                                              
                                              <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" 
                                              class="rounded-pill form-control shadow-sm bg-white border-0 border-md">
                                          </div>
                                          </div>
                                          
                                          <div class="row address-bg-color shadow-sm">
                                           <!-- Divider Text -->
                                         <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                              <div class="border-bottom w-100 ml-5"></div>
                                              <span class="px-2 small text-muted font-weight-bold text-muted">Address</span>
                                              <div class="border-bottom w-100 mr-5"></div>
                                          </div>

                                         <!--Barangay -->
                                         <div class="input-group col-lg-6 mb-4">
                                            
                                              <input id="barangay" type="text" name="barangay" placeholder="Barangay" 
                                              class="rounded-pill form-control shadow-sm bg-white border-0 border-md">
                                          </div>

                                          <!-- Municipality -->
                                          <div class="input-group col-lg-6 mb-4">
                                              
                                              <input id="municipality" type="text" name="municipality" placeholder="Municipality" 
                                              class="rounded-pill form-control shadow-sm bg-white border-0 border-md">
                                          </div>

                                          <!-- Province -->
                                          <div class="input-group col-lg-6 mb-4">
                                              
                                              <input id="province" type="text" name="province" placeholder="Province" 
                                              class="rounded-pill form-control shadow-sm bg-white border-0 border-md">
                                          </div>

                                          <!--Zipcode-->
                                          <div class="input-group col-lg-6 mb-4">
                                              
                                              <input id="zipcode" type="text" name="zipcode" placeholder="Zipcode" 
                                              class="rounded-pill form-control shadow-sm bg-white border-0 border-md">
                                          </div>
                                          </div>

                                          <!-- Submit Button -->
                                          <div class="text-center form-group col-sm-3 mx-auto mb-0">
                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                              Update
                                            </button>
                                          </div>

                                          <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-color border-0 shadow-lg modal-content">
                                                  <div class=" modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Confirm Password</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body  ">
                                                  Password: <input type="password"  id="myInput">
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                      </div>
                              </div>
                          </div>
              </form>
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
