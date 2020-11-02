<?php  
  include_once ('connect.php');
  function getAllCatalog(){
  $sql="SELECT id,name from catalog order by id";
  return query($sql);
  }
  
  function addNewCatalog($id,$name){
    $sql="INSERT into catalog (id,name) values ('$id','$name')";
    execute($sql);
  }
  function getnamecata($idcatalog){
  $sql="select * from catalog where id=".$idcatalog;
  return queryOne($sql);
}
  function getCatalogByID($id){
    $sql="SELECT *FROM catalog where id=".$id;
    return queryOne($sql);
  }

  function updateCatalog($id,$name){  
    $sql="UPDATE catalog set id='$id', name='$name' where id=".$id;
    execute($sql);

  }

  function deleteCatalog($id){
    $sql="DELETE from catalog where id=".$id;
    execute($sql);
  }
?>