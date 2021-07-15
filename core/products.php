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
    <link href="../src/css/products.css" rel="stylesheet" />
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
                    <a class="nav-link bg-transparent" href="watch_list.php">
                      My Watch List
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
                <div class="color_con rounded pl-4 pr-4 pt-2 pb-1 shadow-sm">
                  <label for="#shops" class="fs-header text-center w-100 fw-bolder">Shops</label>
                  <div class="input-group mb-3 input-group-sm">
                    <span class=" input-group-text">
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
            <table class="w-100 mt-5 fs-header table table-borderless shop-description-bg">
              <tbody>
                <!--Shop Description-->
                <tr>
                  <td class="pl-3 col-4 logo-position">
                    <div class="logo-position">
                    <img src="../src/img/logo.png" alt=""  class="shop-logo  shadow rounded-circle mt-n5">
                    </div>
                  </td>
                  <td class="pt-5">
                  <span class="heading">Shop Rating</span>
                  <div class="">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                    <p>4.1 over all on 254 reviews. &nbsp
                    <a href=""><i class="fas fa-info"></i></a></p>
                    <hr style="border:3px solid #f1f1f1">

                    <div class="row m-1" id="ratebars">
                    <div class="side">
                      <div>5 star</div>
                    </div>
                    <div class="middle">
                      <div class="bar-container">
                        <div class="bar-5"></div>
                      </div>
                    </div>
                    <div class="side right">
                      <div>150</div>
                    </div>
                    <div class="side">
                      <div>4 star</div>
                    </div>
                    <div class="middle">
                      <div class="bar-container">
                        <div class="bar-4"></div>
                      </div>
                    </div>
                    <div class="side right">
                      <div>63</div>
                    </div>
                    <div class="side">
                      <div>3 star</div>
                    </div>
                    <div class="middle">
                      <div class="bar-container">
                        <div class="bar-3"></div>
                      </div>
                    </div>
                    <div class="side right">
                      <div>15</div>
                    </div>
                    <div class="side">
                      <div>2 star</div>
                    </div>
                    <div class="middle">
                      <div class="bar-container">
                        <div class="bar-2"></div>
                      </div>
                    </div>
                    <div class="side right">
                      <div>6</div>
                    </div>
                    <div class="side">
                      <div>1 star</div>
                    </div>
                    <div class="middle">
                      <div class="bar-container">
                        <div class="bar-1"></div>
                      </div>
                    </div>
                    <div class="side right">
                      <div>20</div>
                    </div>
                  </div>

                  </td>
                <tr>
                  <td colspan="2">
                    <div class="pt-2">
                      <h5 class="fw-bolder fs-header">Shop Description</h5>
                      <ul>
                        <li>Lorem, ipsum dolor.Lorem, ipsum dolor.Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.Lorem, ipsum dolor.</li>
                      </ul>
                    </div>
                  </td>
                </tr> 
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

          <!-- Section-->
          <section class="container pl-5 pr-5">
          <div class="featured-product-header pt-2 ">
              <b>Featured Product</b>
            </div>
            <hr>
          <div class="f-product-color d-flex p-4 pl-5 ">
            <div class="card card-color pt-2  card-size" id="card1">
              <div class="badge badge-warning position-absolute position-badge-topleft">Best Seller</div>
                <div class="text-center"><img src="../src/img/sale-1.png" alt="" class=" img-size"></div>
                  <div class="text-center"><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <txt>5.0</txt>
                  </div>
                    <div class="card-body">
                      <div class="product-name">Lapu-Lapu Medal</div>
                      <div class="auctioner">
                        <p> <span>Goa, PH</span>
                        <span>|</span>
                        <a href="#">Numisworks Auction Product Trading</a>
                        </p>
                        <span>Price: ₱0.00</span>
                     </div>
                   </div>
            </div> 

            <div class="card card-color pt-2  card-size" id="card2">
              <div class="badge badge-warning position-absolute position-badge-topleft">Best Seller</div>
                <div class="text-center"><img src="../src/img/sale-1.png" alt="" class=" img-size"></div>
                  <div class="text-center"><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <txt>5.0</txt>
                  </div>
                    <div class="card-body">
                      <div class="product-name">Lapu-Lapu Medal</div>
                      <div class="auctioner">
                        <p> <span>Goa, PH</span>
                        <span>|</span>
                        <a href="#">Numisworks Auction Product Trading</a>
                        </p>
                        <span>Price: ₱0.00</span>
                     </div>
                   </div>
            </div> 

            <div class="card card-color pt-2  card-size" id="card3">
              <div class="badge badge-warning position-absolute position-badge-topleft">Best Seller</div>
                <div class="text-center"><img src="../src/img/sale-1.png" alt="" class=" img-size"></div>
                  <div class="text-center"><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <txt>4.2</txt>
                  </div>
                    <div class="card-body">
                      <div class="product-name">Lapu-Lapu Medal</div>
                      <div class="auctioner">
                        <p> <span>Goa, PH</span>
                        <span>|</span>
                        <a href="#">Numisworks Auction Product Trading</a>
                        </p>
                        <span>Price: ₱0.00</span>
                     </div>
                   </div>
            </div> 

          </div>  
         
         <div class="featured-product-header pt-2 ">
              <b>Shop Items</b>
            </div>

         <table class="f-product-color p-4 pl-5 ">
            <tbody class="pt-2    card-shopitem-size">
              <tr>
              <td class=""><img src="../src/img/sale-2.png" alt="" class=" img-shopitem-size"></td>
              <td class=""><img src="../src/img/sale-2.png" alt="" class=" img-shopitem-size"></td>
              <td class="location">
                <span class="item-name"><b>ARAW NG REPUBLIKA MEDAL</b></span>
                  <p> <span class="location">Goa, PH</span>
                      <span>|</span>
                      <a class="shop-name-item" href="#">Numisworks Auction Product Trading</a>
                  </p>
                   <span>Price: ₱0.00</span>
              </td>
               </tr>
          </tbody> 
        </table>  

        <span><hr></span>

        <table class="f-product-color p-4 pl-5 ">
            <tbody class="pt-2    card-shopitem-size">
              <tr>
              <td class=""><img src="../src/img/sale-3.png" alt="" class=" img-shopitem-size"></td>
              <td class=""><img src="../src/img/sale-3.png" alt="" class=" img-shopitem-size"></td>
              <td class="location">
                  <span class="item-name"><b>ARAW NG KALAYAAN MEDAL</b></span>
                  <p> <span class="location">Goa, PH</span>
                      <span>|</span>
                      <a class="shop-name-item" href="#">Numisworks Auction Product Trading</a>
                  </p>
                   <span>Price: ₱0.00</span>
              </td>
               </tr>
          </tbody> 
        </table>  
        <span><hr></span>

      <table class="f-product-color p-4 pl-5 ">
            <tbody class="pt-2    card-shopitem-size">
              <tr>
              <td class="si-obverse"><img src="../src/img/sale-4.png" alt="" class=" img-shopitem-size"></td>
              <td class="si-reverse"><img src="../src/img/sale-4.png" alt="" class=" img-shopitem-size"></td>
              <td class="location">
                  <span class="item-name"><b>GABRIELA SILANG MEDAL</b></span>
                  <p> <span class="location">Goa, PH</span>
                      <span>|</span>
                      <a class="shop-name-item" href="#">Numisworks Auction Product Trading</a>
                  </p>
                   <span>Price: ₱0.00</span>
              </td>
               </tr>
          </tbody> 
        </table>
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
