<?php 
  include_once ('connect.php');

    function  showbl($id){
     	$sql="SELECT * from comment  where id=".$id;
     	return query($sql);
     }
     // function getnamebl($id){
     //   $sql="select * from sanpham where id_sanpham=".$id;
   
     //        return queryOne($sql);
     // }

    //  //ham phan trang
    //  function get_all_comment() {
    //     $sql="select * from comment ";
    //         $conn=connect();
    //     $stmt = $conn->prepare($sql);
    //     $stmt->execute();
    //     return $stmt->fetchAll();
    //  }
 ?>