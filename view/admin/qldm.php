      
<div class="container">
    <form action="admin.php?act=qldm" method="post"  style="width: 900px;margin-left: auto;">
      <div class="card mt-3">
        <div class="card-header">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="bg-info">
                  <th scope="col"></th>
                  <th scope="col">Mã loại</th>
                  <th scope="col">Tên loại</th>
                  <th scope="col">Chuc Nang</th>

                </tr>
              </thead>
              <tbody>
                    <?php  
                      foreach ($catalog as $quanli) {
                        $id=$quanli['id'];
                        $name=$quanli['name'];

                       echo '
                          <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="acs"></th>
                      <td>'.$quanli['id'].'</td>
                      <td>'.$quanli['name'].'</td>
                      <td>
                        
                        <a href="admin.php?act=deletecatalog&iddelete='.$id.'"  class="delete btn btn-warning" data-confirm="Are you sure to delete this item?">Delete</a>
                        <a href="admin.php?act=editcatalog&idedit='.$id.'" class="btn btn-info">Sửa</a>
                      </td>
                    </tr>
                    
                       ';
                      }
                    ?>
              </tbody>
            </table>
          </div>
        <div class="card-footer">
          <a href="#" class="btn btn-info" onclick='selectAll()'>Chọn tất cả</a>
            <a href="" class="btn btn-info">Bỏ chọn</a>
             <a href="admin.php?ctrl=catalog&action=delete" class="btn btn-info">Xóa các mục đã chọn</a>
            <a href="admin.php?act=addnewcatalog" class="btn btn-info">Thêm mới</a>
        </div>
      </div>
</form>


</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script type="text/javascript">
      function selectAll(){
        var items=document.getElementsByName('acs');
        for(var i=0; i<items.length; i++){
          if(items[i].type=='checkbox')
            items[i].checked=true;
        }
      }
      function UnSelectAll(){
        var items=document.getElementsByName('acs');
        for(var i=0; i<items.length; i++){
          if(items[i].type=='checkbox')
            items[i].checked=false;
        }
      }
   
$('.delete').on("click", function (e) {
    e.preventDefault();

    var choice = confirm($(this).attr('data-confirm'));

    if (choice) {
        window.location.href = $(this).attr('href');
    }
});
	function updatedm() {
		alert("Update thanh cong");
	}
    </script>


