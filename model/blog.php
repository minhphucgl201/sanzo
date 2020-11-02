<?php  
  include_once ('connect.php');
  function getAllBlog(){
  $sql="SELECT * from blog order by id";
  return query($sql);
  }

   function addNewBlog($id,$name,$content,$img){
    $sql="INSERT into blog (id,name,content,image_link) values ('$id','$name','$content','$img')";
    execute($sql);
  }
   function updateBlog($id,$name,$content,$img){  
    $sql="UPDATE blog set id='$id', name='$name',content='$content',image_link='$img' where id=".$id;
    execute($sql);

  }
    function getBlogID($id){
    $sql="SELECT * FROM blog where id=".$id;
    return queryOne($sql);
  }
  function deleteBlog($id){
    $sql="DELETE from blog where id=".$id;
    execute($sql);
  }
?>