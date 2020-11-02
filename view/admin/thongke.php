<div class="container"  style="width: 750px;margin-right: auto;">
	
<div class="card mt-3">
        <div class="card-header">
          Thống kê
        </div>
        <div class="card-body">
        	<table class="table">
			  	
			    <tr>
			      <th scope='col'>Loại hàng</th>
			      <th scope='col'>Tổng số</th>
			    </tr>
        		<?php  
			  		foreach($countproduct as $count) {
			  			$name=$count['name'];
			  			$count=$count['tongso'];
			  		
			  	echo " <thead>
			  </thead>
			  <tbody>
			    <tr>
			      <td>$name</td>
			      <td> $count</td>
			    </tr>
			  </tbody>";
			 }
			  ?>
			</table>
        </div>
        <div class="card-footer">
        	<a href="admin.php?act=chart" class="btn btn-info">Xem bieu do</a> 
        </div>
    </div>
</div>