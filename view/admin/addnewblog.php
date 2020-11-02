  <div class="container" >
      <div class="card mt-3" style="width: 900px;margin-left: auto;">
        <div class="card-header info">
          QUẢN LÝ Blog
        </div>
        <div class="card-body">
          <form action="admin.php?act=addnewblog" method="post" enctype="multipart/form-data" >
        
            <div class="form-group">
                <label for="">Mã Blog</label>
                <input type="text" class="form-control" name="id" placeholder="Mã loại tự phát sinh">
              </div>
              <div class="form-group">
                <label for="">Tên blog</label>
                <input type="text"  class="form-control" name="name" placeholder="Tên loại">

              </div>
              <div class="form-group">
                <label for="">Content blog</label>
                <input type="text"  class="form-control" name="content" placeholder="Nội dung">

              </div>
              <div class="form-group">
                <label for="">Blog Image</label>
                <input type="file" name="blogImage" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" name="submit" value="submit" class="btn btn-success">Submit
                </button>
               
               
                
                  
                  <a href="admin.php?act=blog" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>


  </div>
  
  <script type="text/javascript">
     function adddm(){
      alert("Thêm blog thành công");
}
  </script>
      