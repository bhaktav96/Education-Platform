<?php
require("db/db.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($con,"DELETE FROM file WHERE id='$id'");
header("location: index2.php");
}
mysqli_close($con);
?>