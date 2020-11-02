<?php 
  if (isset($_GET['idedit'])&& ($_GET['idedit'])>0 ) {
    
 ?>
    <div class="container" style="width: 750px;margin-right: auto;">
         <div class="card mt-3">
        <div class="card-header info">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <form action="admin.php?act=editcatalog" method="post">
              <div class="form-group">
                <label for="">Update Ten id</label>
                <input type="text" class="form-control" name="id" value="<?= $updatedm['id']?>" >

              </div>
              <div class="form-group">
                <label for="">Update Ten danh mục</label>
                <input type="text" class="form-control" name="name" value="<?= $updatedm['name']?>" >

              </div>
              <input type="hidden" name="id" value="<?= $updatedm['id']?>">
              <div class="form-group">
                 <input type="submit" name="updatedm" onclick="btnupdate()" class="btn btn-outline-dark"  value="Cập nhật">
                
                  <a href="admin.php?act=qldm" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>

    </div>
     
      <?php  
        }else{
      ?>
    <div class="container" style="width: 750px;margin-right: auto;">
        <div class="card mt-3">
        <div class="card-header info">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <form action="admin.php?act=qldm" method="post">
              <div class="form-group">
                <label for="">Update Ten danh mục</label>
                <input type="text" class="form-control" name="id">

              </div>
              <div class="form-group">
                <label for="">Update Ten danh mục</label>
                <input type="text" class="form-control" name="name"  >

              </div>
              <div class="form-group">
                 <input type="submit" name="updatedm" onclick="btnupdate()" class="btn btn-outline-dark"  value="cap nhap dm">
                  <a href="admin.php?act=qldm" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
    </div>  
      
      <?php  
        }
      ?>
  <script type="text/javascript">
  function btnupdate(){
    alert("Update sản phẩm thành công")
  }
  
</script>