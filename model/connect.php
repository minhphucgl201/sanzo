	<?php
		 function getConnection(){
				
		$servername = "localhost";
		$username = "root";
		$password = "";

		try {
		  $conn = new PDO("mysql:host=$servername;dbname=sanzo", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $conn->exec('SET NAMES "utf8"');
		  return $conn;
		  
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}



			}
		// ham tra ve ket qua 1 mang
	function query($sql){
		$connect=getConnection();
		$result=$connect->query($sql);
		return $result;
	}
	//ham tra ve ket qua 1 phan tu
	function queryOne($sql){
		$connect=getConnection();
		$result=$connect->query($sql);
		$row=$result->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

	function execute($sql){
		$connect=getConnection();
		$result=$connect->exec($sql);
		return $result;
	}
	function executeReturnID($sql)
        {
            $connect=getConnection();
            $connect->exec($sql);
            return $connect->lastInsertId();
        }

	?>