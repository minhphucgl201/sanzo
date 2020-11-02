<?php 
	include '../model/connect.php';
	include '../model/binhluan.php';
	session_start();
	if (isset($_SESSION['sid']) && ($_SESSION['sid'])>0) {
		if (isset($_POST['submit']) && ($_POST['submit'])) {
			$name=$_POST['name'];
			$content=$_POST['content'];
			thembl($name,$content);
		}
		$dsbl=showbl();
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../view/css/style.css">
</head>
<body>
	<div class="category-tab shop-details-tab"><!--category-tab-->
						
						<div class="tab-content">
							<div>
								<?php 
										echo '<h3>Hỏi đáp về sản phẩm </h3>';
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
									
									<form action="" method="post">
										
										<input type="text" name="name" placeholder="nhập tên người dùng">
										<textarea name="content" placeholder="Viết bình luận của bạn (Vui lòng gõ tiếng việt có dấu)"></textarea>
										<?php if (isset($sus)): ?>
                        <div class="alert alert-success alert-dismissible">
                          <input type="submit" name="them" class="close" data-dismiss="alert" value="Submit">
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
					<div class="category-tab shop-details-tab"><!--category-tab-->
						
						<div class="container">
	
	<div class="card">
	    <div class="card-body">
	        <div class="row">
	        	
        	    <div class="col-md-2">
        	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
        	        <p class="text-secondary text-center">15 Minutes Ago</p>
        	    </div>
        	    <div class="col-md-10">
        	        <p>
        	            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong><?php foreach ($dsbl as $bl) {
        	            	echo $bl['name'];
        	            } ?></strong></a>
        	           
        	       </p>
        	       <div class="clearfix"></div>
        	        <p> <?php foreach ($dsbl as $bl) {
        	            	echo $bl['comment'];
        	            } ?> </p>
        	        <p>
        	            <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
        	            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
        	      	</p>
        	    </div>
        	
	        </div>
	        	
	    </div>
	</div>
</div>
					</div><!--/category-tab-->
					
</body>
</html>