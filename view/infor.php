<div class="container">
	<div class="card-header mb-5">
		<h3>Thông tin về tôi</h3></div>
		<form action="#" method="post">
			
		<?php if ($_SERVER['REQUEST_METHOD']=='POST') {
		         $username=$_POST['username'];
                $useremail=$_POST['useremail'];
                $userpass=$_POST['password'];
                $showinfor=register($username,$userpass,$useremail);
		}
		 ?>
	<div class="row p-2">
		<div class="col-xl-3">
			<div class="avt">
				<input type="file" id="real-file" hidden="hidden" />
<button type="button" id="custom-button">CHOOSE A FILE</button>
<span id="custom-text">No file chosen, yet.</span>
			</div>
		</div>
		<div class="col-xl-3">
			<div class="key">
				<p >Email</p>
				<p>Password</p>
				<p>Họ và tên đệm</p>
				<p></p>
				<p>Giới tính</p>
				<p>Ngày sinh</p>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="value">
				<p><input type="text" name="useremail"></p>
				<p><input type="text" name="password"></p>
				<p><input type="text" name="username"></p>
				<p><input type="text"></p>
				<div class="round">
					<div class="row">
						<div class="col-xl-3">
							<input type="checkbox" id="checkbox" />
   							<label for="checkbox"></label><span>Nam</span> 
						</div>
						<div class="col-xl-3">
									<input type="checkbox" id="checkboxnu" />
    								<label for="checkbox"></label><span>Nu</span>
								</div>
						<div class="col-xl-3"></div>	
						<div class="col-xl-3"></div>	
					</div>
   
   
  				</div>
				<p><input type="text"></p>
				<a href="#" class="btn-success p-2">Thay đổi mật khẩu</a>
			</div>
		</div>
	
	</div>
	<div class="row">
		<div class="col-xl-6"></div>
	<button type="submit" name="submit" class="btn btn-success m-3">Cập nhật</button>
		<div class="col-xl-6"></div>
	</div>
		</form>

</div>
<script type="text/javascript">
	const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});

</script>