<?php
session_start();
if(isset($_SESSION["uid"])){
  header("location:profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LONG - Gaming Shop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/main.js"></script>
    <style>
        .carousel-inner img{
            width: 100%;
            height: 100%;
        }
    </style>
<body>
    <!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>Phone: 0999 999 999</p>
              <p>email: longndbhaf180055@fpt.edu.com</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
                <li>
                  <a href="#">
                    track order
                  </a>
                </li>
                <li>
                  <a href="#">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.php">
            <img src="img/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Product</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="category.php">Shop Category</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Product Details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Product Checkout</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="cart.php">Shopping Cart</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <li class="nav-item">
                    <div class="search-box">
                      <input type="text" class="input" id="txtsearch_index" placeholder="Search">
                      <div class="btn">
                      <i class="ti-search" aria-hidden="true"></i>
                      </a>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="icons" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="ti-shopping-cart" aria-hidden="true"></i>
                      <span class="badge">0</span>
                    </a>
                    <ul class="dropdown-menu">
                      <div class="panel panel-success">
                        <div class="panel-heading"  style="width:450px; background-color:#29a9e3">
                          <div class="row">
                            <div class="col-md-3" style="font-size:14px; text-align: center; color:white;">S1.No</div>
                            <div class="col-md-3" style="font-size:14px; text-align: center; color:white;">Product IMG</div>
                            <div class="col-md-3" style="font-size:14px; text-align: center; color:white;">Product Name</div>
                            <div class="col-md-3" style="font-size:14px; text-align: center; color:white;">Price ($)</div>
                          </div>
                        </div>
                        <div class="panel-body"></div>
                        <div class="panel-footer"></div>
                      </div>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="loginform.php" class="icons">
                      <i class="ti-user" aria-hidden="true"></i>
                    </a>
                    <!--  DROPDOWN LOGIN FORM
                    <ul class="dropdown-menu">
                      <form action="index.php" class="login-form">
                        <h2>Login</h2>
                        <div>
                          <div class="txtb">
                            <input type="text">
                            <span data-placeholder="Username"></span>
                          </div>
                          <div class="txtb">
                            <input type="password">
                            <span data-placeholder="Password"></span>
                          </div>
                          <input type="submit" class="logbtn"value="Login">
                          <div class="bottom-login">
                            Don't have account? <a href="registerform.php">Sign up</a>
                          </div>
                        </div>
                      </form>
                    </ul> -->
                  </li>
                </ul>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Menu Area =================-->
    <!--================OLD MENU =================

    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a href="#" class="navbar-brand">Long</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home"></i> HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-bars"></i> PRODUCT</a></li>
                <li style="width:300px;left:10px;top:10px;"><input type="text" id="search" class="form-control"></li>
                <li style="top:10px;left:20px"><input type="submit" value="Search" class="btn btn-primary" id="search_btn"></li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> Signin</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> Signup</a>
                 </li>
             </ul>
        </div>
    </nav>
    
  <p><br></p>
  <p><br></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <div class="nav nav-pills nav-stacked">
                    <li class="nav-item"><a class="nav-link active"href="#"><h5>Categories</h5></a></li>
                    <li class="nav-item"><a class="nav-link"href="#">Categories</a></li>
                    <li class="nav-item"><a class="nav-link"href="#">Categories</a></li>
                    <li class="nav-item"><a class="nav-link"href="#">Categories</a></li>
                    <li class="nav-item"><a class="nav-link"href="#">Categories</a></li>
                </div>
                <div class="nav nav-pills nav-stacked">
                    <li class="nav-item"><a class="nav-link active"href="#"><h5>Brand</h5></a></li>
                    <li class="nav-item"><a class="nav-link"href="#">Categories</a></li>
                    <li class="nav-item"><a class="nav-link"href="#">Categories</a></li>
                    <li class="nav-item"><a class="nav-link"href="#">Categories</a></li>
                    <li class="nav-item"><a class="nav-link"href="#">Categories</a></li>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-info">

                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
  </div>
    OLD MENU------------------>

<!--IMG show-->
    <div id="demo" class="carousel slide" datar-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/msi.jpg" alt="MSI GT75 Titan" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="img/mac.jpg" alt="MSI GT75 Titan" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="img/lap.jpg" alt="MSI GT75 Titan" width="1100" height="500">
            </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
<!--body-->
<p><br></p>

<!-- Start feature Area -->
  <section class="feature-area section_gap_bottom_custom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-money"></i>
              <h3>Money back gurantee</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-truck"></i>
              <h3>Free Delivery</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-support"></i>
              <h3>Alway support</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-blockchain"></i>
              <h3>Secure payment</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- End feature Area -->

<!--================ Feature Product Area =================-->
<section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Featured product</span></h2>
            <p>Some of featured product</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/msi1.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>MSI GT75 Titan</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$4200</span>
                <del>$4500</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/dell1.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>DELL Alienware 17R5</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$3000</span>
                <del>$3500</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/acer1.png" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>ACER Predator 21X</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$4100</span>
                <del>$5000</del>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Feature Product Area =================-->
<!--================ Offer Area =================-->
  <section class="offer_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="offset-lg-4 col-lg-6 text-center">
          <div class="offer_content">
            <h3 class="text-uppercase mb-40">all laptop's collection</h3>
            <h2 class="text-uppercase">30% off</h2>
            <a href="#" class="main_btn mb-20 mt-5">Discover Now</a>
            <p>Limited Time Offer</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--================ End Offer Area =================-->

<!--================ New Product Area =================-->
<section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>new products</span></h2>
            <p>Some of mew products</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="new_product">
            <h5 class="text-uppercase">Best Laptop of 2019</h5>
            <h3 class="text-uppercase">MSI GT76 Titan</h3>
            <div class="product-img">
              <img class="img-fluid" src="img/product/msigt76.jpg" alt="" />
            </div>
            <h4>$5500</h4>
            <a href="#" class="main_btn">Add to cart</a>
          </div>
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0">
          <div class="row" id="get_productnew">
            <!--
            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/new-product/n1.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Nike latest sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>
                -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End New Product Area =================-->

  <!--================ Inspired Product Area =================-->
  <section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Top Selling Products</span></h2>
            <p>Some of top selling products</p>
          </div>
        </div>
      </div>

      <div class="row" id="get_productsell">
        <!--
        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/inspired-product/i1.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>
        -->

      </div>
    </div>
  </section>
  <!--================ End Inspired Product Area =================-->

  <!--================ start footer Area  =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>CATEGORIES</h4>
          <ul>
            <li><a href="#">Hot Deal</a></li>
            <li><a href="#">MSI Laptops</a></li>
            <li><a href="#">DELL Laptops</a></li>
            <li><a href="#">ASUS Laptops</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>INFORMATION</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>SERVICE</h4>
          <ul>
            <li><a href="#">My Account</a></li>
            <li><a href="#">View Cart</a></li>
            <li><a href="#">Track My Order</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
        </div>
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>ABOUT US</h4>
          <p>LONG is a Gaming Shop, we sell many type of laptops from some famous laptop brands in the world.</p>
          <p><i class="fas fa-envelope"></i>   longndbhaf180055@fpt.edu.vn</p>
          <p><i class="fas fa-phone"></i> 0999 999 999</p>
          <p><i class="fas fa-map-marker-alt"></i> 107 Nguyen Phong Sac Road, Ha Noi</p>
        </div>
      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fas fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        <div class="col-lg-4 col-md-12 footer-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-dribbble"></i></a>
          <a href="#" ><i class="fab fa-behance"></i></a>
        </div>
      </div>
    </div>
    <div id="search_index_btn"></div>
  </footer>
  <!--================ End footer Area  =================-->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
  <script src="js/mainindex.js"></script>
  <script src="js/mainindex2.js"></script>
  <script>
    $(document).ready(function(){
      $(".btn").click(function(){
        $(".input").toggleClass("active").focus().val("");
        $(this).toggleClass("animate");
      });
    });
  </script>
<script>
  $(".txtb input").on("focus",function(){
    $(this).addClass("focus");
  });

  $(".txtb input").on("blur",function(){
    if($(this).val()=="")
    $(this).removeClass("focus");
  });
</script>
</body>
</html>
