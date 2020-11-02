<?php  
    ob_start();
?>

<?php 
    session_start();
    // load database cho trang chu
    include '../model/connect.php';
    include '../model/danhmuc.php';
    include '../model/sanpham.php';
    include '../model/thongke.php';
    include '../model/blog.php';
    include '../global.php';
    include '../view/admin/header.php';

    $countproduct=countProduct();
    if (isset($_SESSION['sid'])&&($_SESSION['sid'])>0) {
        # code...
    
    if (isset($_GET['act'])) {
        $act=$_GET['act'];
        switch ($act) {
            case 'home':
                include '../view/admin/slidebar.php';
                include '../view/admin/home.php';
                break;
            case 'blog':
                $blog=getAllBlog();
                include '../view/admin/slidebar.php';
                include '../view/admin/blog.php';
                break;    
            case 'addnewblog':
                if(isset($_POST['submit']) && ($_POST['submit'])) {

                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $content=$_POST['content'];
                    $img=$_FILES['blogImage']['name'];//lay ten hinh
                    $path='../upload/'.$img;
                    addNewBlog($id,$name,$content,$img);
                }
                include '../view/admin/slidebar.php';
                include '../view/admin/addnewblog.php';
                break;
            case 'editblog':
                if (isset($_GET['idedit']) && ($_GET['idedit']) >0) {
                    $updateblog=getBlogID($_GET['idedit']);
                }
                if (isset($_POST['updateblog'])&&($_POST['updateblog'])) {
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $content=$_POST['content'];
                    $img=$_FILES['blogImage']['name'];//lay ten hinh
                    $path='../upload/'.$img;
                    updateBlog($id,$name,$content,$img);
                    }
                 include '../view/admin/slidebar.php';
                include '../view/admin/editblog.php';
                break;
            case 'deleteblog':
                if(isset($_GET['iddelete']) &&($_GET['iddelete'])) {
                $id=$_GET['iddelete'];
                deleteBlog($id);
                }
                $blog=getAllBlog();
                include '../view/admin/slidebar.php';
                include '../view/admin/blog.php';

                break;            
            case 'qldm':
                //lay du lieu
                //show dm
                    // $dsdm=getAllCatalog();
                //edit
                    // load dm
                    if (isset($_GET['idedit']) &&($_GET['idedit'])) {
                        $updatedm=getCatalogByID($_GET['idedit']);
                    }
                    //update dm
                    if (isset($_POST['updatedm'])&&($_POST['updatedm'])) {
                                $id=$_POST['id'];
                                $name=$_POST['name'];
                                updateCatalog($id,$name);
                            }
                //delete
                   if(isset($_GET['iddelete']) &&($_GET['iddelete'])) {
                    $id=$_GET['iddelete'];
                        deleteCatalog($id);
                    }
                    $catalog=getAllCatalog();
                include '../view/admin/slidebar.php';   
                include '../view/admin/qldm.php';
                break;
            case 'addnewcatalog':
                if(isset($_POST['submit']) && ($_POST['submit'])) {
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    addNewCatalog($id,$name);
                }
                include '../view/admin/slidebar.php';
                include '../view/admin/addnewcatalog.php';
                break;
            case 'editcatalog':
                if (isset($_GET['idedit']) &&($_GET['idedit'])) {
                    $updatedm=getCatalogByID($_GET['idedit']);
                }
                if (isset($_POST['updatedm'])&&($_POST['updatedm'])) {
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    updateCatalog($id,$name);
                    }
            // $id=$_GET['id'];
                include '../view/admin/slidebar.php';
                include '../view/admin/editcatalog.php';
                break;
            case 'deletecatalog':
                if(isset($_GET['iddelete']) &&($_GET['iddelete'])) {
                $id=$_GET['iddelete'];
                deleteCatalog($id);
                }
                $catalog=getAllCatalog();
                include '../view/admin/slidebar.php';
                include '../view/admin/qldm.php';

                break;
                //end qldm
            case 'qlsp':
                 $products=getAllProduct();
                  include '../view/admin/slidebar.php';
                  include '../view/admin/qlsp.php';
                  
                  break;
            case 'addnewproduct':
                if (isset($_POST['submit']) && ($_POST['submit'])) {
                    $cateId=$_POST['catalogId'];
                    $name=$_POST['productName'];
                    $price=$_POST['productPrice'];
                    $img=$_FILES['productImage']['name'];//lay ten hinh
                    $path='../upload/'.$img;
                  
                    addProduct($cateId,$name,$price,$img);
                  
                }
                   $catalogs=getAllCatalog();

                    include '../view/admin/slidebar.php';
                    include '../view/admin/addnewproduct.php';
                    break;
            case 'editproduct':
                if (isset($_GET['idedit']) &&($_GET['idedit'])) {
                    $updateproduct=getProductByID($_GET['idedit']);
                  }
                if (isset($_POST['updateproduct']) && ($_POST['updateproduct'])) {
                    $id=$_POST['productId'];
                    $cateId=$_POST['catalogId'];
                    $name=$_POST['productName'];
                    $price=$_POST['productPrice'];
                    $img=$_FILES['productImage']['name'];//lay ten hinh
                    $path='../upload/'.$img;
                    updateProduct($id,$cateId,$name,$price,$img);
                }
                    $catalogs=getAllCatalog();
                    include '../view/admin/slidebar.php';
                    include '../view/admin/editproduct.php';
              break;
           
            case 'deleteproduct':
                if (isset($_GET['iddelete']) && ($_GET['iddelete'])) {
                $id=$_GET['iddelete'];
                deleteProduct($id);
              }
                $products=getAllProduct();
                include '../view/admin/slidebar.php';
                include '../view/admin/qlsp.php';
                break;                      
            case 'thongke':
                $countproduct=countProduct();
                include '../view/admin/slidebar.php';
                include '../view/admin/thongke.php';
                if (isset($_GET['chart']) && ($_GET['chart'])) {
                    $chart=$_GET['chart'];
                    $items=countProduct($chart);
                    include '../view/admin/charts.php';
                }
                break;
            case 'chart':
               
                $items=countProduct();
                include '../view/admin/slidebar.php';
                include '../view/admin/charts.php';
            
                break;  
            case 'user':
            //dang ki

            //dang nhap

            //thoat
            if (isset($_GET['logout']) &&($_GET['logout'])>0) {
                unset($_SESSION['id']);
                header('location: login.php');
            }
            
            break;
            
            default:
                include '../view/admin/home.php';
                break;
        }
    }
    
    else{

        include '../view/admin/slidebar.php';
        include '../view/admin/home.php';
    }
    include '../view/admin/footer.php';

}

    else{
        header('location:login.php');
    }
 ?>