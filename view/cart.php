

<section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                              <h3>Giỏ hàng của bạn</h3>
                      <form action="cart=update.html" method="post">
              <table class="table" border="1">
                      <thead>
                          <tr>
                            <th>STT</th>
                           <th>Img</th>
                            <th>Ten SP</th>
                            <th>So luong</th>
                            <th>Gia</th>
                            <th>Thanh tien</th>
                            <th>Chức năng</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $total=0;
                        $num=1;
                        while ($row=mysqli_fetch_array($products)) {
                          
                        ?>
<tr>
                              <td><?=$num?></td>
                              <td><img src="../upload/<?=$row['image_link']?>" alt="" style="width: 100px;height: 80px;"></td>
                              <td><?=$row['name']?></td>
                              <td><input type="text"  value="<?=$_SESSION['cart'][$row['id']]?>" name="quantity[<?=$row['id']?>]" style="border: 1px solid #DEDEDC; color: #696763; font-family: 'Roboto', sans-serif;
    font-size: 20px; font-weight: 700; height: 33px; outline: medium none; text-align: center;
    width: 50px;"></td>
                              <td><?=number_format($row['price'],0,".",".")?></td>
                              <td><?=number_format($row['price'] * $_SESSION['cart'][$row['id']],0,".",".") ?></td>
                              <td><a href="cart=delete&id=<?=$row['id']?>"><button type="button" class="btn btn-success">Xoa</button></a></td>
                          </tr>
                        <?php $num++;
                              $total +=$row['price'] * $_SESSION['cart'][$row['id']];
                           }?> 
                    </tbody>
                      <tbody>
                           <tr>
                            <th></th>
                           <th>Tổng tiền</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?=number_format($total,0,".",".")?></td>
                            <td></td>
                          </tr>
                          </tbody>
                </table>
                <div id="form-button">
                  <button type="submit"  name="update_click" class="btn btn-primary">
                             <a href="cart=update.html"> Update </a> 
                          </button>
                </div>
                </form>
            </div>
                   <?php if (!empty($error)) { ?>
                        <div id="notify-msg">
                       <?php if (isset($error)): ?>
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>Loi!</strong> <?php echo $error; ?><a href="index.php?act=cart">Back</a>
                        </div>
                    <?php endif ?> 
                        </div>
                      
                    <?php } else{ ?>
                      <h3 style="width:100%">Thông tin người đặt hàng</h3>
              <form method="post" action="index.php?act=cart&action=checkout">
                  <div class="row">
                      <div class="col-md-4">
                          Họ va ten
                      </div>
                      <div class="col-md-8">
                          <input type="text" name="fullName" class="form-control" />
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="col-md-4">
                          Email:
                      </div>
                      <div class="col-md-8">
                          <input type="email" name="email" />
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="col-md-4">
                          Địa chỉ:
                      </div>
                      <div class="col-md-8">
                          <input type="text" name="address" class="form-control" />
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="col-md-4">
                          So điện thoại:
                      </div>
                      <div class="col-md-8">
                          <input type="text" name="phone" class="form-control" />
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="col-md-12">
                        <button type="submit"  name="order_click" onclick="sweetalertclick()" class="btn btn-primary">
                             <a href="index.php?act=cart&action=checkout"> Order </a> 
                          </button>
                      </div>
                  </div>
                  <br/>
              </form>
               <?php } ?>
        </div>
    </section> <!--/#cart_items-->
                 

  <script type="text/javascript">
        function sweetalertclick(){
          // Swal.fire("Add to cart ", "You clicked the button!", "success");
        }
    </script>