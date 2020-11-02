<?php  
    
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $name=$_POST['name'];
        $detail=$_POST['detail'];
        if (empty($detail) or empty($detail) ) {
            $error='Không được để trống';
        }
        
        if (!isset($error)) {
            $sql= "INSERT INTO comment (name,comment) VALUES ('$name','$detail')";
                $stmt=$conn->prepare($sql);
                $sus=$stmt->execute();
        }
        else{
            $error="Nhập lại";
        }
    }
?>
<div class="container">
	<div class="row  ">
		<div class="col-xl-3">
                    <div class="shop_sidebar_area mt-md-50">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">The Kind</h6>

                            <!--  Catagories  -->
                           
                                
                            <?php   foreach ($products as $sp) {
                                    $name=$sp['name'];
                                    $link="index.php?act=product&idcatalog=".$sp['id'];
                            ?>
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <a href="<?= $link?>"><?=$name?></a>
                                        
                                    </li>
                                    <!-- Single Item -->
                                    
                                </ul>
                            </div>
                        <?php } ?>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Filter by</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Price</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Range: $490 - $360</div>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget color mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Color</p>
                            <div class="widget-desc">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1"></a></li>
                                    <li><a href="#" class="color2"></a></li>
                                    <li><a href="#" class="color3"></a></li>
                                    <li><a href="#" class="color4"></a></li>
                                    <li><a href="#" class="color5"></a></li>
                                    <li><a href="#" class="color6"></a></li>
                                    <li><a href="#" class="color7"></a></li>
                                    <li><a href="#" class="color8"></a></li>
                                    <li><a href="#" class="color9"></a></li>
                                    <li><a href="#" class="color10"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget brands mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Brands</p>
                            <div class="widget-desc">
                                <ul>
                                    <li><a href="#">Asos</a></li>
                                    <li><a href="#">Mango</a></li>
                                    <li><a href="#">River Island</a></li>
                                    <li><a href="#">Topshop</a></li>
                                    <li><a href="#">Zara</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

		</div>
		<div class="col-xl-9">
				
			<div class="row product-details"><!--product-details-->
				<?php 
							if ($product==0) {
								echo "<h3>sản phẩm k tồn tại</h3>";
							}
							else{
								// lấy dự liệu về

								$id=$product['id'];
								$name=$product['name'];
								$price=$product['price'];
								$img="../upload/".$product['image_link'];
								$iddm=$product['catalog_id'];
								$namedm=getnamecata($iddm);
                                $link="cart=add.html";
								

							
						 ?>
				        <div class="row">
                                                    <div class="col-xl-5">
                            <div class="view-product">
                                <span class='zoom' id='ex1'>
                                <img src="<?=$img?>" alt="" />
                                <h3 class='zoom' id='ex4'>ZOOM</h3>
                               </span>
                                
                            </div>
                            
                        </div>
                        <div class="col-xl-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="../view/img/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?=$name?></h2>
                                <p>Web ID: <?= $id ?></p>
                                <img src="../view/img/product-details/rating.png" alt="" />
                                <span>
                                    <span>US: <?=number_format($price,0,".",".")?></span>
                                    
                                <form action="cart=add.html" method="post">
                                    <label>Quantity:</label>
                                    <input type="text" value="1" name="quantity[<?=$id?>]" />
                                    
                                     <a href="<?=$link?>"><button type="submit" onclick="sweetalertclick()" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart

                                    </button></a>
                                    </form>
                                </span>
                                <p><b>Availability:</b> In Stock</p>
                                <p><b>Condition:</b> New</p>
                                <p><b>Brand:</b><?php    echo " " .$namedm['name']?> </p>
                                <a href=""><img src="../view/img/product-details/share.png" class="share img-responsive"  alt="" /></a>
                            </div><!--/product-information-->
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12" style="width: 800px;">
                                                                        <div class="category-tab shop-details-tab"><!--category-tab-->
                        
                        <div class="tab-content">
                            <div>
                                <?php 
                                        echo '<h3>Hỏi đáp về sản phẩm '.$name.'</h3>';
                                     ?>
                            </div>
                            
                            <div class="tab-pane  active in" id="reviews" >
                                <div class="col-sm-12">
                                    
                                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>Loi!</strong> <?php echo $error; ?>
                        </div>
                    <?php endif ?>
                                  <?php 
                                     foreach ($dssp as $sp) {
                                $link="index.php?act=productdetail&idcatalog=".$sp['id'];
                            }
                                   ?>
                                    <form action="<?=$link?>" method="post">
                                        <input type="text" class="form-control" name="name" placeholder="Nhập tên">
                                        <textarea name="detail" placeholder="Viết bình luận của bạn (Vui lòng gõ tiếng việt có dấu)"></textarea>
                                        <?php if (isset($sus)): ?>
                        <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong></strong> <?php echo "<p>Feedback Thanh Công</p>"; ?>
                        </div>
                    <?php endif ?>
                    
                        <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Rating</strong></a>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>

                   </p> </b> <img src="" alt="" />
                                        <button type="submit" name="submit" class="btn btn-default pull-right">
                                            Submit
                                        </button>
                                    </form>
                                
                                </div>
                            </div>
                            
                        </div>





                    </div><!--/category-tab-->
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        
                        <div class="container">
    
    <div class="card">
        <div class="card-body">
            <div class="row">
                <?php foreach ($dsbl as $bl){
                            
                            $name=$bl['name'];
                            $comment=$bl['comment'];
                        
                            # code...
                         ?>
                <div class="col-md-2">
                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                    <p class="text-secondary text-center">15 Minutes Ago</p>
                </div>
                <div class="col-md-10">
                    <p>
                        <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong> <?php echo $name; ?></strong></a>
                   </p>
                   <div class="clearfix"></div>
                    <p > <?php echo $comment; ?></p>
                    <p>
                        <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                        <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                    </p>
                </div>
            <?php } ?>
            </div>
                
        </div>
    </div>
</div>
                    </div><!--/category-tab-->
                                </div>
                            </div>
                        </div>

					<?php } ?>
					</div><!--/product-details-->
		</div>
	</div>
</div>
<script type="text/javascript">
        function sweetalertclick(){
          Swal.fire("Add to cart ", "You clicked the button!", "success");
        }
    </script>