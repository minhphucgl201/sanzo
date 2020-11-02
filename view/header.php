<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>sand box</title>

    <!-- Favicon  -->
    <link rel="icon" href="../view/img/core-img/favicon.ico">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../view/css/cart.css">
    <link rel="stylesheet" href="../view/css/core-style.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Start WOWSlider.com HEAD section -->
   <link rel="stylesheet" type="text/css" href="../view/engine1/style.css" />
    <script type="text/javascript" src="../view/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <link rel="stylesheet" href="../view/node_modules/sweetalert2/dist/sweetalert2.min.css">
   
</head>

<body>
    
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">

        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="home.html"><img src="../view/img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Blouses &amp; Shirts</a></li>
                                        <li><a href="shop.html">T-shirts</a></li>
                                        <li><a href="shop.html">Rompers</a></li>
                                        <li><a href="shop.html">Bras &amp; Panties</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                        <li><a href="shop.html">T-Shirts</a></li>
                                        <li><a href="shop.html">Polo</a></li>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">Jackets</a></li>
                                        <li><a href="shop.html">Trench</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">T-shirts</a></li>
                                        <li><a href="shop.html">Jackets</a></li>
                                        <li><a href="shop.html">Trench</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="../view/img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="home.html">Home</a></li>
                                    <li><a href="allproduct.html">Shop</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?act=blog">Blog</a></li>
                            <li><a href="index.php?act=contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
            
            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="index.php?act=infor"><img src="../view/img/core-img/icons8-male-user-50.png" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="index.php?act=register"><img src="../view/img/core-img/user.svg" alt=""></a>

                </div>
                <!-- Cart Area -->
                <?php foreach ($countAllProduct as $count) {
               $count=$count['allproduct'];
            } ?>
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="../view/img/core-img/bag.svg" alt=""> <span><?=$count?></span></a>
                </div>
            </div>
            
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
     <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        
        <div class="cart-button">
            <?php foreach ($countAllProduct as $count) {
               $count=$count['allproduct'];
            } ?>
            <a href="#" id="rightSideCart"><img src="..view/img/core-img/bag.svg" alt=""> <span><?=$count?></span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">

                <?php 
                    foreach ($products as $sp) {
                        $img="../upload/".$sp['image_link'];
                        $name=$sp['name'];
                        $price=$sp['price'];    
                    
                 ?>
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="index.php?act=cart&action=add" class="product-image">
                        <img src="<?=$img?>" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6><?=$name?></h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price"><?=$price?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="cart.html" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->
    <!-- ##### Welcome Area Start ##### -->
    
    <!-- ##### Welcome Area End ##### -->
