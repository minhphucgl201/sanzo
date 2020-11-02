<?php
    include_once('connect.php');
      function getAllProduct()
      {
          $sql="SELECT * from product order by id";
          return query($sql);
      }
      function showsp($idcatalog){
        $sql="SELECT * FROM product where catalog_id=".$idcatalog;
   
        return query($sql);
    }
   
     
      function addProduct($catalogId,$name,$price,$img)
      {
        $sql="INSERT INTO product (catalog_id,name,price,image_link) values('$catalogId','$name','$price','$img')";
        execute($sql);
      }
      function deleteProduct($id){
        $sql="DELETE from product where id=".$id;
        execute($sql);
      }

      function getProductByID($id){
        $sql="SELECT * FROM product where id=".$id;
        return queryOne($sql);
  }  
      function getProductByCateID($cataId)
      {
          $sql="SELECT * from product where catalog_id='$cataId' order by id";
          return query($sql);
      }

      function showdetail($id){
        $sql="SELECT * from product where id=".$id;
        return queryOne($sql);
      }
      function updateProduct($id,$cateId,$name,$price,$img){  
       $sql="UPDATE product set id='$id' ,catalog_id='$cateId', name='$name',price='$price', image_link='$img' where id=".$id;
         execute($sql);

  }
      

?>
