<?php
$link = mysqli_connect("localhost", "root", "", "product");

if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql ="DELETE FROM phone";
if(mysqli_query($link, $sql)){
	echo "Record was deleted successfully.";
}
else{
	echo "ERROR: Could not able to execute $sql. "
								. mysqli_error($link);
}
mysqli_close($link);
?>
