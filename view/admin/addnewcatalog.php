  <div class="container" style="width: 750px;margin-left: auto;">
      <div class="card mt-3">
        <div class="card-header info">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <form action="admin.php?act=addnewcatalog" method="post">
        
            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" class="form-control" name="id" placeholder="Mã loại tự phát sinh">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text"  class="form-control" name="name" placeholder="Tên loại">

              </div>

              <div class="form-group">
                <button type="submit" name="submit" value="submit" onclick="adddm()" class="btn btn-success">Submit
                </button>
               
               
                
                  
                  <a href="admin.php?act=qldm" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>


  </div>
  
  <script type="text/javascript">
     function adddm(){
      alert("Thêm sản phẩm thành công");
}
  </script>
      