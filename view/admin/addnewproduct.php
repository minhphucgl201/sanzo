  <div class="container">
    
      <div class="card mt-3">
        
        <div class="card-body">
          <form action="admin.php?act=addnewproduct" method="post" enctype="multipart/form-data" style="width: 900px;margin-left: auto;">
          <div class="card-header info">
          QUẢN LÝ HÀNG HOA
        </div> 
              <div class="form-group">
                <label for="">Product name</label>
                <input type="text" name="productName" class="form-control" placeholder="Tên hang">
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
                <label for="">Product Price</label>
                <input type="text" name="productPrice" class="form-control" placeholder="Gia hang">
              </div>
              <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="productImage" class="form-control">
              </div>
              <div class="form-group">
                  <button type="submit" value="submit" name="submit" onclick="notify()" class="btn btn-primary">Lưu</button>
                  <a href="admin.php?act=qlsp" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
  </div>
<script type="text/javascript">
  function notify() {
  alert("thêm sp thành công");
}
</script>