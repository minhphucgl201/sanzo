<?php 
	function setuser($username,$password){
		$sql="SELECT * from user where username=:username and password=:password";
		$stmt = $conn->prepare($sql);
  		$stmt->execute();
  		$stmt->setFetchMode(PDO::FETCH_ASSOC);	
  		return $stmt->fetchAll();
	}
 ?>