<?php  
    ob_start();
?>
<?php 
    require_once  '../model/connect.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $username=$_POST['name'];
        $useremail=$_POST['email'];
        $userpass=$_POST['pass'];
        $usersubmit=$_POST['signup'];
        if (empty($username) or empty($useremail) or empty($userpass)) {
            $error='Không được để trống';
        }
        if (strlen($username) <4 or strlen($username) >50) {
            $error="Tài khoản chỉ từ 4 --> 50 kí tự";
        } 
      
       
        if (!isset($error)) {
            
            $stmt=$conn->prepare("SELECT username from user where username=:username");
            $stmt->bindValue(':username', $username);
            $stmt->execute();
            $user =$stmt->fetch(PDO::FETCH_ASSOC); 
            if ($user) {
                $error="Tài khoản này đã tồn tại";
            
            }else{
                $userpass=password_hash($userpass,PASSWORD_DEFAULT);
                // $sql=;
                $stmt=$conn->prepare( "INSERT INTO user (username,password,useremail) VALUES ('$username','$userpass','$useremail')");
                $sus=$stmt->execute();
                header('Location:../controller/index.php');
            }
        }
       
    }

 ?>
<section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>Loi!</strong> <?php echo $error; ?>
                        </div>
                    <?php endif ?>
                        <form action="" method="post">
                            <input type="text" name="name" placeholder="Name"/>
                            <input type="email" name="email" placeholder="Email Address"/>
                            <input type="password" name="pass" placeholder="Password"/>
                             <?php if (isset($sus)): ?>
                        <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong></strong> <?php echo "suscessfully"; ?>
                        </div>
                    <?php endif ?>
                            <button type="submit"  name="signup" onclick="btnupdate()" class="btn btn-default">Signup
                            </button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->

    <script type="text/javascript">
    function btnupdate(){
        alert("Đăng kí  thành công")
    }
  
</script>