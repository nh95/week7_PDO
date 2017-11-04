<?php


$servername = "sql1.njit.edu";
$username = "nh95";
$password = "1994apache";

try {
    $conn = new PDO("mysql:host=$servername;dbname=nh95", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        echo "Connected successfully</br>";
		$stmt = $conn->prepare("SELECT * FROM accounts WHERE id<6"); 
		    $stmt->execute();
		    print  $stmt->rowCount();
		     echo" </br>";
}
catch(PDOException $e)
{
echo "connection failed:". $e->getMessage();
}
?>
