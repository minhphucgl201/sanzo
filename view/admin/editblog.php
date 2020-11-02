<?php 
  if (isset($_GET['idedit'])&& ($_GET['idedit'])>0 ) {
    
 ?>
    <div class="container" style="width: 750px;margin-right: auto;">
         <div class="card mt-3">
        <div class="card-header info">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <form action="admin.php?act=editblog" style="width: 750px;margin-right: auto;" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <label for="">Update id</label>
                <input type="text" class="form-control" name="id" value="<?= $updateblog['id']?>" >

              </div>
              <div class="form-group">
                <label for="">Update Ten blog</label>
                <input type="text" class="form-control" name="name" value="<?= $updateblog['name']?>" >

              </div>
              <div class="form-group">
                <label for="">Update content blog</label>
                <input type="text" class="form-control" name="content" value="<?= $updateblog['content']?>" >

              </div>
              <div class="form-group">
                <label for="">Update img blog</label>
                <input type="file" class="form-control" name="blogImage" value="<?= $updateblog['image_link']?>" >

              </div>
              <input type="hidden" name="id" value="<?= $updateblog['id']?>">
              <div class="form-group">
                 <input type="submit" name="updateblog" onclick="btnupdate()" class="btn btn-outline-dark"  value="Cập nhật">
                
                  <a href="admin.php?act=blog" class="btn btn-danger">Danh sách</a>
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
          <form action="admin.php?act=editblog" method="post" style="width: 750px;margin-right: auto;" enctype="multipart/form-data" >
              <div class="form-group">
                <label for="">Update id</label>
                <input type="text" class="form-control" name="id"  >

              </div>
              <div class="form-group">
                <label for="">Update Ten blog</label>
                <input type="text" class="form-control" name="name"  >

              </div>
              <div class="form-group">
                <label for="">Update content blog</label>
                <input type="text" class="form-control" name="content"  >
              </div>
              <div class="form-group">
                <label for="">Update img blog</label>
                <input type="file" class="form-control" name="blogImage"  >

              </div>
              <input type="hidden" name="id" >
              <div class="form-group">
                 <input type="submit" name="updateblog" onclick="btnupdate()" class="btn btn-outline-dark"  value="Cập nhật">
                
                  <a href="admin.php?act=blog" class="btn btn-danger">Danh sách</a>
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