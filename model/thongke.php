<?php  
	include_once ('connect.php');
	function countProduct(){
		$sql="SELECT  catalog.name, count(product.id) as tongso
					FROM	catalog,product
					WHERE  catalog.id=product.catalog_id 
					group BY catalog.name";
		return query($sql);			
	}
	function countAllProduct(){
		$sql="SELECT count(id) as allproduct from product";
		return query($sql);
	}
	function countProductId($idcatalog){
		$sql="SELECT count(id) as productId from product where id=".$idcatalog;
		return query($sql);
	}
?>