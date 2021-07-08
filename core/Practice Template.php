<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Practice Web Layout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <div class="d-flex">
        <div>
            <a class="sidebar">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
    
        </div>       
            <div class="topnav">
                <div class="nav-spacing">
                  <button class="btn btn-danger active" href="#home">Home</button>                                  
                  <button class="btn btn-default"href="#news">Cart</button>
                  <button class="btn btn-default" href="#contact">Notification</button>
                  <button class="btn btn-default" href="#About">About</button>
                  <button class="btn btn-default" href="#Logout">Logout</button>
             </div>   
          </div>
      </div>
      
        <div class="container">
                  <!--Contains Breadcrumbs, shop selection, and shop description-->
              <div class="slide-downward bg-home p-3">

                <!--Breadcrumb-->
                <div class="page__section mb-4 ">
                  <nav class="breadcrumb breadcrumb_type bg-white" aria-label="Breadcrumb">
                    <ol class="breadcrumb__list r-list">
                      <li class="breadcrumb__group">

                        <i class="fas fa-home fa-sm ml-2"></i>
                        
                        <a href="home.php" class="breadcrumb__point r-link ml-2">Home</a>
                        <span class="fs-header breadcrumb__divider" aria-hidden="true">›</span>
                      </li>
                      <li class="breadcrumb__group">
                        <span href="#" class="breadcrumb__point">Live Auction</span>
                      </li>
                    </ol>
                  </nav>
              </div>
          </div>
      </div>  
                     
</body>