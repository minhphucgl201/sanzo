<?php 
// ham check user
function checkuser($user,$pass){
	$sql="select * from admin where user='".$user."' and pass='".$pass."'";
	$conn=getConnection();
	$stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);  
    return $stmt->fetch();
}
	function register($username,$userpass,$useremail){
		$sql="INSERT INTO user (username,password,useremail) VALUES ('$username','$userpass','$useremail')";
		return execute($sql);
	}
 ?>
