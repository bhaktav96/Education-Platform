<?php
	
$name = $_REQUEST['name'];
$posts = $_REQUEST['posts'];


require("db/db.php");

mysqli_query($con, "INSERT INTO posts(name, posts) VALUES('$name','$posts')");

$result = mysqli_query($con, "SELECT * FROM posts ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h4><a href='delete.php?id=" . $row['id'] . "'> X</a></h4>";
echo "<h1>" . $row['name'] . "</h1>";
echo "<h2>" . $row['date_publish'] . "</h2></br></br>";
echo "<h3>" . $row['posts'] . "</h3>";
echo "</div>";
}
mysqli_close($con);
?>