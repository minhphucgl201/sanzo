<?php 
  if (isset($_GET['idedit'])&& ($_GET['idedit'])>0 ) {
    
 ?>    
      <div class="card mt-3">
        <div class="card-body">
          <form action="admin.php?act=editproduct" method="post" enctype="multipart/form-data" style="width: 900px;margin-left: auto;"> 
        <div class="card-info">
          <h2>Quản lí hàng hóa</h2>
        </div>
         <div class="card-info">
        	<p><mark>Cập nhật sản phẩm</mark></p>
        </div>
          	  <div class="form-group">
                <label for="">Product Id</label>
                <input type="text" name="productId" value="<?= $updateproduct['id']?>" class="form-control" placeholder="nhap id">
              </div>
              <div class="form-group">
                <label for="">Product name</label>
                <input type="text" name="productName" value="<?= $updateproduct['name']?>" class="form-control" placeholder="Tên hang">
              </div>
              <div class="form-group">
                <label for="">Catalog name</label>
                <select name="catalogId">
                <?php
                  foreach($catalogs as $cate){
                    echo '<option value="'.$cate['id'].'">'.$cate['name'].'</option>';
                  }
                ?>     
                </select>
              </div>
              <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="productImage" value="<?= $updateproduct['img']?>" class="form-control" placeholder="chon img">
              </div>
               <div class="form-group">
                <label for="">Product Price</label>
                <input type="text" name="productPrice" value="<?= $updateproduct['price']?>" class="form-control" placeholder="Gia hang">
              </div>
               <input type="hidden" name="id" value="<?= $updateproduct['id']?>">
              <div class="form-group">
                    <input type="submit" name="updateproduct" onclick="btnupdate()" class="btn btn-outline-dark"  value="Cập nhật">
                  <a href="admin.php?act=qlsp" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
      <?php 
      	}else{
      		?>
      	     <div class="card mt-3">
        <div class="card-header info">
          QUẢN LÝ HÀNG HOA
        </div>
         <div class="card-info">
        	<h3>Cập nhật sản phẩm</h3>
        </div>
        <div class="card-body">
          <form action="admin.php?act=editproduct" method="post" enctype="multipart/form-data" style="width: 900px;margin-left: auto;"> 
          		<div class="form-group">
                <label for="">Product Id</label>
                <input type="text" name="productId"  class="form-control" placeholder="nhap id">
              </div>
              <div class="form-group">
                <label for="">Product name</label>
                <input type="text" name="productName"  class="form-control" placeholder="Tên hang">
              </div>
              <div class="form-group">
                <label for="">Catalog name</label>
                <select name="catalogId">
                <?php
                  foreach($catalogs as $cate){
                    echo '<option value="'.$cate['id'].'">'.$cate['name'].'</option>';
                  }
                ?>     
                </select>
              </div>
              <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="productImage"  class="form-control">
              </div>
               <div class="form-group">
                <label for="">Product Price</label>
                <input type="text" name="productPrice"  class="form-control" placeholder="Gia hang">
              </div>
              <input type="hidden" name="id" value="">
              <div class="form-group">
                  <input type="submit" name="updateproduct" onclick="btnupdate()" class="btn btn-outline-dark"  value="Cập nhật">
                  <a href="admin.php?act=qlsp" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
      	
       <?php 
       		}
        ?>
<script type="text/javascript">
	function btnupdate(){
		alert("Update sản phẩm thành công")
	}
  function notify() {
  alert("Update sản phẩm thành công");
}
</script>