<html>
<body>

<?php

$dbname = 'HC';
$dbuser = 'apo';  
$dbpass = 'test1234'; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$value = $_GET["value"];


$query = "INSERT INTO iot_project (value) VALUES ('$value')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>
