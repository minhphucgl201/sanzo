<section class="welcome_area bg-img background-overlay" style="background-color: white;">
        <div id="wowslider-container1">
            <div class="ws_images"><ul>
                <li><img src="../view/data1/images/bg8.jpg" alt="" title="" id="wows1_0"/></li>
                <li><img src="../view/data1/images/blog1.jpg" alt="" title="" id="wows1_1"/></li>
                <li><img src="../view/data1/images/blog2.jpg" alt="" title="" id="wows1_2"/></li>
                <li><img src="../view/data1/images/blog3.jpg" alt="" title="" id="wows1_3"/></li>
                <li><img src="../view/data1/images/blog4.jpg" alt="" title="" id="wows1_4"/></li>
                <li><img src="../view/data1/images/blog5.jpg" alt="" title="" id="wows1_5"/></li>
                <li><a href="http://wowslider.net"><img src="../view/data1/images/blog6.jpg" alt="image carousel" title="" id="wows1_6"/></a></li>
                <li><img src="../view/data1/images/rp2.jpg" alt="" title="" id="wows1_7"/></li>
            </ul></div>
            <div class="ws_bullets"><div>
                <a href="#" title=""><span><img src="../view/data1/tooltips/bg8.jpg" alt=""/>1</span></a>
                <a href="#" title=""><span><img src="../view/data1/tooltips/blog1.jpg" alt=""/>2</span></a>
                <a href="#" title=""><span><img src="../view/data1/tooltips/blog2.jpg" alt=""/>3</span></a>
                <a href="#" title=""><span><img src="../view/data1/tooltips/blog3.jpg" alt=""/>4</span></a>
                <a href="#" title=""><span><img src="../view/data1/tooltips/blog4.jpg" alt=""/>5</span></a>
                <a href="#" title=""><span><img src="../view/data1/tooltips/blog5.jpg" alt=""/>6</span></a>
                <a href="#" title=""><span><img src="../view/data1/tooltips/blog6.jpg" alt=""/>7</span></a>
                <a href="#" title=""><span><img src="../view/data1/tooltips/rp2.jpg" alt=""/>8</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript image slider</a> by WOWSlider.com v8.8</div>
            <div class="ws_shadow"></div>
            </div>  
            <script type="text/javascript" src="../view/engine1/wowslider.js"></script>
            <script type="text/javascript" src="../view/engine1/script.js"></script>
    </section>
    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <?php  
                    foreach ($catalog as $dm) {
                        $name=$dm['name'];
                        $link="product&idcatalog=".$dm['id'];
                    echo '<div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(../view/img/bg-img/bg-8.jpg);">
                        <div class="catagory-content">
                            <a href="'.$link.'"> '.$name.'</a>
                        </div>
                    </div>
                </div>';
                ?>

                
            <?php } ?>
                <!-- Single Catagory -->
        <!--         <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(../view/img/bg-img/bg-3.jpg);">
                        <div class="catagory-content">
                            <a href="#">Shoes</a>
                        </div>
                    </div>
                </div>
                Single Catagory
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(../view/img/bg-img/bg-4.jpg);">
                        <div class="catagory-content">
                            <a href="#">Accessories</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(../view/img/bg-img/bg-5.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-60%</h6>
                                <h2>Global Sale</h2>
                                <a href="#" class="btn essence-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        <?php
                            foreach ($products as $sp) {
                                  // $product=getAllProduct();
                              $name=$sp['name'];
                              $discount=$sp['discount'];
                              $price=$sp['price'];
                              $img="../upload/".$sp['image_link'];
                              $idname=$sp['catalog_id'];
                              $namedm=getnamecata($idname);
                              $link="index.php?act=productdetail&idcatalog=".$sp['id'];
                              
                        ?>
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="index.php?act=productdetail"><img src="<?=$img?>" alt=""></a>
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="../view/img/product-img/product-3.jpg" alt="">
                                  <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span><?php echo "-".$discount. "%" ?></span>
                                </div>
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span><?= $namedm['name'];?></span>
                                <a href="single-product-details.html">
                                    <h6><?=$name;?></h6>
                                </a>
                                <p class="product-price"><?=$price?></p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="<?= $link?>" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php  
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Brands Area Start ##### -->

    <!-- ##### Brands Area End ##### -->