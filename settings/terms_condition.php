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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.css">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link href="../src/css/main.css" rel="stylesheet" />
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
                <a class="nav-link" href="products.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fab fa-product-hunt fa-fw"></i>
                  </div>
                  Numismatic Items
                </a>
              </div>
              
              <!--Auction Product Link-->
              <div class="pl-3 pr-3 pb-2">
                <a class="nav-link dropdown-toggle active" role="button" href="#" data-toggle="dropdown" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-gavel fa-fw"></i>
                  </div>
                  Auction <span class="text-right w-100"></span>
                </a>
                <ul class="remove-list-style-type">
                  <li class="text-decoration-none">
                    <a class="nav-link active bg-transparent" href="#">
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
      <main id="layoutSidenav_content">
        <!--Main Content-->
        <div id="mainContent">
          <div class="container pt-5 pb-5">
            <h5 class="pt-5 text-center">Terms & Conditions</h5>
          </div>
          <div class="text-center pl-3 pr-3">
            <p>
              Thank you for taking the time to learn more about  <strong>Numisworks Auction Product Trading</strong> and its website located at <a target="#" href="Privacy & Policy">www.filinumisworks.com.</a> 
            </p>
            <br> 
            <p class="text-left">
              APPLICABILITY,ELIGIBILTY Please read the following Terms and Conditions as well as any other regulations and guidelines that we may communicate to you through the site, including the Numisworks Auction Product Trading, from time to time. Numisworks Auction Product Trading
              By reference, the following privacy policies are incorporated herein (collectively, the "Terms"). <i>THE SITE'S USERS MUST BE AT LEAST 18 YEARS OLD</i>. If you register or use this website on behalf of a corporate entity or organization, and you must be at least 18 years old (collectively referred to as the "subscription organization"), you declare and warrant that you are the authorized representative authority of the subscription organization. Make you bound by these terms, and you hereby agree to be bound by these terms on your behalf.  In this case, "you" in these terms refers to you, the subscribing organization, and any other person who uses this website on behalf of the subscribing organization or with the authorization or consent of the subscribing organization. 
            </p> 
            <h6>ACCEPTANCE</h6> 
            <p>
              The Terms do, in fact, generate and constitute a legally enforceable contract between you and <i>Numisworks Auction Product Trading. </i> By using or accessing the site in any way, including registering to attend or participate in any auction event (any such auction that you register for, an "auction")or by When you submit an absentee bid), you ("you") acknowledge that you have read, understood, and agree to be bound by and comply with the site's regulations. If you do not agree to these Terms at any time, you must stop using the Site immediately. Without limiting the foregoing, if you register to bid or submit any registration form through the site, including a Bidder Registration Application or Telephone and any Absentee Bidder Registration Application form, or otherwise register to bid or submit any registration form, you are agreeing to be bound by the following terms and conditions You are deemed to have executed such form as if you had signed an original copy, and you are deemed to have read, understood, accepted, and agreed to be bound by an of the General Conditions, including but not limited to the <i> Numisworks Auction Product Trading</i> for the applicable auction event, when you submit a form through the site.
            </p>

            <h6>ACCESS</h6> 
            <p>
             Subject to your ongoing full compliance with these terms Pilinumiswork grants you permision to access and use the Site as provided herein and consistent with its intended features, provided that(i) you may not reproduce, modify, publicity display , publicity show, perform publicity, or distribute any part of the SIte or its contents; and you may not engage in any of the prohibited uses below.
            </p> 

            <h6>ACCOUNT INFORMATION</h6> 
            <p>
              To use some of the Site's features, you'll need to register a new account, or user. You represent and warrant that all information you provide to <i>Numisworks Auction Product Trading</i> through the Site is accurate and complete at all times (including through any initial registration or any subsequent modification thereto), will be accurate, up-to-date, and comprehensive. You also represent and certify that you will maintain the accuracy and timeliness of this information at all times.
            </p> 

          <h6>PASSWORD</h6> 
          <p>
            After registering, users will receive login information such as a username and password. You may not allow third parties access to your account or share account information with them.  Because you will be responsible for all activity that occurs under your access credentials, including but not limited to the submission or alteration of absentee or other bids, you should keep your login and password secure. If you have reason to believe that your account information has been hacked or that your account has been accessed by a third party, you agree to notify Pilinumiswork immediately by e-mail at <a href="">help@filinumiswork.com</a>.
          </p>

          <h6>LINKED ACCOUNT</h6> 
          <p>
            <i>Numisworks Auction Product Trading</i> may allow you to link your account(s) on the Site to your accounts on third-party services, such as third-party social media providers ("Linked Accounts"), now or in the future.If you link your account on the Site to a Linked Account, you authorize Numisworks Auction Product Trading to maintain and use your access credentials to access your Linked Account on your behalf as your agent to integrate your experience with the Site features enabled by such Linked Account.Integration with login capabilities, communication and notification systems, as well as pushing and/or retrieving information to and from your Linked Accounts are all possibilities.If you link to, access, or use a third-party service through the Site in this way, you may be subject to additional terms imposed by the appropriate third party, and it is your sole obligation to comply with those terms.
          </p>
          

          <h6>REGISTERING TO BID</h6> 
          <p>
            Registration is required. You will not be allowed to bid at the auction if you are not registered. Prospective bidders can request to register for an Auction by going to <a href="_self"> www.filinumisworks.com/register</a>.
          </p>

          <h6>COPYRIGHT</h6> 
          <p>
            Numisworks Auction Product Trading owns any pictures, drawings, or textual descriptions of the Lots created by or for Numisworks Auction Product Trading. Numisworks Auction Product Trading may freely use, publish, show, and reproduce all of the following for any purpose and in any media. No bidder or buyer will have any right, title, or interest in any of the above after the auction. Numisworks Auction Product Trading' photographs, films, graphics, and written descriptions will not be used, reproduced, or published by any bidder or purchaser for any reason.
          </p>

          <h6>BUYER</h6> 
          <p>
           A legally enforceable pact. The buyer is the highest bidder recognized by the Auctioneer and accepted by Numisworks Auction Product Trading, subject to any reserve and the conditions of the General Conditions, if applicable. The Demise of the Auctioneer's Office The moment the Countdown Clock reaches zero (in the case of Live Auctions) or the hammer falls (in the case of Online-Only Auctions), as appropriate (the "Fall of the Hammer"),
          </p>
        </div>
      </main>
    </div>
    <!--===============================================================================================-->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="../src/js/toggle-sidenav.js"></script>
      <script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.8.0,npm/fullcalendar@5.8.0/locales-all.min.js,npm/fullcalendar@5.8.0/locales-all.min.js,npm/fullcalendar@5.8.0/main.min.js"></script>
      <script src="../src/js/calendar-init.js"></script>
      <script src="../src/js/toggle-nav-links.js"></script>
  </body>
</html>
