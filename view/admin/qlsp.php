 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
<form action="admin.php?act=qlsp" method="post" id="form1" style="width: 900px;margin-left: auto;">
      <div class="card mt-3">
        <div class="card-header">
          QUẢN LÝ HÀNG HOÁ
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="bg-info">
                  <th scope="col"></th>
                  <th scope="col">Mã hàng</th>
                  <th scope="col">Tên hàng</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Gia</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                <?php
                
                
                
                  foreach ($products as $p) {
                    $cateId=$p['id'];
                    $namedm=getAllCatalog($cateId);
                    echo '
                    <div class="checkbox">
                      <tr>
                      <th scope="row"><label><input type="checkbox" class="checkitem" name="chon"></label></th>
                      <td>'.$p['id'].'</td>
                      <td>'.$p['name'].'</td>
                      <td><img src="../upload/'.$p['image_link'].'" width="50px"></td>
                      <td>'.$p['price'].'</td>
                      <td>
                        <a href="admin.php?act=deleteproduct&iddelete='.$p['id'].'" class="delete btn btn-warning" data-confirm="Are you sure to delete this item?">Xoá</a>
                        <a href="admin.php?act=editproduct&idedit='.$p['id'].'" class="btn btn-info">Sửa</a>
                      </td>
                    </tr>
                    <div>
                    ';
                  }
                
                 ?>

              </tbody>
            </table>
          </div>
        <div class="card-footer">
            
             <a href="" class="checkbox btn btn-info"><input type="checkbox" id="checkall"> Chọn tất cả/bỏ chọn</a> 
            
            <a href="index.php?ctrl=product&action=delete&selectall"  class="btn btn-info">Xoá danh mục đã chọn</a>
            <a href="index.php?ctrl=product&action=addnew" class="btn btn-info">Thêm mới</a>
            
            
        </div>
      
      </div>
</form>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script >
  
      $("#checkall").change(function(){
        $(".checkitem").prop('checked',$(this).prop("checked"))
      });
      $(".checkitem").change(function(){  
        if ($(this).prop('checked')==false) {
          $("#checkall").prop('checked', false)
        }
        if ($(".checkitem:checked").length == $(".checkitem").length) {
          $("#checkall").prop('checked', true)
        }
      });
  $('.delete').on("click", function (e) {
    e.preventDefault();

    var choice = confirm($(this).attr('data-confirm'));

    if (choice) {
        window.location.href = $(this).attr('href');
    }
});
 </script>