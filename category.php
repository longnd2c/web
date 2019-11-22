<?php
session_start();
if(isset($_SESSION["uid"])){
  header("location:profileCate.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
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
</head>
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
                        <a class="nav-link" href="#">Shop Category</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Product Details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Product Checkout</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Shopping Cart</a>
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
                      <input type="text" class="input" id="txtsearch" placeholder="Search">
                      <div class="btn">
                      <i class="ti-search" id="search_btn" aria-hidden="true"></i>
                      </a>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item"> <!-- submenu dropdown -->
                    <a href="#" class="icons" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="ti-shopping-cart" aria-hidden="true"></i>
                      <span class="badge">0</span>
                    </a>
                    <ul class="dropdown-menu" style="width:450px; background-color:#29a9e3">
                      <div class="panel panel-success">
                        <div class="panel-heading">
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

  <!--================Home Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Shop Category</h2>
              <p>All of our products</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="category.php">Category</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

<!--================Category Product Area =================-->
<section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="product_top_bar">
              <div class="left_dorp">
                <select class="sorting">
                  <option value="1">Default sorting</option>
                  <option value="2">Default sorting 01</option>
                  <option value="4">Default sorting 02</option>
                </select>
                <select class="show">
                  <option value="1">Show 12</option>
                  <option value="2">Show 14</option>
                  <option value="4">Show 16</option>
                </select>
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row" id="get_product">
                <!--
                <div class="col-lg-4 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                      <img
                        class="card-img"
                        src="img/product/inspired-product/i1.jpg"
                        alt=""
                      />
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
        </div>

          <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                  <div id="get_category">
                  </div>
                <!--
                <div class="l_w_title">
                  <h3>Browse Categories</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Frozen Fish</a>
                    </li>
                    <li>
                      <a href="#">Dried Fish</a>
                    </li>
                    <li>
                      <a href="#">Fresh Fish</a>
                    </li>
                    <li>
                      <a href="#">Meat Alternatives</a>
                    </li>
                    <li>
                      <a href="#">Fresh Fish</a>
                    </li>
                    <li>
                      <a href="#">Meat Alternatives</a>
                    </li>
                    <li>
                      <a href="#">Meat</a>
                    </li>
                  </ul>
                </div>
                -->
              </aside>

              <aside class="left_widgets p_filter_widgets">
              <div id="get_brand">
                  </div>
                  <!--
                <div class="l_w_title">
                  <h3>Product Brand</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Apple</a>
                    </li>
                    <li>
                      <a href="#">Asus</a>
                    </li>
                    <li class="active">
                      <a href="#">Gionee</a>
                    </li>
                    <li>
                      <a href="#">Micromax</a>
                    </li>
                    <li>
                      <a href="#">Samsung</a>
                    </li>
                  </ul>
                </div>
                    -->
              </aside>

              
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Price Filter</h3>
                </div>
                <div class="widgets_inner">
                  <div class="range_item">
                    <div id="slider-range"></div>
                    <div class="">
                      <label for="amount">Price : </label>
                      <input type="text" id="amount" readonly />
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->
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
          <a href="#"><i class="fab fa-behance"></i></a>
        </div>
      </div>
    </div>
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
    <script src="js/mail-script.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/mainindex2.js"></script>
    <script type="application/javascript" src="http://www.telize.com/jsonip?callback=getip"></script>


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

<script>
var input = document.getElementById("txtsearch");
    input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("search_btn").click();
    }
    });
</script>

</body>
</html>