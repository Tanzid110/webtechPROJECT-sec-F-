<?php
$conn = mysqli_connect('localhost','root','','product');

if($conn === false){
	die("ERROR: Could not connect. "
				. mysqli_connect_error());
}
$itemname = $_POST['itemname'];
$buy = $_POST['buy'];
$sell = $_POST['sell'];
$sql = "UPDATE phone SET Buying Price=$buy, Selling Price=$sell WHERE itemname=$itemname";
if(mysqli_query($conn, $sql)){
	header('location: display.php');
} else {
	echo "ERROR: Could not able to execute $sql. "
							. mysqli_error($conn);
}
mysqli_close($conn);
?>
