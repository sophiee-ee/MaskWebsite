
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>pillloMart</title>
    <link rel="icon" href="img/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="css/styles.css" />
</head>
    <body>
        <!--<header>
            <nav class = "nav-header-main">
                <a class = "header-logo" href ="#">
                    <img src = "" alt = "logo"> put in the logo-->
                <!--</a>
                <ul>
                    <li><a href = "index.php">Home</a> </li>
                    <li><a href = "#">Home</a> </li> Change in accordance to what we used
                    <li><a href = "#">Home</a> </li>
                    <li><a href = "#">Home</a> </li>
                </ul>
            </nav>
                <div class = "header-login">-->
                <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="img/powHearingLogo.PNG" alt="logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_icon"><i class="fas fa-bars"></i></span>
              </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="product_list.html">Products</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      pages
                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="checkout.html">product checkout</a
                      >
                      <a class="dropdown-item" href="cart.html"
                        >shopping cart</a
                      >
                      <a class="dropdown-item" href="confirmation.html"
                        >confirmation</a
                      >
                      <a class="dropdown-item" href="elements.html">elements</a>
                                    </div>
                                </li>
                                <!--
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                    <a class="dropdown-item" href="blog.html"> blog</a>
                    <a class="dropdown-item" href="single-blog.html">Single blog</a>
                </div>
            </li>-->

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.student.cs.uwaterloo.ca/~t25du/contact_new.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a href="login.html">
                                <i class="fas fa-user"></i>
                            </a>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i
                ></a>
                            <a href="cart.html">
                                <i class="flaticon-shopping-cart-black-shape"></i
                  ><span class="cartTotal"> 0</span>
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between search-inner">
            <input
              type="text"
              class="form-control"
              id="search_input"
              placeholder="Search Here"
            />
            <button type="submit" class="btn"></button>
            <span
              class="ti-close"
              id="close_search"
              title="Close Search"
            ></span>
          </form>
        </div>
      </div>
    </header>
    <!-- Header part end-->
    <section class="breadcrumb_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb_iner">
              <h2>login</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb part end-->
    <section class="login_part section_padding">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6">
            <div class="login_part_text text-center">
              <div class="login_part_text_iner">
                <h2>New to our Shop?</h2>
                <p>
                  There are advances being made in science and technology
                  everyday, and a good example of this is the
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="login_part_form">
              <div class="login_part_form_iner">
                <h3>
                  Welcome Back ! <br />
                  Please Sign in now
                </h3>
                    <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method= "post">
                        
                            <button class = "logout-button btn_3" type="submit" name="logout-submit">Logout</button>
    
                        </form>';
                            
                        }
                        else {
                            echo '<form class="row contact_form" action="includes/login.inc.php" method= "post">
                            
                            <input class = "text form-control" id = "name" type="text" name ="mailuid" placeholder = "E-mail...">
                            
                            <input class = "form-control" type="password" name ="pwd" placeholder = "Password...">
                            <div class="col-md-12 form-group">
                                <div class="creat_account d-flex align-items-center">
                                </div>
                            <button type="submit" name="login-submit" class = "btn_3">Login</button>
                            </div>
                        </form>
                        <a class = " btn_3" href = "signup.php">Sign-Up</a>';
                        }
                    ?>
                    
                    
                </div>
            </nav>

        </header>
    </body>