<?php

include 'config.php';
session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Cake</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Links -->
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css//swiper.min.css">
    <link rel="stylesheet" href="./css/index.css" />
</head>

<body>
<div class="sidebar">
        <div class="links">
            <ul class="nav-ul">
                <li class="nav-item">
                    <div class="logo">
                        <a href="index.html">
                            <img src="./assets/Free_Sample_By_Wix.jpg" alt="logo">
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">Products</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- HEADER -->
    <header id="header">
        <nav class="navbar">
            <div class="container">
                <div class="upper-nav">
                    <!-- left links -->
                    <div class="links">
                        <ul class="nav-ul">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.html">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.html">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.html">Products</a>
                            </li>
                        </ul>
                    </div>

                    <!-- logo -->
                    <div class="logo-con">
                        <div class="logo">
                            <a href="index.html">
                                <img src="./assets/Free_Sample_By_Wix.jpg" alt="logo">
                            </a>
                        </div>
                    </div>

                 



                              <!-- After login -->

                           <?php
                           if(isset($_SESSION['loggedin'])){
                           ?>
                        <div class="icons">
                        <div class="burger">
                            <a href="#">
                                <span>
                                    <i class="fas fa-bars"></i>
                                </span>
                            </a>
                        </div>
                        <div class=" bucket" style="margin-left:5px;">
                            <a href="#">
                                <span>
                                    <i class="far fa-user"></i>
                                    <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></p>                                                  
                                </span>
                            </a>
                       

                            <!-- Buckit -->
                            <div class="bucket-dropdown">
                                <div class="buckit-items">
                                    <!-- List items -->
                                    <ul class="buckit-items-list">

                                    <li class="list-item">
                                            <div class="item-name">
                                                <a href="#">
                                                    <p>  <i class="far fa-user"></i>
                                                  Hi,  <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></p>                                                  
                                                </a>
                                            </div>                                            
                                        </li>

                                        <li class="list-item">
                                            <div class="item-name">
                                                <a href="reset_password.php">
                                                    <p>Reset Password</p>                                                  
                                                </a>
                                            </div>                                            
                                        </li>

                                        <li class="list-item">                                        
                                            <div class="item-name">
                                                <a href="logout.php">
                                                    <p>Logout</p>                                                  
                                                </a>
                                            </div>                                            
                                        </li>

                                    </ul>                                   
                                </div>
                            </div>
                            </div>


                        <div class="bucket">
                            <a href="#">
                                <span>
                                    <i class="fas fa-shopping-bag"></i>
                                </span>
                            </a>

                            <div class="badge">
                                <span>0</span>
                            </div>

                            <!-- Buckit -->
                            <div class="bucket-dropdown">
                                <div class="buckit-items">
                                    <!-- IF no item availabale in the cart  -->
                                    <!-- <span class="no-cart-itmes">Your cart is currently empty.</span> -->

                                    <!-- List items -->
                                    <ul class="buckit-items-list">

                                        <li class="list-item">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="./assets/BestCakes/Free_Sample_By_Wix.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="item-name">
                                                <a href="#">
                                                    <p>Celebration Cake</p>
                                                    <p>
                                                        <span class="color">Black</span> /
                                                        <span class="flavor">Blueberry</span>
                                                    </p>
                                                </a>
                                            </div>

                                            <div class="item-dlt">
                                                <a href="#">
                                                    <i class="far fa-times-circle"></i>
                                                </a>
                                            </div>
                                        </li>

                                        <li class="list-item">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="./assets/BestCakes/img-1_116fde62-b312-40b1-b08e-ff50c5cea562.jpg"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="item-name">
                                                <a href="#">
                                                    <p>Celebration Cake</p>
                                                    <p>
                                                        <span class="color">Black</span> /
                                                        <span class="flavor">Blueberry</span>
                                                    </p>
                                                </a>
                                            </div>

                                            <div class="item-dlt">
                                                <a href="#">
                                                    <i class="far fa-times-circle"></i>
                                                </a>
                                            </div>
                                        </li>

                                    </ul>

                                    <div class="cart-footer">
                                        <div class="sub-total">
                                            <p class="sub-total-text">
                                                Subtotal
                                            </p>
                                            <p class="amount-text">
                                                $36.00
                                            </p>
                                        </div>
                                        <div class="view-bag">
                                            <a href="#">
                                                VIEW BAG
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                           <?php
                           }else{
                            ?>
                          <div class="icons">
                          <div class="burger">
                            <a href="#">
                                <span>
                                    <i class="fas fa-bars"></i>
                                </span>
                            </a>
                        </div>
                          <div class="auth">
                            <a href="login_form.php">
                                <span>
                                    <i class="far fa-user"></i>
                                    Login
                                </span>
                            </a>
                        </div>
                    </div>
                           <?php
                           }
                           ?>
                                <!-- End -->


                    <!-- icons -->
                    
                </div>
            </div>
        </nav>
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="./assets/caroulses/cake-1_2000x.jpg" alt="Slide 1">
                    <div class="slider-heading-right">
                        <h5>
                            Fresh Cakes 1
                        </h5>
                        <h2>
                            EXCLUSIVE OFFERS
                        </h2>
                        <h4>
                            <span>50</span>% OFF
                        </h4>
                        <a href="#">
                            Shop Now
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/caroulses/cake-2_2000x.jpg" alt="Slide 2">
                    <div class="slider-heading-left">
                        <h5>
                            Fresh Cakes 1
                        </h5>
                        <h2>
                            EXCLUSIVE OFFERS
                        </h2>
                        <h4>
                            <span>50</span>% OFF
                        </h4>
                        <a href="#">
                            Shop Now
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="./assets/caroulses/cake-3_2000x.jpg" alt="Slide 3">
                    <div class="slider-heading-left">
                        <h5>
                            Fresh Cakes 1
                        </h5>
                        <h2>
                            EXCLUSIVE OFFERS
                        </h2>
                        <h4>
                            <span>50</span>% OFF
                        </h4>
                        <a href="#">
                            Shop Now
                        </a>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev">
                <i class="far fa-arrow-alt-circle-left"></i>
            </div>
            <div class="swiper-button-next">
                <i class="far fa-arrow-alt-circle-right"></i>
            </div>
        </div>
    </header>

    <!-- Best selling Products  -->
    <section id="bestSellingProducts" class="Best-Selling-Products">
        <div class="box">
            <div class="heading">
                <h5> For Any Party</h5>
                <h2>Best selling Products</h2>
            </div>

            <!-- <div class="product-container">
                <div class="col">
                    <div class="card">
                        <div class="card-top">
                            <span class="on-hover">
                                <img src="./assets//BestCakes/product32_grande.jpg" alt="">
                            </span>
                            <img class="display-img" src="./assets/BestCakes/p6_grande.jpg" alt="">
                        </div>

                        <div class="card-body">
                            <div class="card-link">
                                <a href="#">
                                    Celebration Cake
                                </a>
                            </div>

                            <div class="card-price">
                                <p>
                                    $369.00
                                </p>
                            </div>

                            <div class="add-to-cart">
                                <input type="hidden" name="id">
                             
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-top">
                            <span class="on-hover">
                                <img src="./assets//BestCakes/product32_grande.jpg" alt="">
                            </span>
                            <img class="display-img" src="./assets/BestCakes/p6_grande.jpg" alt="">
                        </div>

                        <div class="card-body">
                            <div class="card-link">
                                <a href="#">
                                    Celebration Cake
                                </a>
                            </div>

                            <div class="card-price">
                                <p>
                                    $369.00
                                </p>
                            </div>

                            <div class="add-to-cart">
                                <input type="hidden" name="id">
                                <a href="" class="btn">
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-top">
                            <span class="on-hover">
                                <img src="./assets//BestCakes/product32_grande.jpg" alt="">
                            </span>
                            <img class="display-img" src="./assets/BestCakes/p6_grande.jpg" alt="">
                        </div>

                        <div class="card-body">
                            <div class="card-link">
                                <a href="#">
                                    Celebration Cake
                                </a>
                            </div>

                            <div class="card-price">
                                <p>
                                    $369.00
                                </p>
                            </div>

                            <div class="add-to-cart">
                                <input type="hidden" name="id">
                                <a href="" class="btn">
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-top">
                            <span class="on-hover">
                                <img src="./assets//BestCakes/product32_grande.jpg" alt="">
                            </span>
                            <img class="display-img" src="./assets/BestCakes/p6_grande.jpg" alt="">
                        </div>

                        <div class="card-body">
                            <div class="card-link">
                                <a href="#">
                                    Celebration Cake
                                </a>
                            </div>

                            <div class="card-price">
                                <p>
                                    $369.00
                                </p>
                            </div>

                            <div class="add-to-cart">
                                <input type="hidden" name="id">
                                <a href="" class="btn">
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- NEW PRODUCTS  -->
    <section id="NEWPRODUCTS" class="new_products">
        <div class="box">
            <!-- <div class="heading">
                <h3>NEW PRODUCTS</h3>
            </div> -->
            <div class="tm-table">
                <div class="line table-cell"></div>
                <img class="table-cell"
                    src="https://z6z7q2p8.stackpathcdn.com/wp-content/themes/cakeart//images/cupcake.png" alt="cupcake"
                    title="Heading image">
                <div class="line table-cell"></div>
            </div>

            <div class="product-container">

            <?php 
$sql = 'select * from product';

$result = $link->query($sql);


        while ($row = $result->fetch_array()) 
{
	?>

                <div class="col">
                    <div class="card">
                        <div class="card-top">
                            <img src="./AdminPanel/<?php echo $row[1] ?>" alt="">
                        </div>

                        <div class="card-body">
                            <div class="card-link">
                                <a href="#">
                                <?php echo $row[2]; ?>
                                </a>
                            </div>

                            <div class="card-price">
                                <p>
                                <?php echo $row[3]; ?>
                                </p>
                            </div>
                            <div class="add-to-cart">
                            <input type="hidden" name="id">
                                <a href="" class="btn">
                                    Add to cart
                                </a>                            
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
        

            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="about-us" class="about-us">
        <div class="container">

            <div class="col-md-6">
                <div class="vu_c-wrapper">

                    <div class="vc_align_left">
                        <figure class="wpb_wrapper">
                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                    src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/10/cup-and-logo.png"
                                    class="vc_single_image-img attachment-full" alt=""
                                    srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/10/cup-and-logo.png 658w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/10/cup-and-logo-300x226.png 300w">
                            </div>
                        </figure>
                        <div class="img-overlay">
                            <img src="./assets/Free_Sample_By_Wix.jpg" alt="logo">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="vu_c-wrapper">
                    <div class="vc_align_right">
                        <div class="wpb_wrapper">
                            <h4 class="m-t-0 m-b-20">OUR BUSINESS</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>

                        </div>
                        <div class="wpb_wrapper">
                            <h4 class="m-t-0 m-b-20">WHO WE ARE</h4>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum
                                dolore eu fugiat nulla pariatur.</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Contact Us -->
    <section id="contact-us" class="contact-us">
        <div id="map"></div>
        <div class="contact-form">
            <div class="form-heading">
                <div class="wpb_wrapper">
                    <h3>
                        <span>CONTACT US</span>
                    </h3>
                    <p>
                        <span>Meet the creative team that
                            never sleeps. Say something to us we will answer to you.</span>
                    </p>

                </div>
            </div>
            <div class="form-container">

                <form action="" method="post">
                    <div style="display: none;">
                        <input type="hidden" name="" value="526">
                        <input type="hidden" name="" value="4.9.2">
                        <input type="hidden" name="" value="en_US">
                        <input type="hidden" name="" value="wpcf7-f526-p87-o1">
                        <input type="hidden" name="" value="87">
                    </div>

                    <div class="row">
                        <div class="col-xs-12 m-b-15">
                            <input type="text" name="your-name" value="" placeholder="Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-b-15">
                            <input type="tel" name="phone" value="" placeholder="Phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-b-15">
                            <input type="email" name="email" value="" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-b-15">
                            <textarea name="message" cols="40" rows="6" aria-required="true" aria-invalid="false"
                                placeholder="Message"></textarea></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="submit" value="SEND" class="btn" />
                        </div>
                    </div>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>

            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="box">
            <div class="col-md-3">
                <div class="vu_c-wrapper">

                    <div class="wpb_text_column">
                        <div class="wpb_wrapper">
                            <h3 class="m-t-0 m-b-15 fs-16"><span style="color: #ffffff;">HAPPY HOURS</span></h3>
                            <p><span style="color: #ffffff;">If you are near our shop, you are in luck. You can have
                                    that cookie WARMED UP! Oh, happy day. Pick your happiness!</span></p>
                        </div>
                    </div>
                    <div class="vu_social-networks">
                        <div class="vu_sn-container">
                            <div class="vu_social-icon">
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                            <div class="vu_social-icon">
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="vu_social-icon"><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="vu_social-icon"><a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="vu_c-wrapper">
                    <div class="wpb_text_column ">
                        <div class="wpb_wrapper">
                            <h3><span style="color: #ffffff;">OUR GALLERY</span></h3>

                            <div class="vu_l-gallery">
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1.jpg"
                                        class="vu_gw-image">

                                        <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1-600x600.jpg 600w">
                                    </a>
                                </div>
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4.jpg"
                                        class="vu_gw-image">

                                        <img width="150" height="150"
                                            src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4-600x600.jpg 600w"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </a>
                                </div>
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3.jpg"
                                        class="vu_gw-image">

                                        <img width="150" height="150"
                                            src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3-600x600.jpg 600w"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </a>
                                </div>
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13.jpg"
                                        class="vu_gw-image">

                                        <img width="150" height="150"
                                            src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13-600x600.jpg 600w"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </a>
                                </div>
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15.jpg"
                                        class="vu_gw-image">

                                        <img width="150" height="150"
                                            src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15-600x600.jpg 600w"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </a>
                                </div>
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16.jpg"
                                        class="vu_gw-image">

                                        <img width="150" height="150"
                                            src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16-600x600.jpg 600w"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </a>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="vu_c-wrapper">

                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <h3 class="m-t-0 m-b-15 fs-16"><span style="color: #ffffff;">OPENING HOURS</span></h3>
                        </div>
                    </div>

                    <div class="wpb_content_element ">
                        <div class="wpb_wrapper">
                            <div class="vu_working-hours">
                                <div class="vu_wh-item" data-day="1">
                                    <div class="vu_wh-day">Monday</div>
                                    <div class="vu_wh-hours">8:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="2">
                                    <div class="vu_wh-day">Tuesday</div>
                                    <div class="vu_wh-hours">8:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="3">
                                    <div class="vu_wh-day">Wednesday</div>
                                    <div class="vu_wh-hours">8:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="4">
                                    <div class="vu_wh-day">Thursday</div>
                                    <div class="vu_wh-hours">8:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="5">
                                    <div class="vu_wh-day">Friday</div>
                                    <div class="vu_wh-hours">8:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="6">
                                    <div class="vu_wh-day">Saturday</div>
                                    <div class="vu_wh-hours">10:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="0">
                                    <div class="vu_wh-day">Sunday</div>
                                    <div class="vu_wh-hours">Closed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="powered">
            <div class="copyright">
                Copyright © <span id="copyrightYear"></span> Bakery WordPress Theme by
            </div>
        </div>
    </footer>


    <a class="back-to-top hide" href="#header">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <!-- Scripts -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMR0VubGQmvqaWticCn-eAMoaXudxJ9Uc&callback=initMap">
    </script>
    <script src="./js/all.min.js"></script>
    <script src="./js//swiper.min.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>