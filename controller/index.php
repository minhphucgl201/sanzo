<?php 
    session_start();
    ob_start();
    include '../model/connect.php';
    include '../model/connect_mysqli.php';
    // load database cho trang chu
    include '../model/danhmuc.php';
    include '../model/sanpham.php';
    include '../model/thongke.php';
    include '../model/cart.php';
    include '../model/admin.php';
    include '../model/binhluan.php';
    $products=getAllProduct();
    $countAllProduct=countAllProduct();
    require "../view/header.php";
    include '../global.php';
    $conn=getConnection();
    $catalog=getAllCatalog();

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'register':
                include "../view/register.php";
                break;
            case 'login':
                include_once "../view/login.php";
                break;
            case 'infor':
                   
                   include '../view/infor.php';
               
               break;
            case'home':
                $catalog=getAllCatalog();

                include_once '../view/home.php';
                break;
            
                break;
            case 'blog':
                include_once "../view/blog.php";
                break;
            case 'contact':
                include_once "../view/contact.php";
                break;
            case 'allproduct':
                $catalog=getAllCatalog();
                $products=getAllProduct();
                $countAllProduct=countAllProduct();
                $products=getAllProduct();
                include_once "../view/allproduct.php";
                break;
            case 'product':
                // $catalog=getAllCatalog();
                $countAllProduct=countAllProduct();
                $products=getAllProduct();
                if (isset($_GET['idcatalog']) && ($_GET['idcatalog'])){
                    $idcatalog=$_GET['idcatalog'];
                    $product=showdetail($idcatalog);
                    $catalogname=getCatalogByID($idcatalog);
                    $countid=countProductId($idcatalog);
                    $dssp=showsp($idcatalog);
                }
                // else{
                //     $idcatalog=0;
                //     $catalogname="";
                // } 
                include_once "../view/product.php";
                break;
             case 'productdetail':
                        // lấy id trên url

                        if (isset($_GET['idcatalog']) && ($_GET['idcatalog'])>0) {
                            $id=$_GET['idcatalog'];
                            $product=showdetail($id);
                            $dssp=showsp($id);

                            // $getidbl=getnamebl($id);
                            // $products=getAllProduct();
                            $dsbl=showbl($id);
                        }
                       include "../view/productdetail.php";
                       break;
                  
                case 'cart':
                    if (!isset($_SESSION["cart"])) {
                        $_SESSION["cart"]=array();
                    }
                               
                    $error=false;           
                    if (isset($_GET["action"])) {
                        $act=$_GET["action"];
                        function update_cart($add= false){
                             foreach ($_POST["quantity"] as $id => $quantity) {
                                    if ($quantity == 0) {
                                        unset($_SESSION['cart'][$id]);
                                    }else{
                                        if ($add) {
                                            $_SESSION['cart'][$id] +=$quantity;
                                        }
                                        else{
                                            $_SESSION['cart'][$id] =$quantity;
                                        }
                                    }
                                    
                                }
                        }
                        switch ($act) {
                            case "add":

                               update_cart(true);
                                // var_dump($_SESSION['cart']);
                        
                                break;
                            case 'delete':
                                if (isset($_GET['id'])) {
                                    unset($_SESSION['cart'][$_GET['id']]);
                                }

                                break;
                            case 'update':
                                if (isset($_POST['update_click'])) {
                                    update_cart();
                                }
                                // if (isset($_POST['update_click'])) {
                                //     echo "update";
                                // }
                                // elseif(isset($_POST['order_click'])){
                                //     echo "dat hang";
                                // }
                                break;
                            case 'checkout':
                                
                                if (isset($_POST['order_click'])) {
                                   if (empty($_POST['fullName'])) {
                                       $error="Bạn chưa nhập tên người nhận";
                                   }
                                   elseif(empty($_POST['email'])) {   
                                        $error="Bạn chưa nhập email";
                                   }
                                    elseif(empty($_POST['address'])) {   
                                        $error="Bạn chưa nhập address";
                                   }
                                    elseif(empty($_POST['phone'])) {   
                                        $error="Bạn chưa nhập phone";
                                   }
                                    
                                    
                                }
                                break;        
                        }
                    }
                        if(!empty($_SESSION['cart'])) {
                            $query="SELECT * FROM `product` WHERE `id` IN (".implode(",",array_keys($_SESSION['cart'])).") ";
                            $products=mysqli_query($con,$query);
                            // var_dump($products);
                            
                        }
                    
                     
                               
                    include('../view/cart.php');
                    break;
                

            default :
            $products=getAllProduct();
             include_once '../view/home.php';              
            
            
        }
    }else {
        $products=getAllProduct();
        include_once "../view/home.php";
    }
    


    
    include_once "../view/footer.php";

?>

