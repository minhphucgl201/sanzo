<div class="container" >
	<form action=""  style="width: 920px;margin-left: auto;">
		<div class="card mt-3">
        <div class="card-header">
          QUẢN LÝ Blog
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="bg-info">

                  <th scope="col"></th>
                  <th scope="col">Tên</th>
                  <th scope="col">Content</th>
                  <th scope="col">Image</th>
                  <th scope="col">Chuc Nang</th>

                </tr>
              </thead>
              <tbody>
                <?php  foreach ($blog as $news) {
                      $id=$news['id'];
                      $name=$news['name'];
                      $content=$news['content'];
                      echo '<tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="acs"></th>
                      <td>'.$news['name'].'</td>
                      <td>'.$news['content'].'</td>
                      <td><img src="../upload/'.$news['image_link'].'" width="50px"></td>
                      <td>
                        
                        <a href="admin.php?act=deleteblog&iddelete='.$id.'"  class="delete btn btn-warning" data-confirm="Are you sure to delete this item?">Delete</a>
                        <a href="admin.php?act=editblog&idedit='.$id.'" class="btn btn-info">Sửa</a>
                      </td>
                    </tr>';
                }

                ?>
                    
              </tbody>
            </table>
          </div>
        <div class="card-footer">
          <a href="#" class="btn btn-info" onclick='selectAll()'>Chọn tất cả</a>
            <a href="" class="btn btn-info">Bỏ chọn</a>
             <a href="admin.php?ctrl=catalog&action=delete" class="btn btn-info">Xóa các mục đã chọn</a>
            <a href="admin.php?act=addnewblog" class="btn btn-info">Thêm mới</a>
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