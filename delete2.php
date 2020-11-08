<?php
require("db1/db.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($con,"DELETE FROM comments WHERE id='$id'");
header("location: index4.php");
}
mysqli_close($con);
?>